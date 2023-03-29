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
                    <li><a href="#"><i class="fas fa-user"></i>Campus Drives</a></li>
                    <li><a href="app_student.php"><i class="fas fa-project-diagram"></i>Applied Student</a></li>
                    <li><a href="shortlisted.php"><i class="fas fa-blog"></i>Shortlisted</a></li>
                    <li><a href="logout.php"><i class="fas fa-logout"></i>logout</a></li>
                </ul> 
        
            </div>
            <div class="main_content">
                <div class="header">Welcome Admin!! Have a nice day.</div>  
                <div class="info">
                  <h3></h3>
                  <h4 align="center">ADD CAMPUS DRIVE </h4>
              </div>
            </div>
        </div>
        <form method="post">
            <table>
          
          <tr>
            <td><label for="companyame" style="color:black;">Company name:</label></td>
          <td><input type="text"  name="name" id="required" ></td>
          <br></tr>
          <td>
              <label for="branch" style="color: black;">Branch:</label></td>
              <td><input type="text" name="branch" id="required" ></td>
              <br>
              </tr>
      
          <tr>
            <td>
              <label>   
                Company_mail:
                </label></td>
                <td>
                  <input type="email" style="width:200px; height: 35px;" id="email" name="mail"/> <br>    
<br> <br>  
            </td>
          </tr>
          <tr>
            <td>
              <label>   
                Contact_no :  
                </label></td>   
                <td><input type="text"style="width:200px; height: 35px;" name="phone" /> <br> <br></td>
          </tr>
          <tr>
            <td>
                <label>
                  Interview Venue:
                </label>
              </td>
              <td> 
                  <select name="venue">  
                  <option value="Venue">Venue</option>  
                  <option value="Sjc">SJC</option>  
                  <option value="bhc">BHC</option>  
                  <option value="HC">HC</option>  
                  <option value="JAMAL">JAMAL</option>  
                  </select>  
              </td>
            </tr>
            <tr>
                <td>
              <label for="interview_date" style="color: black;">Interview_Date:</label></td>
              <td><input type="date" name="interview_date" id="required" ></td>
              <br>
              </tr>
              <tr>
            <td><label>   
             Company_ Address :  
              </label></td>
              <td>
                <textarea cols="80" rows="5"name="address"  value="address">  
                </textarea>  
                <br> <br>  
              </td>
              <tr>
                <td><label>   
                 Eligibility_Criteria :  
                  </label></td>
                  <td>
                    <textarea cols="80" rows="5" name="eligibility"value="eligibility_criteria">  
                    </textarea>  
                    <br> <br>  
                  </td>
              </tr>
              <tr>
                <td><label>   
                 Details :  
                  </label></td>
                  <td>
                    <textarea cols="80" rows="5"name="details" value="details">  
                    </textarea>  
                    <br> <br>  
                  </td>
              </tr>
              <tr>
                <td><input type="submit" value="Add Campus" name="submit"id="button"></td>
                <td></form></td>
              </tr>
              </table>
              
      </body>
      </html>
      <?php
      include("connect.php");
      if(isset($_POST["submit"]))
      {
        $name = $_POST["name"];
        $address = $_POST["address"];
        $mail = $_POST["mail"];
        $phone = $_POST["phone"];
        $venue = $_POST["venue"];
        $interview_date = $_POST["interview_date"];
        $branch = $_POST["branch"];
        $eligibility = $_POST["eligibility"];
        $details = $_POST["details"];
        $sql = "INSERT INTO campus_drive ( name, branch, mail, contact, venue, date, address, eligiblity, details)
         VALUES ( '$name', '$branch', '$mail', '$phone', '$venue', '$interview_date', '$address', '$eligibility', '$details');";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            echo "Campus Drive Added Successfully";
        } 
        else{
            echo mysqli_error($conn);
        }   
        }
?>