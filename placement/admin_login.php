
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
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
            <li><a href="stud_login.php"><i class="fas fa-student"></i>Student</a></li>
            <li><a href="admin_login.php"><i class="fas fa-admin"></i>Admin</a></li>
        </ul>  
    </div>
    <div class="main_content">
        <div class="header">Welcome Admin!! Have a nice day.</div>  
        <div class="info">
            <div class="container">
                <img src="images/user3.png" height="70" width="70">
            <div class="card">
                <h1>ADMIN</h1>
                <form method="post">
                    <label for="mail" style="color: azure;">Mail ID:</label>
                    <input type="email"  name="mail" id="name" >
                    <br>
                    <label for="password" style="color: azure;">Password:</label>
                    <input type="password" name="password" id="name" >
                    <br>
                    <input type="submit" value="Login" name="login" id="button">
                    </form>
                </div>
                </div>
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
        $mail = $_POST["mail"];
        $password = $_POST["password"];
    
$sql = "SELECT * FROM admin where mail='$mail' and password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0)
    {

        echo "<script>window.location = 'admin_hm.php'</script>";
    }
    else{
       echo" <script>alert('Enter A Valid Mail ID and Password ')</script>";
    }
}
?>