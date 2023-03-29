<?
session_start();
if(isset($SESSION["username"]))
{
  header('location:admin_login.php');
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
    
  </style>
</head>
<body>

    <body>

        <div class="wrapper">
            <div class="sidebar">
                <h2>Placement</h2>
                <ul>
                    <li><a href="admin_hm.php"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="add_student.php"><i class="fas fa-home"></i>Add student</a></li>
                    <li><a href="add_campus.php"><i class="fas fa-user"></i>Campus Drives</a></li>
                    <li><a href="app_student.php"><i class="fas fa-project-diagram"></i>Applied Student</a></li>
                    <li><a href="shortlisted.php"><i class="fas fa-blog"></i>Shortlisted</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
                </ul> 
        
            </div>
            <div class="main_content">
                <div class="header">Student Details</div>  
                <div class="info">
                
                  <h4 align="center">ADD STUDENT DETAILS </h4>
              </div>
            </div>
        </div>
        <form method="post">
            <table>
          
          <tr>
            <td><label for="username" style="color:black;">Student name:</label></td>
          <td><input type="text"  name="username" id="required"></td>
          <br></tr>
          <tr>
            <td><label for="reg_no" style="color:black">Reg_no:</label></td>
          <td><input type="text" name="reg_no" id="required"></td>
          <br>
          </tr>
          <tr>
            <td><label>   
              Department
              </label>  </td> 
              <td><select style="width:200px; height: 35px;" name="department">  
              <option value="Course">Course</option>
              <option value="Bsc CS">Bsc CS</option>    
              <option value="BCA">BCA</option>  
              <option value="BBA">BBA</option>  
              <option value="B.Tech">B.Tech</option>  
              <option value="MBA">MBA</option>  
              <option value="MCA">MCA</option>  
              <option value="M.Tech">M.Tech</option>  
              </select> </td> 
              
          <br>
          </tr>
          <tr>
            <td>
          <label for="dob" style="color: black;">DOB:</label></td>
          <td><input type="date" name="dob" id="required" ></td>
          <br>
          </tr>
          <tr>
          <td>
            <label for="gender" style="color: black;">Gender:</label></td>
            <div><td ><input type="radio" name="gender" value="male" >Male<br><br>
            <input type="radio" name="gender" value="female" >Female</td></div>
            <br>
            </tr>
            <tr>
          <td>
            <label for="aadhar_no" style="color: black;">Aadhar Number:</label></td>
            <td><input type="number" name="aadhar_no" id="required" ></td>
            <br>
            </tr>
          <tr>
          <td><label for="father_name" style="color: black;">Father's name:</label></td>
          <td><input type="text"  name="father_name" id="required" ></td>
          <br>
        </tr>
        <tr>
          <td><label for="regilion" style="color: black;">Religion:</label></td>
          <td><select style="width:200px; height: 35px;" name="religion">
            <option value="religion">Religion</option>
            <option value="religion">Christian</option>
            <option value="religion">Hindu</option>
            <option value="religion">Muslim</option>
            <option value="religion">Others</option>
          </select></td>
          <br>
          </tr>
          <tr>
            <td>
              <label>   
                Phone :  
                </label></td> 
                <td><input type="text"style="width:200px; height: 35px;" name="phone" size="10"/> <br> <br></td>
          </tr>
          <tr>
            <td><label>   
              Address :  
              </label></td>
              <td>
                <textarea cols="80" rows="5" name="address" value="address">  
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
                <option value="state">State</option>  
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
                  <input type="email" style="width:200px; height: 35px;"id="email" name="mail"/> <br>    
<br> <br>  
            </td>
          </tr>
        <tr>
          <td><input type="submit" value="Add Student" name="submit" id="button"></td>
          <td></form></td>
        </tr>
        </table>
        
</body>
</html>
<?php
include("connect.php");
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $reg_no = $_POST["reg_no"];
    $department = $_POST["department"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $aadhar_no = $_POST["aadhar_no"];
    $father_name = $_POST["father_name"];
    $religion = $_POST["religion"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $mail = $_POST["mail"];
    $sql = "INSERT INTO students (name, reg_no, department, dob, gender, aadhar, father_name, religion, phone, address, state, email) VALUES ('$username', '$reg_no', '$department', '$dob', '$gender', '$aadhar_no', '$father_name', '$religion', '$phone', '$address', '$state', '$mail');";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        echo "Student Added Successfully";
    } 
    else{
        echo mysqli_error($conn);
    }   
}
?>