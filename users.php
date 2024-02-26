<?php
require('./conection.php');

$search_term = isset($_GET['search']) ? $_GET['search'] : null;

if ($search_term) {
    $query = "SELECT * FROM crudtable WHERE id = :id";
    $stmt = crud::conect()->prepare($query);
    $stmt->bindParam(':id', $search_term);
    $stmt->execute();
    $p = $stmt->fetchAll();

    if (count($p) > 0) {
        // If a user is found, redirect to website.php with the user ID as a parameter
        header("Location: website.php?id=" . $search_term);
        exit;
    }
} else {
    // Pagination code
    $records_per_page = 10;
    $query = "SELECT COUNT(*) FROM crudtable";
    $result = crud::conect()->query($query)->fetchColumn();
    $total_records = $result;
    $total_pages = ceil($total_records / $records_per_page);
    $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($current_page - 1) * $records_per_page;
    $p = crud::Selectdata();
}

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $e=crud::delete($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
table {
    width: 70%;
    margin: auto;
    position: fixed;
    top: 50%; 
    left: 55%; 
    transform: translate(-50%, -50%);
    box-shadow: 0 0 20px rgba(0,0,0,0.15); 
}
table:hover {
    background-color: #f5f5f5;
}
table,tr,td,th {
    border: 1px solid rgb(200,200,200);
    border-collapse: collapse;
    padding: 10px;
}
tr:hover {
    background-color: #f0f0f0;
}

th {
    width: 100px;
    height: 30px;
    background: green;
    color: white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
th:hover {
    background-color: yellow;
}


td {
    text-align: center;
    font-size: 16px; 
    color: white;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),  url(cpsu.jpg) no-repeat;
    background-size: cover;
    background-attachment: center;
}
td:hover {
    background-color: yellow;
}
a {
    text-decoration: none;
    color: dodgerblue; 
}
a img {
    width: 20px;
    height: 20px; 
}
body {
    display: fixed;
    flex-direction: column;
    min-height: 100vh;
    width: 100%;
    position: relative;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),  url(cpsu12.jpg) no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
    }
.topnav input[type="text"] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
.topnav input[type="submit"] {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav input[type="submit"]:hover {
  background-color: #bbb;
}
.topnav {
  overflow: hidden;
  background-color: green;
  position: fixed; 
  top: 0;
  left: 0;
  width: 100%;
}
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.active {
  background-color: #2196F3;
  color: white;
}
.topnav input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 30px;
  font-size: 17px;
}
footer {
    text-align: center;
    padding: 10px;
    background-color: green;
    position: fixed;
    bottom: 0;
    font-size: 20px;
    width: 100%;
}
</style>
</head>

<body>
</head>
<body>
<header>
    <div class="topnav">
		<ul>
			<a class="active" href="admin.php">DASHBOARD</a>
            <a href="logout.php">LOG OUT</a>   
            <a href="login.php">LOG IN</a>         
            <form action="website.php" method="get">
                  <input type="text" name="search" placeholder="Search..">
            </form> 
		</ul>

</div>
    </header>
     <table>
        <thead>
            <tr>
                <th>NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>DELETE</th>
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
        <?php
    if (count( $p)>0) {
        for ($i=0; $i < count( $p); $i++) { 
            echo '<tr>';
            foreach ( $p[$i] as $key => $value) {
                if ($key!='id') {
                    echo '<td>'.$value.'</td>';
                }
            }
            ?>

            <td><a href="users.php?id=<?php echo $p[$i]['id'] ?>"><img src="./trash.svg" alt="" srcset=""></a></td>
            <td><a href="upDate.php?id_up=<?php echo $p[$i]['id'] ?>"><img src="./edit.svg" alt="" srcset=""></a></td>
            <?php
            echo '</tr>';
        }
    }
    ?>
                
        </tbody>
    </table>
   
    <footer>
        <p>CRUD SYSTEM FOR SIR JUNEREY PALABRICA</p>
    </footer>
</body>
</html>