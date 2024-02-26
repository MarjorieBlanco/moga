<?php
    session_start();
    require('./conection.php');

    // Fetch the current user's information
    $name = $_SESSION['name'];
    $password = $_SESSION['pass'];
    $p = crud::conect()->prepare('SELECT * FROM crudtable WHERE name=:n and pass=:p');
    $p->bindValue(':n', $name);
    $p->bindValue(':p', $password);
    $p->execute();
    $user = $p->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
       *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
body {
    display: flex;
    flex-direction: column;
    min-height: 50vh;
}
body{
    background-image: url(cpsu.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(3px);
}
.glass{
    width: 930px;
    height: 520px;
    box-shadow: 0 0 8px rgba(255,255,255,1);
    background-image: url(cpsu12.jpg);
    background-position: center;
    background-size: cover;
}
nav{
    display: flex;
    padding: 30px 8%;
}
.logo{
    font-size: 22px;
    color: #fff;
    cursor: pointer;
}
nav ul{
    flex: 1;
    text-align: right;
}
nav ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    transition: 0.1s ease-out;
}

nav ul li:hover{
    border-bottom: 2px solid yellow;
}

nav ul li a{
    text-decoration: none;
    font-size: 12px;
    color: #fff;
    font-weight: bold;
}
img{
    width: 95px;
    height: 85px;
    border-radius: 50%;
    cursor: pointer;
    margin-top: -7px;
    transition: 0.1s ease;
} 
img:hover{
    border: 2px solid #fff;
}

h3{
    color: #fff;
    margin: 80px 110px -25px;
    font-style: italic;
    font-weight: 100;
    font-size: 18px;
    letter-spacing: 1px;
}

h1 {
    color: #fff; 
    background-size: 100%;
    -webkit-text-fill-color: transparent;
    -moz-text-fill-color: transparent;
}
.navbar .logo{
	width: 200px;
	height: auto;
	padding: 20px 100px;
}
footer {
    margin-top: 20px;
    background-color: gray;
    color: white;
    text-align: center;
    padding: 15px 0;
}
.form{
    display: center;
}

    </style>
</head>
<body>
<header>
    <div class="glass">
        <nav>
        <img class="logo" src="logo1.jpg">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="users.php">USERS</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
            <img src="logo1.jpg" alt="profile">
        </nav>

        <div class="form">
        <h1>YOUR PROFILE HAS BEEN CHANGED TO:</h1>
        <p><strong>Name: <?php echo htmlspecialchars($user['name']); ?></strong></p>
        <p>Password: <?php echo htmlspecialchars($user['pass']); ?></p>

    </div>
    <form method="post" action="logout.php">
        <input type="submit" value="Logout" class="logout-button">
    </form>
</header>
</body>
</html>
