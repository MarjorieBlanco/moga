
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UPt</title>
    <style>
   @import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding: 0;
	margin: 0;
}
body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

.wrapper {
    position: relative;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),  url(cpsu.jpg) no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 100vh;
}
.navbar{
	position: fixed;
	height: 70px;
	width: 100%;
	top: 0;
	left: 0;
	background: green;
}
.navbar .logo{
	width: 140px;
	height: auto;
	padding: 20px 100px;
}

.navbar ul{
	float: right;
	margin-right: 20px;
}
.navbar ul li{
	list-style: none;
	margin: 0 8px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 6px 13px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background: yellowgreen;
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 55%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
}
.form {
            width: 300px;
            padding: 20px;
            background:   url(cpsu12.jpg);
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.8);
            position: fixed;
            top: 55%;
            left: 50%; 
            transform: translate(-50%, -50%);
        }
  .form:hover {
            transform: translate(-50%, -50%) scale(1.05);
            transition: transform 0.3s ease-in-out;
}

        .form h2 {
            text-align: center;
            margin-bottom: 20px;
            color:white;
        }

        .form input[type="text"], .form input[type="email"], .form input[type="password"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .form input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: rgba(255, 193, 7, 0.5);
            color: white;
            cursor: pointer;
        }
        .form input[type="text"]:focus, .form input[type="email"]:focus, .form input[type="password"]:focus {
            background-color: rgba(255, 255, 255, 0.7); 
}
.form input[type="submit"]:hover {
    background-color: rgba(255, 193, 7, 0.7);
}

        .form a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: yellow;
            text-decoration: none;
        }


footer {
    text-align: center;
    padding: 20px;
    background-color: gray;
}
     
  </style>
</head>
<body>
<header>
<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo1.jpg">
                 
				<ul>
					<li><a class="active" href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
					<li><a href="signUP.php">SIGN UP</a></li>
					
				</ul>
			</nav>
</div>
    </header>

       
    <?php
    session_start();
    require('./conection.php');
    $admin_name = 'junerey';
    $admin_password = 'junerey';
    if (isset($_POST['login_button'])) {
        $_SESSION['validate']=false;
        $name=$_POST['name'];
        $password=$_POST['password'];
        if ($name == $admin_name && $password == $admin_password) {
          
            header('location:admin.php');
        } else {
            $p=crud::conect()->prepare('SELECT * FROM crudtable WHERE name=:n and pass=:p');
            $p->bindValue(':n',$name);
            $p->bindValue(':p',$password);
            $p->execute();
            $d=$p->fetchAll(PDO::FETCH_ASSOC);
            if ($p->rowCount()>0) {
                $_SESSION['name']=$name;
                $_SESSION['pass']=$password;
                $_SESSION['validate']=true;
                header('location:website.php');
            } else {
                echo '<script>alert("Make sure that you are registered!");</script>';
            }
        }
    }
?>
     <div class="form">
        <h2>LOG IN</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login_button">
            <a href="./signUP.php">Don't have an account? Sign up here</a>
        </form>
    </div>

    <footer>
        <p>CRUD SYSTEM FOR SIR JUNEREY PALABRICA</p>
    </footer>

</body>
</html>