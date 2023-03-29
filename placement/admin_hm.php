<?
session_start();
if(isset($SESSION["username"]))
{
  header('location:admin_login.php');
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
            <li><a href="add_student.php"><i class="fas fa-home"></i>Add student</a></li>
            <li><a href="add_campus.php"><i class="fas fa-user"></i>Campus Drives</a></li>
            <li><a href="app_student.php"><i class="fas fa-project-diagram"></i>Applied Student</a></li>
            <li><a href="shortlisted.php"><i class="fas fa-blog"></i>Shortlisted</a></li>
            <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
        </ul> 

    </div>
            <div class="main_content">
                <div class="header">Welcome Admin!! Have a nice day.</div>  
                <div class="info">
                  <h3></h3>
              </div>
            </div>
        </div>