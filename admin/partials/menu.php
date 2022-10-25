<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Organization Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-admin.php">Admin</a></li>
                    <li><a href="manage-regisister.php">Regis</a></li>
                    <li><a href="manage-engletter.php">Upload English</a></li>
                    <li><a href="manage-arbletter.php">Upload Arbic</a></li>
                    <li><a href="manage-color.php">Upload Colors</a></li>
                    <li><a href="manage-shape.php">Upload Shapes</a></li>
                    <li><a href="manage-number.php">Upload Numbers</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->