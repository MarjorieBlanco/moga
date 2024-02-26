<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   .form {
            width: 300px;
            padding: 20px;
            background:   url(cpsu.jpg);
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
        .navbar{
	position: fixed;
	height: 80px;
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
nav {
    margin: 10px 0;
}


nav ul {
    list-style-type: none;
    padding: 0;
}


nav ul li {
    display: inline;
    margin-right: 10px;
}


nav ul li a {
    color: white;
    text-decoration: none;
}


nav ul li a:hover {
    color: yellow;
}

*{
            margin: 0;
            padding: 0;
        }
        html{
            box-sizing: border-box;
            font-size: 50%;
            box-shadow: 5px 5px white, 10px 10px white, 15px 15px white;
        }
        body{
            width: 100%;
            background:linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),  url(cpsu.jpg) no-repeat;
	        background-size: cover;
            background-size: cover;
            height: 100vh;
            font-family:'sans-serif';
            display: fixed;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
</style>
</head>
    <body>
    <header>
    <div class="wrapper">
        <nav class="navbar">
        <img class="logo" src="logo1.jpg">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="signUP.php">SIGNUP</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
        </nav>
    </div>
</header>
<?php
    session_start();
    require('./conection.php');

   
    $name = $_SESSION['name'];
    $password = $_SESSION['pass'];
    $p = crud::conect()->prepare('SELECT * FROM crudtable WHERE name=:n and pass=:p');
    $p->bindValue(':n', $name);
    $p->bindValue(':p', $password);
    $p->execute();
    $user = $p->fetch(PDO::FETCH_ASSOC);

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $newName = $_POST['name'];
        $newPassword = $_POST['password'];
       

        $p = crud::conect()->prepare('UPDATE crudtable SET name=:n, pass=:p WHERE id=:id');
        $p->bindValue(':n', $newName);
        $p->bindValue(':p', $newPassword);
      
        $p->bindValue(':id', $user['id']);
        $p->execute();

        
        $_SESSION['name'] = $newName;
        $_SESSION['pass'] = $newPassword;
        header('Location: profile.php');
    exit;
       

        echo 'Your profile has been updated!';
    }
?>


<div class="form">
        <h2>LOG IN</h2>
        <form action="" method="post">
        <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>">
        <input type="password" name="password" value="<?php echo htmlspecialchars($user['pass']); ?>">
        <input type="submit" value="Update Profile">
            
        </form>
    </div>
    
</body>
</html>