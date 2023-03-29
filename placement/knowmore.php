<?php
include('connect.php');
$cid = $_GET["cid"];
$sql = "SELECT * FROM campus_drive WHERE cid=$cid";
$result = mysqli_query($conn, $sql);
if($result)
{
    if($row = mysqli_fetch_assoc($result))
    {
        $name = $row["name"];
        $address = $row["address"];
        $mail = $row["mail"];
        $contact = $row["contact"];
        $venue = $row["venue"];
        $date = $row["date"];
        $branch = $row["branch"];
        $eligiblity = $row["eligiblity"];
        $details = $row["details"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css"> 
    <title>Interview Details</title>
    <style>
        body{
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .tournament-detail-wrapper .side-element{
  display: flex;
  flex-direction: column;
  padding-left: 100px;
  padding-right: 100px;
}
.inside-content
{
  width: 100%;
  padding: 20px;
  margin: 20px;
  background-color: white;
  align-items: left;
  justify-items: left;
  word-wrap: break-word;
  border-radius: 10px;
  font-size: 17px;
}
.inside-content h4{
    font-size: 22px;
}

    </style>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Placement</h2>
            <ul>
            <li><a href="stud_hm.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="app_campus.php"><i class="fas fa-home"></i>View Campus Detail</a></li>
                <li><a href="applied_details_stud.php"><i class="fas fa-project-diagram"></i>Applied Interview Details</a></li>
                <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
            </ul> 
    
        </div>
   <div class="tournament-detail-wrapper" style="margin-left:500px; margin-top:30px;">
    <h3 class="form-head" align="center">Interview Details</h3><br>
    <div class="go-back">
    <a href="view_campus.php" class="button-47">Go Back</a>
    </div>
        <div class="side-element">
            <h3 align="center"style="color:white;"><?php echo "$name";?></h3>
            <div class="main-content">
            <div class="inside-content"> 
            <h4>Interview Details</h4>
            <p>name  -  <?php echo "$name";?><br>
            Address  -  <?php echo "$address";?><br>
            Mail  -  <?php echo "$mail";?><br>
            contact  -  <?php echo "$contact";?><br>
            venue  -  <?php echo "$venue";?><br>
            date  -  <?php echo "$date";?><br>
            branch  -  <?php echo "$branch";?><br>
            eligiblity   -  <?php echo "$eligiblity    ";?><br>
            details  -  <?php echo "$details";?><br>
            
            <p>
            </div>
    <div align="center">
            <a href="app_campus.php?cid=<?php echo $cid;?>"class="button-62" >Register</a>
            </div>
</div>
    <script src="Bootstrap/bootstrap-3.4.1-dist/js/jquery-3.6.1.min.js"></script>
   <script scr="Bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
   </body>

</html>