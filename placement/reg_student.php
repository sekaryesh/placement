<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="styles.css">
  <style>
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

<div class="wrapper">
    <div class="sidebar">
        <h2>Placement Cell</h2>
        <ul>
        <li><a href="add_student.php"><i class="fas fa-home"></i>Add student</a></li>
                    <li><a href="view_campus.php"><i class="fas fa-user"></i>Campus Drives</a></li>
                    <li><a href="app_student.php"><i class="fas fa-project-diagram"></i>Applied Student</a></li>
                    <li><a href="shortlisted.php"><i class="fas fa-blog"></i>Shortlisted</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
        </ul>  
    </div>  
    <table id="registered" style='margin-left:200px; margin-top:30px;'>
            <tr>
                <th>Company Name</th>
                <th>Student Name</th>
                <th>Reg_no</th>
                <th>Department</th>
                <th>CGPA</th>
                <th>Standin Arr</th>
                <th>Phone</th>
                <th>Mail</th>
                <th>Status</th>
            </tr>
            <?php
            function display( $cid,$c_name,$name, $reg_no, $department, $cgpa, $sa, $phone, $mail)
            {?>
            <tr>
                <td><?php echo "$c_name";?></td>
                <td><?php echo "$name";?></td>
                <td><?php echo "$reg_no";?></td>
                <td><?php echo "$department";?></td>
                <td><?php echo "$cgpa";?></td>
                <td><?php echo "$sa";?></td>
                <td><?php echo "$phone";?></td>
                <td><?php echo "$mail";?></td>
                <td><a href="initialize.php?reg_no=<?php echo $reg_no;?>&cid=<?php echo $cid;?>">Selected</a></td>

                
            </tr>
           <?php }?>

<?php
include('connect.php');
session_start();
if(isset($_GET["cid"])){
  $cid=$_GET["cid"];
}
if(isset($_SESSION["cid"])){
  $cid=$_SESSION["cid"];
}
$sql="select * from campus_drive where cid=$cid";
$result = mysqli_query($conn, $sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $c_name = $row["name"];
    }
}
$sql = "SELECT * FROM app_campus WHERE cid= $cid";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $name = $row["name"];
            $reg_no = $row["reg_no"];
            $department = $row["department"];
            $cgpa = $row["cgpa"];
            $sa = $row["sa"];
            $phone = $row["phone"];
            $mail = $row["mail"];
            display ( $cid,$c_name, $name, $reg_no, $department, $cgpa, $sa, $phone, $mail);
        }
    }
    else{
        echo mysqli_error($conn);
    }
    ?>
</table>
</body>
</html>