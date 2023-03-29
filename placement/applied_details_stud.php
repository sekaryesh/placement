<?
session_start();
$reg_no = $_SESSION["reg_no"];
if(!isset($_SESSION["reg_no"]))
{
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Apply Campus</title>
	<link rel="stylesheet" href="styles.css">
  <style>
    form{
        margin-left:500px;
        padding:0;
        position:absolute;
      }
    table th,td{
        padding: 10px;
        border: 0.5px solid black; 
    }
   
  </style>
</head>
<body>

    <body>

        <div class="wrapper">
            <div class="sidebar">
                <h2>Placement</h2>
                <ul>
                    <li><a href="stud_hm.php"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="view_campus.php"><i class="fas fa-home"></i>View Campus Detail</a></li>
                    <li><a href="applied_details_stud.php"><i class="fas fa-project-diagram"></i>Applied Interview Details</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
                </ul> 
        
            </div>
            <div class="main_content">
                <div class="header">Welcome Student! Your applied interview status</div>  
                <div class="info">
                  <h3></h3>
                  <h4 align="center"> </h4>
              </div>
            </div>
        </div>
    <table class="table"style="margin-left: 300px;">
        <tr>
            <th>Interview Id</th>
            <th>Company Name</th>
            <th>Register NO</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Batch</th>
            <th>Department</th>
            <th>Gender</th>
            <th>CGPA</th>
            <th>Standing Arrear</th>
            <th>Passout</th>
            <th>Status</th>
            

        </tr>
        <?php
        function display($cid,$c_name,$reg_no, $name, $dob, $batch, $department, $gender, $cgpa,$sa,$passout,$phone,$state,$mail,$status,)
        {?>
        <tr>
            <td><?php echo $cid;?></td>
            <td><?php echo $c_name;?></td>
            <td><?php echo $reg_no;?></td>
            <td><?php echo $name;?></td>
            <td><?php echo $dob;?></td>
            <td><?php echo $batch;?></td>
            <td><?php echo $department;?></td>
            <td><?php echo $gender;?></td>
            <td><?php echo $cgpa;?></td>
            <td><?php echo $sa;?></td>
            <td><?php echo $passout;?></td>
            <td><?php echo $status;?></td>
            
        <tr>
        <?php }?>
    
<?php
          session_start();
          $reg_no = $_SESSION["reg_no"];
          include("connect.php");
          $sql = "SELECT * FROM app_campus WHERE reg_no = '$reg_no'";
          $result = mysqli_query($conn, $sql);
          if($result){
          while($row = mysqli_fetch_assoc($result))
          {
            $cid = $row["cid"];
            $c_name = $row["c_name"];
            $name = $row["name"];
            $dob = $row["dob"];
            $batch = $row["batch"];
            $department = $row["department"];
            $gender = $row["gender"];
            $cgpa = $row["cgpa"];
            $sa = $row["sa"];
            $arr = $row["arr"];
            $passout = $row["passout"];
            $phone = $row["phone"];
            $state = $row["state"];
            $mail = $row["mail"];
            $status = $row["status"];
           


            display($cid,$c_name,$reg_no, $name, $dob, $batch, $department, $gender, $cgpa,$sa,$passout,$phone,$state,$mail,$status,);
          }
        }
        else{
          echo mysqli_error($conn);
        }
          ?>
          </table>        
</body>
</html>