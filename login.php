<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="utf-8"/>
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="style.css"/>

    <style>
      


body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
    background-image: url('img\bg.jpg');
	
}



    </style>
  
   
</head>
<body style=" height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;font-family: 'Open Sans', sans-serif; background-image: url(img/bg.jpg)">
<?php
    $con = mysqli_connect("localhost","root","","children_education");
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `guardian` WHERE username ='$username'
                     AND     password ='$password'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username orpassword.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>تسجيل الدخول</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">تسجيل الدخول</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="تسجيل الدخول" name="submit" class="login-button"/>
        <p class="link">ليس لديك حساب؟ <a href="register.php">تسجيل الآن</a></p>
  </form>
<?php
    }
?>
</body>
</html>
