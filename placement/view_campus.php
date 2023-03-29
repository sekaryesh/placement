<?
session_start();
if(!isset($_SESSION["reg_no"]))
{
  header('location:stud_login.php');
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
      .container{
    display: flex;
    flex-wrap: wrap;
    column-gap: 10px;
    row-gap: 10px;
}  
.card-block{
    justify-content: center;
    align-items: center;
    width: 300px;
    min-height: 350px;
    background-color: #D4E6F1;
    color: black;
    border-radius: 10px;
    border: 2px solid whitesmoke;
}
.image{
    border-radius: 10px 10px 0px 0px;
    width: 245px;
}
      .view-container{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    row-gap: 20px;
    column-gap: 20px;
    /* margin-left: 100px; */
}
.content{
    font-family: 'Roboto Slab', cursive;
    padding-bottom: 12px;
}
.first-element{
  display: flex;
  flex-direction: column;
}
.last-element{
    display: flex;
    justify-content: space-between;
    padding-right: 13px;
    padding-left: 13px;
}
.inside-element{
  padding-top: 7px;
  padding-bottom: 7px;
}
.button-47{
  color:black;
  align="center"
}
a.button-47:hover{
  color:white;
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
                    <li><a href="app_campus.php"><i class="fas fa-home"></i>View Campus Detail</a></li>
                    <li><a href="applied_details_stud.php"><i class="fas fa-project-diagram"></i>Applied Interview Details</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
                </ul> 
        
            </div>
            <div class="main_content">
                <div class="header">Our Recuirters</div>  
                <h3 class="form-head"></h3><br>
    <div class="view-container" align="center"style="margin-left:0px;">
    <?php
    function display($cid,$name,$venue, $date)
    {
    ?>
    <div class="card-block" style="margin-left:00px;">
        <div class="image">
           <img src="" class="image" alt=""><br>
        </div>
        <div class="content">
        <div class="first-element">
        <div class="inside-element" align="center"><h4><?php echo $name;?></h4></div>
        <div class="inside-element">Venue - <?php echo "$venue";?></div>
        <div class="inside-element">Date - <?php echo $date;?></div>
        </div>
        <div class="last-element">
          <div class="">
            <a href="knowmore.php?cid=<?php echo $cid;?>"class="button-47">Know More</a>
          </div>
        </div>
      </div></div>
    <?php }?>

<?php
include("connect.php");
$sql = "SELECT * FROM campus_drive";
$result = mysqli_query($conn, $sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $cid = $row["cid"];
        $name = $row["name"];
        $venue = $row["venue"];
        $date = $row["date"];
        // $image=$row["image"];
        display($cid,$name,$venue, $date);
    }
}
?>
</div>
   </div>
    </div>
    </div>