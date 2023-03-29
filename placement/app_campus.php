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
    
  </style>
</head>
<body>

    <body>

        <div class="wrapper">
            <div class="sidebar">
                <h2>Placement</h2>
                <ul>
                    <li><a href="stud_hm.php"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="#"><i class="fas fa-home"></i>View Campus Detail</a></li>
                    <li><a href="applied_details_stud.php"><i class="fas fa-project-diagram"></i>Applied Interview Details</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
                </ul> 
        
            </div>
            <div class="main_content">
                <div class="header">Welcome Student!! Have a nice day.</div>  
                <div class="info">
                  <h3>Enrolment Form</h3>
                  <h4 align="center">Apply for Job </h4>
              </div>
            </div>
        </div>
        <form action="#" method="POST">
          <?php
          session_start();
          $reg_no = $_SESSION["reg_no"];
          include("connect.php");
          $sql = "SELECT * FROM students WHERE reg_no = '$reg_no'";
          $result = mysqli_query($conn, $sql);
          if($result){
          while($row = mysqli_fetch_assoc($result))
          {
           
            $stud_name = $row["name"];
            $department = $row["department"];
            $gender = $row["gender"];
            $dob = $row["dob"];
            $phone=$row["phone"];
          }
        }
        else{
          echo mysqli_error($conn);
        }
          ?>
            <table>
              

                <tr>
                    <td><label for="username" style="color:black;">Student name:</label></td>
                  <td><?php echo $stud_name;?></td>
                  <br></tr>
                  <tr>
                    <td><label for="reg_no" style="color:black">Reg_no:</label></td>
                  <td><?php echo $reg_no;?></td>
                  <br>
                  </tr>
                  <tr>
                    <td>
                  <label for="dob" style="color: black;">DOB:</label></td>
                  <td><?php echo "$dob";?></td>
                  <br>
                  </tr>
                  <tr>
                    <td><label for="batch" style="color:black">Batch:</label></td>
                  <td><input type="text" name="batch" id="required" ></td>
                  <br>
                  </tr>
                  <tr>
                    <td><label>   
                      Department
                      </label>  </td> 
                      <td><?php echo $department;?></td> 
                      
                  <br>
                  </tr>
                  <tr>
                    <td>
                      <label for="gender" style="color: black;">Gender:</label></td>
                      <td><?php echo $gender;?></td>
                      </tr>
                      <tr>
                  <td>
                    <label for="cgpa" style="color: black;">cgpa(upto last updated sem):</label></td>
                    <td><input type="number" name="cgpa" id="required" ></td>
                    <br>
                    </tr>
                      <tr>
                        <td>
                          <label for="standin arrear" style="color: black;">Standin Arrear:</label></td>
                          <div><td><input type="radio" name="sa" value="yes" >Yes</td></div>
                          <div><td><input type="radio" name="sa" value="no" >No</td></div>
                          <br>
                          </tr>
                <tr>
                  <td><label for="arrear" style="color: black;">History of arrear:</label></td>
                  <td><select style="width:200px; height: 35px;" name="arr">
                    <option value="arrear">arrears</option>
                    <option value="arrear">Nil</option>
                    <option value="arrear">1</option>
                    <option value="arrear">2</option>
                    <option value="arrear">Morethan 2</option>
                  </select></td>
                  <br>
                  </tr>
                  
                  <tr>
                    <td>
                      <label for="passout" style="color: black;">Year of pass Out:</label></td>
                      <td><input type="number" name="passout" id="required" ></td>
                      <br>
                      </tr>
                  <tr>
                    <td>
                      <label>   
                        Phone :  
                        </label></td>    
                        <td><input type="text" style="width:200px; height: 35px;" name="phone" size="10"/> <br> <br></td>
                  </tr>
                  <tr>
                    <td><label>   
                      Address :  
                      </label></td>
                      <td>
                        <textarea cols="80" rows="5"name="address" value="address">  
                        </textarea>  
                        <br> <br>  
                      </td>
                  </tr>
                  <tr>
                    <td>
                      <label>
                        State:
                      </label>
                    </td>
                    <td> 
                        <select style="width:200px; height: 35px;" name="state">  
                        <option value="State">State</option>  
                        <option value="Tamilnadu">Tamilnadu</option>  
                        <option value="Kerela">Kerela</option>  
                        <option value="Karnataka">Karnataka</option>  
                        <option value="Other">Other State</option>  
                        </select>  
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <label>   
                        Email:
                        </label></td>
                        <td>
                          <input type="email" style="width:200px; height: 35px;" id="email" name="mail"/> <br>    
        <br> <br>  
                    </td>
                  </tr>
                <tr>
                  <td><input type="submit" value="Apply" name="submit" id="button"></td>
                  <td></form></td>
                </tr>
                </table>
                      
</body>
</html>
<?php
 include('connect.php');
 if(isset($_POST["submit"]))
 {
   $batch = $_POST["batch"];
   $cgpa = $_POST["cgpa"];
   $sa = $_POST["sa"];
   $arr = $_POST["arr"];
   $passout = $_POST["passout"];
   $phone = $_POST["phone"];
   $address = $_POST["address"];
   $state = $_POST["state"];
   $mail = $_POST["mail"];
   $cid = $_GET["cid"];
   $sql = "SELECT * FROM campus_drive where cid=$cid";
   $result = mysqli_query($conn, $sql);
   if($result)
   {
  While($row=mysqli_fetch_assoc($result))
  {
    $c_name=$row["name"];
  }
   }
  
   $sql = "INSERT INTO app_campus (cid,c_name,  name, reg_no, dob, batch, department, gender, cgpa, sa, arr, passout, phone, address, state, mail)
    VALUES ($cid,'$c_name', ' $stud_name', '$reg_no', '$dob', '$batch', '$department', '$gender', '$cgpa', '$sa',  '$arr', '$passout', '$phone', '$address', '$state','$mail');";

   $result = mysqli_query($conn, $sql);
   if($result)
   {
       echo "Applied Successfully";
   } 
   else{
       echo mysqli_error($conn);
   }   
   }
?>