<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Update</title>
</head>
<body style="background-image: url(i7.jpg);background-repeat: no-repeat;background-size: cover;">
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
        <li class="active"><a href="register.php">Add User</a></li>
        <li><a href="update.php">Update User</a></li>
        <li><a href="delete.php">Delete User</a></li>
        <li><a href="display.php">View User</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php session_start(); error_reporting(0); if ($_SESSION["wh"]==1) {
          echo $_SESSION["name"];
        } else echo "Updata"?></a></li>
        
      </ul>
    </div>
  </div>
</nav>
<center>
	<form action="#" method="POST">
	<div style="width:25%;margin-top: 100px;box-shadow:20px 20px 50px 15px grey;padding: 2%;background-color: #646060 " >
		<label style="color:white">ID</label><br>
	 <input type="text" name="idd" class="form-control" required="" placeholder="ID"><br>
	<label style="color:white">Name</label><br>
	 <input type="text" name="Name" class="form-control" required="" placeholder="UserName"><br>
	 <label style="color:white">Gender</label><br>
	 <input type="text" name="Gender" class="form-control" required="" placeholder="Gender"><br>
	 <label style="color:white">email</label><br>
	 <input type="email" name="email" class="form-control" required="" placeholder="Email"><br>
	 <label style="color:white">Nation</label><br>
	 <input type="text" name="Nation" class="form-control" required="" placeholder="Nation"><br>
	 <label style="color:white">Phone</label><br>
	 <input type="text" name="ph" class="form-control" required="" placeholder="Phone"><br>
	
	  <input type="submit" name="ch"  value="Add" class="btn-success">
	 	
	  	<?php
	  	if (isset($_POST["ch"])) {
	    	$conn=new mysqli("localhost","root","","kafala"); 
	  		$Name=$_POST["Name"];
	  		$Gender=$_POST["Gender"];
	  		$email=$_POST["email"];
	  		$Phone=$_POST["ph"];
	  		$Nation=$_POST["Nation"];
	  	    $id=$_POST["idd"];

	  	
         $sql = "UPDATE donator SET donator_name='$Name' ,donator_gender='$Gender',donator_email='$email',donator_phone='$Phone',donator_nation='$Nation' WHERE donator_id= $id";
	  	if (mysqli_query($conn,$sql)) {
	  		echo "<div class='alert alert-success' style='margin:5px'>
  <strong>Success!</strong> Update successfully .
</div>";
	  	}
	  	}
	  	?>

	</div>
</form>
</center>
</body>
</html>