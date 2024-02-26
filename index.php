<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    
    <!--Style CSS-->
    <link rel="stylesheet" href="admin.css">
    
    <!--FontAwesome icons CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">  
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
    background-image: url(bckgr.jpg);
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
                <li><a href="signUP.php">SIGNUP</a></li>
                <li><a href="login.php">LOGIN</a></li>
            </ul>
            <img src="logo1.jpg" alt="profile">
        </nav>

        <div>
        <main><center>
        <h2>WELCOME TO OUR MINI SYSTEM</h2>
        <p>EATWELL LIVEWELL</p>

        <h2>Our Services</h2>
        <p>PROVIDE HASSLE FREE PLATFORM</p>
        </center>
    </main>

        </div>
      
       
    </div>
</header>

<footer>
        <p>THIS IS OUR FINAL PROJECT</p>
    </footer>
</body>
</html>