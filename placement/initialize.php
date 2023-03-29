<?php 
if(isset($_GET["cid"]))
{
    session_start();
    $_SESSION["cid"] = $_GET["cid"];
    $_SESSION["reg_no"]  = $_GET["reg_no"];
    echo "<script>window.location='update.php'</script>"; 
}
?>