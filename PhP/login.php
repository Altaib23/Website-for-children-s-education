<!DOCTYPE html>
<html>
<head>
		<style type="text/css">
			.btn {
  transition-duration: 0.4s;
}

.btn:hover {
	color: white;
  background-color: #4CAF50;
  
}
		</style>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>login</title>
</head>
<body style="background-image: url(img/back.jpg);background-repeat: no-repeat;background-size: cover;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
          </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"></a></li>
        <li><a href="add.php"></a></li>
        <li><a href="my.php"></a></li>
        <li><a href="cont.php"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php session_start(); error_reporting(0); if ($_SESSION["wh"]==1) {
          echo $_SESSION["name"];
        } else echo "login"?></a></li>
        
      </ul>
    </div>
  </div>
</nav>
<center>
	<form action="#" method="POST">
	<div style="width:25%;margin-top: 200px;box-shadow:20px 20px 50px 15px grey;padding: 2%;background-color: #646060 " >
	<label style="color:white">UserName</label><br>
	 <input type="text" name="us" class="form-control" required="" placeholder="UserName"><br>
	 <label style="color:white">Password</label><br>
	 <input type="password" name="pass" class="form-control" required="" placeholder="Password">
	
	  <input type="submit" name="ch"  value="login" class="btn" style="margin:10px;width: 25%">

	  
	 	
	  	<?php
	  	if (isset($_POST["ch"])) {
	  		$user=$_POST["us"];
	  		$pass=$_POST["pass"];
	  	
	  	$conn=new mysqli("localhost","root","","kafala");
	  	$sql="select * from admin";
	  	$result=mysqli_query($conn,$sql);
	  	while ($row=mysqli_fetch_array($result))
	  	{
	  		if ($_POST["us"] == $row["admin_name"] && $_POST["pass"] == $row["admin_password"]) {
	  			session_start();

	  			$_SESSION["name"]=$_POST["us"];
	  			header("location:register.php");
	  			
	  		}
	  	}
	  	echo "<div class='alert alert-danger' style='margin:5px'>
  <strong>Error!</strong> invalid UserName or Password.
</div>";
	  	}
	  	?>

	</div>
</form>
</center>
</body>
</html>