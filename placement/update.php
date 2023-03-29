<?php
include("connect.php");
session_start();
$reg_no=$_SESSION["reg_no"];
$cid=$_SESSION["cid"];
$sql = "update students set cid=$cid and status='Selected' where reg_no='$reg_no'";
$result = mysqli_query($conn, $sql);
if($result)
{
    $result = mysqli_query($conn, "UPDATE app_campus set status='Selected' WHERE cid=$cid AND reg_no='$reg_no'");
    if($result)
    {
        echo "<script>window.location='reg_student.php'</script>"; 
    }
    else{
        echo mysqli_error($conn);
    }
}
else{
    echo mysqli_error($conn);
}
?>