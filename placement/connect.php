<?php 
$conn = mysqli_connect("localhost", "root", "","placement");
if(!$conn)
{
    die(mysqli_connect_error($conn));
}
?>