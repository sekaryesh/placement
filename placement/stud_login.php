<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="styles.css">
  <style>
    
  </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Placement Cell</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Student</a></li>
            <li><a href="admin_login.php"><i class="fas fa-address-card"></i>Admin</a></li>
        </ul>  
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
          <div class="container">
            <img src="images/user3.png" height="70" width="70">
        <div class="card">
            <h1>STUDENT </h1>
            <form method="post">
                <label for="dno"style="color: azure;">Reg no:</label>
                <input type="text" placeholder="Enter Your Reg_No" name="reg_no" id="name" >
                <br>
                <label for="password" style="color: azure;">DateofBirth:</label>
                <input type="password"placeholder="yyyy-mm-dd" name="dob" id="name" >
                <br>
                <input type="submit" value="Login" name="login" id="button">
                </form>
            </div>
            </div>
          
      </div>
    </div>
</div>

</body>
</html>
<?php
include("connect.php");
if(isset($_POST["login"]))
{
        $reg_no = $_POST["reg_no"];
        $dob = $_POST["dob"];
    
$sql = "SELECT * FROM students where reg_no='$reg_no' and dob='$dob'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
{
     session_start();
     $_SESSION["reg_no"]=$reg_no;
    echo "<script>window.location = 'stud_hm.php';</script>";
}
else{
    echo" <script>alert('Login Failed')</script>";
 }
}
?>