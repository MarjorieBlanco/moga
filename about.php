<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>
    <style>
    


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
    background-position: center;
    background-size: cover;
    height: 100vh;
    font-family:'sans-serif';
    display: fixed;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
 }
 .grid{
    display: grid;
    width: 115em;
    grid-gap: 4rem;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    align-items: center;
    justify-content: center;
    margin: auto;
    padding: 20px;
    position: fixed;
    top: 55%; 
    left: 55%; 
    transform: translate(-50%, -50%);
            
 }
 .grid-item{
    background-color: green;
    border-radius: 0.4rem;
    overflow: hidden;
    box-shadow: 0 3rem 6rem rgba(0,0,0, 0.1);
    cursor: pointer;
    transition: 0.2s;
    justify-content: center;
    align-items: center;
  }
.grid-item:hover{
    transform: translateY(-0.5%);
    box-shadow: 0 4rem 8rem rgba(0,0,0, 0.5);
}
 .card-img{
    display: center;
    width: 100%;
    height: 25rem;
    object-fit:cover;
}
 .card-content{
    padding: 3rem;
    border: 1px solid green;
    box-shadow: 200rem;
            
}
.card-header{
    font-size: 3rem;
    font-weight: 500;
    color: black;
    margin-bottom: 1.5rem;
}
.card-text{
    font-size: 1.6rem;
    letter-spacing: 0.1rem;
    line-height: 1.7;
    color: white;
    margin-bottom: 2.5rem;
}
.card-btn{
    display: block;
    width: 100%;
    padding: 1.5rem;
    font-size: 2rem;
    text-align: center;
    color: black;
    background-color: yellow;
    border: none;
    border-radius: 0.4rem;
    transition: 0.2s;
    cursor: pointer;
    letter-spacing: 0.1rem;
}
.card-btn span{
     margin-left: 1rem;
     transition: 0.2s;
}
.card-btn:hover,
.card-btn:active{
    background-color:yellow;
}
.card-btn:hover span,
.card-btn:active{
    margin-left: 1.5rem;
}
body{
    padding: 3rem;
}
.grid{
    grid-gap: 3rem;
    align-items: center;
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
footer {
    text-align: center;
    padding: 20px;
    background-color: gray;
    position: fixed;
    bottom: 0;
    font-size: 20px;
    right: 0%;
    width: 100%;
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
					<li><a href="signUP.php">SIGN UP</a></li>
					
				</ul>
			</nav>
</div>
    </header>
<div class="grid">
    <div class="grid-item">
        <div class="card">
            <img class="card-img" src="moga1.jpg" atl="CCS">
            <div class="card-content">
                <h1 class="card-header"><center>Micel Dojello Moga </center></h1>
                <p class="card-text">
                HI I'M Micel Dojello Moga YOUR SOLO PROGRAMMER


            </p>
            <a href="https://www.facebook.com/profile.php?id=100082174882323" target="_blank">
                <button class="card-btn">Visit<span></span>
            </button>
                </a>
           
       
        </div>
     </div>
   </div>
</div>

<footer>
        <p>HELLO SIR THIS IS OUR FINAL PROJECT</p>
    </footer>
</body>
</html>