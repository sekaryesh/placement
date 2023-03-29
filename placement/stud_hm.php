<?php
session_start();
if(!isset($_SESSION["reg_no"]))
{
  header("location:stud_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="styles.css">
  <style>
    form{
        margin-left:500px;
        padding:0;
        position:absolute;
      }
    
  </style>
</head>
<body>

    <body>

        <div class="wrapper">
            <div class="sidebar">
                <h2>Placement</h2>
                <ul>
                    <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="view_campus.php"><i class="fas fa-user"></i>View Campus Details</a></li>
                    <li><a href="applied_details_stud.php"><i class="fas fa-project-diagram"></i>Applied Interview Details</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
                </ul> 
        
            </div>
            <div class="main_content">
                <div class="header">Welcome Student!! Have a nice day.</div>  
                <div class="info">
                  <h3></h3>
                  <h4 align="center"> </h4>
              </div>
            </div>
        </div>