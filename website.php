<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
*{
	padding: 0;
	margin: 0;
}
body {
    display: flex;
    flex-direction: column;
    min-height: 50vh;
}
.wrapper{
	background:linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),  url(cpsu12.jpg) no-repeat;
	background-size: cover;
	height: 100vh;
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
.center h1{
	color: white;
	font-size: 70px;
	width: 900px;
	font-weight: bold;
	text-align: center;
}
.center {
    position: absolute;
    left: 50%;
    top: calc(50% + 40px);
    transform: translate(-50%, -50%);
    font-family: sans-serif;
    user-select: none;
    
}
.center h2{
	color: white;
	font-size: 50px;
	font-weight: bold;
	margin-top: 10px;
	width: 885px;
	text-align: center;
}
.center .buttons{
	margin: 35px 280px;
}
.buttons button{
	height: 50px;
	width: 150px;
	font-size: 18px;
	font-weight: 600;
	color: #ffb3b3;
	background: green;
	outline: none;
	cursor: pointer;
	border: 1px solid green;
	border-radius: 25px;
	transition: .4s;
}
.buttons .btn2{
	margin-left: 25px;
}
.buttons button:hover{
	background: #cc0000;
}  
footer {
    margin-top: 0;
    background-color: green;
    color: white;
    text-align: center;
    padding: 15px 0;
}
  
 </style>
</head>
<body>
<header>
<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo1.jpg">
				<ul>
					<li><a class="active" href="edit.php">Edit Profile</a></li>
                    <li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="login.php">Log In</a></li>
					<li><a href="signUP.php">Sign Up</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</nav>
</div>
    </header>

    <div class="center">
			<h1>WELCOME TO BSIT 3-A CRUD</h1>
			<h2>Create Something New</h2>
			
		</div>


<footer>
        <p>CRUD SYSTEM FOR SIR JUNEREY PALABRICA</p>
    </footer>
</body>
</html>