form{
        margin-left:500px;
        padding:0;
        position:absolute;
      }
    table th,td{
        padding: 10px;
        border: 0.5px solid black; 
    }
    <td><a href="initialize.php?reg_no=<?php echo $reg_no;?>&cid=<?php echo $cid;?>">Selected</a></td>

    $sql = "INSERT INTO `admin` (`name`, `mail`, `password`) VALUES (\'admin\', \'admin@gmail.com\', \'admin@123\');";
