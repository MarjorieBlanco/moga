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
    position: relative; /* This allows absolute positioning of child elements */
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
            background:   url(bckgr.jpg);
            background-size: cover;
            background-position: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
            color: green;
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

        .form a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: black;
            text-decoration: none;
        }


footer {
    text-align: center;
    padding: 20px;
    background-color: green;
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
					<li><a href="login.php">LOG IN</a></li>
					
				</ul>
			</nav>
</div>
    </header>

       
    <?php
        require('./conection.php');
        if (isset($_POST['signUP_button'])) {
            $name=$_POST['name'];
            $lastName=$_POST['lastName'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confPassword=$_POST['confiPassword'];
           if (!empty($_POST['name'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&&!empty($_POST['password'])) {
            if ($password== $confPassword) {
                $p=crud::conect()->prepare('INSERT INTO crudtable(name,lastName,email,pass) VALUES(:n,:l,:e,:p)');
                $p->bindValue(':n', $name);
                $p->bindValue(':l', $lastName);
                $p->bindValue(':e', $email);
                $p->bindValue(':p',$password);
                $p->execute();
                header('Location: login.php');
                exit;
    
            }else{
                echo 'Password does not match!';
            }
           }
        }

    ?>
     <div class="form">
        <h2>Sign Up</h2>
        <form action="" method="post">
            <input type="text" name="name" placeholder="First Name">
            <input type="text" name="lastName" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="confiPassword" placeholder="Confirm Password">
            <input type="checkbox"> I accept the Terms of Use & Privacy Policy
            <input type="submit" value="SIGN UP" name="signUP_button">
            <a href="./login.php">Already have an account? Login here</a>
        </form>
    </div>

    <footer>
        <p>CRUD SYSTEM FOR SIR JUNEREY PALABRICA</p>
    </footer>
</body>
</html>