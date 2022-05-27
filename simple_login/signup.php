<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into customer (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location:login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/sticky_055.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link href="bootstrap/css/sticky.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/sticky.js"></script>
    <link rel="stylesheet" href="bootstrap/css/navbar.css"/>
    <script src="bootstrap/js/navbar.js"></script>
    <link rel="stylesheet" href="bootstrap/css/stylereg.css"/>
    <style>
         .ff{
  position: absolute;
width: 150px;
height: 158px;
left: 177px;
top: 374px;
border-radius: 180px;
  }
.kiri{
  position: absolute;
  width: 509px;
  height: 233px;
  left: -2px;
  top: 225px;
  font-family: 'Jacques Francois';
  font-style: normal;
  font-weight: 400;
  font-size: 52px;
  line-height: 42px;
  text-align: center;
  color: #FFFFFF;
  }  

  .ss{
    position: absolute;
width: 148px;
height: 42px;
left: 337px;
top: 655px;

background: #193C39;
  }
    </style>
</head>
<header>
    <nav>
       <h1 class="zz">REGISTRASI</h1>
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>
<body>
<h1 class="kiri">
        Mari Bergabung & Nikmati Layanan Pak Kumis
    </h1>
    <img class="ff"src="bootstrap/images/kumis.jpeg">
<form action="" method="post">  
  <div class="container">  
  <center>  <h1>Registeration Form</h1> </center>  
  <hr>  
  <input id="text" type="text" name="user_name" placeholder="Your Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Your Password"><br><br>

			     <input id="button" type="submit" value="Login"><br><br>

			<a href="login.php">Click to Login</a><br><br>
    </div>
    <br> <br>
</form> 
</body>  
</html>