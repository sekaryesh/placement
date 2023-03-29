<?php
// include("connect.php");
// $sql = "SELECT * FROM students WHERE status='Selected'";
// $result = mysqli_query($conn, $sql);
// if($result){
//     echo mysqli_num_rows($result);
// }
?>
<html>
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
      #sun{
        position:justify;
      }
      #registered {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#registered td, #registered th {
  border: 1px solid #ddd;
  padding: 8px;
}

#registered tr:nth-child(even){background-color: #f2f2f2;}

#registered tr:hover {background-color: #ddd;}

#registered th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #594f8d;
  color: white;
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
              </div>
              <div align="center"> View Shortlisted Student Using the Search Option Here</div>
            </div>
        </div>
    <body>
    <form method="POST">
        <select name="c_name">
        <?php 
include("connect.php");
$sql = "SELECT name FROM campus_drive GROUP BY name;";
$result= mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
$name = $row["name"];
echo "<option value='$name'>$name</option>";
}
?>
</select>
<input type="submit" id="sun"name="search" value="Search">
    </form>
        <table id="registered" style='margin-left:200px; margin-top:30px;'>
            <tr>
                <th>Company Name</th>
                <th>Student Name</th>
                <th>Batch</th>
                <th>CGPA</th>
                <th>Standin Arr</th>
                <th>History of arrear</th>
                <th>Phone</th>
                <th>Mail</th>
                <th>Status</th>
            </tr>
            <?php
            function display( $cid,$c_name,$name, $batch, $CGPA, $sa, $arr, $phone, $mail, $status)
            {?>
            <tr>
                <td><?php echo "$c_name";?></td>
                <td><?php echo "$name";?></td>
                <td><?php echo "$batch";?></td>
                <td><?php echo "$CGPA";?></td>
                <td><?php echo "$sa";?></td>
                <td><?php echo "$arr";?></td>
                <td><?php echo "$phone";?></td>
                <td><?php echo "$mail";?></td>
                <td><?php echo "$status";?></td>
            </tr>
           <?php }?>
           




    <?php
    if(isset($_POST["search"]))
    {
        $c_name = $_POST["c_name"];
        $sql = "SELECT * FROM app_campus WHERE c_name = '$c_name'";
        $result = mysqli_query($conn, $sql);
    }?>
    <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $c_name =$row["c_name"];
            $name = $row["name"];
            $batch = $row["batch"];
            $cgpa = $row["cgpa"];
            $sa = $row["sa"];
            $arr = $row["arr"];
            $phone = $row["phone"];
            $address = $row["address"];
            $state = $row["state"];
            $mail = $row["mail"];
            $status = $row["status"];
            $cid = $row["cid"];
            display( $cid,$c_name,$name, $batch, $cgpa, $sa, $arr, $phone, $mail, $status);
          }
    ?>
    </table> 
</body>
</html>