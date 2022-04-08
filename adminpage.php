<html>
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stpage.css">
<title>Student Details</title>
</head>
<body oncontextmenu="return false">
}
<h2>Student Information</h3>
<!-- <form id = "myForm" action = "#" >   -->
<form action="stdata.php" method="post">
<table align="center" cellpadding = "10">
<!--------------------- First Name ------------------------------------------>
<tr>
<td>First Name</td>
<td><input type="text" name="FName" maxlength="50" placeholder="Sagar" />
(Max 50 Characters Allowed)
</td>
</tr>
<!--------------------- Middle Name ------------------------------------------>
<tr>
<td>Middle Name</td>
<td><input type="text" name="MName" maxlength="50" placeholder="Santosh" />
(Max 50 Characters Allowed)
</td>
</tr>
<!------------------------ Last Name --------------------------------------->
<tr>
<td>Last Name</td>
<td><input type="text" name="LName" maxlength="50" placeholder="Nagarale"/>
(Max 50 Characters Allowed)
</td>
</tr>
<!-------------------------- Email ID ------------------------------------->
<tr>
<td>Email ID</td>
<td><input type="email" name="EID" maxlength="100" placeholder="s.nagarale88@gmail.com"/></td>
</tr>
<!-------------------------- Mobile Number ------------------------------------->
<tr>
<td>Mobile Number</td>
<td>
<input type="text" name="MNumber" maxlength="10" placeholder="8329xxxxxx"/>
(10 Digits Allowed)
</td>
</tr>
<!---------------------- Gender ------------------------------------->
<tr>
<td>Gender</td>
<td>
<input type="radio" name="Gender" value="Male" />
Male
<input type="radio" name="Gender" value="Female" />
Female
</td>
</tr>
<!--------------------------Date Of Birth----------------------------------->
<tr>   
<td><label for="birthday">Date of Birth(DOB)</label></td>
<td><input type="date" name="DOB" >
</tr>
<!------------------------- Address ---------------------------------->
<tr>
<td>Address<br /><br /><br /></td>
<td><textarea name="Addr" rows="10" cols="50"></textarea></td>
</tr>
<!-------------------------- City ------------------------------------->
<tr>
<td>City</td>
<td><input type="text" name="City" maxlength="50" placeholder="Dondaicha"/>
(Max 50 Characters Allowed)
</td>
</tr>
<!----- -------------------- Pin Code-------------------------------------->
<tr>
<td>Pin Code</td>
<td><input type="Number" name="PinCode" maxlength="6" placeholder="425408"/>
(Max 6 Numbers Allowed)
</td>
</tr>
<!---------------------------- State ----------------------------------->
<tr>
<td>State</td>
<td><input type="text" name="Stat" maxlength="50" placeholder="Maharastra"/>
(Max 50 Characters Allowed)
</td>
</tr>
<!------------------------------ Country --------------------------------->
<tr>
<td>Country</td>
<td><input type="text" name="Country" placeholder="India" /></td>
</tr>

<!-----------------------Qualification---------------------------------------->
<tr>
<td>Qualification <br /><br /><br /></td>
<td>
<!-- <label for="Qualification">previous education:</label> -->
  <select name="Qualification" multiple>
    <option value="HighSchool">HighSchool</option>
    <option value="HigherSchool">HigherSchool</option>
    <option value="Graduation">Graduation</option>
    <option value="PostGraduation">PostGraduation</option>
    <option value="Phd">Phd</option>
  </select>
  <br><br>
<br/>
</td>
</tr>
<!---------------------------- Courses ----------------------------------->
<tr>
<td>Courses<br/>Applied For</td>
<td>
<input type="radio" name="customRadio" value="Computer" />
Computer<br>
<input type="radio" name="customRadio" value="Mechanical" />
Mechanical<br>
<input type="radio" name="customRadio" value="Electrical" />
Electrical<br>
<input type="radio" name="customRadio" value="Information Technology" />
Information Technology<br>
</td>
</tr>
<!----------------------- Submit and Reset ------------------------------->
<tr>
<td colspan="2" align="center">
     <!-- <input type="submit" value="Submit">  -->
    <!-- <input type="reset" value="Reset"> -->

<button onclick="myFunction()" >Submit </form>
<script>
function myFunction() {
 alert("data save successfully")
 
}
</script></button>
<button onclick="myFunc()" >Reset</button>
<button onclick="window.print();return false;">print</button>
</td>
</tr>
</table>
<script>  
 function func(){  
   document.getElementById("myForm").reset();  
 }   
</script>  
<?php
session_start();
session_unset();
session_destroy();
?>
</body>
</html>