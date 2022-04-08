<?php
include_once('mycon.php');
$FName          =$_POST['FName'];
$MName           =$_POST['MName'];
$LName           =$_POST['LName'];
$EID             =$_POST['EID'];
$MNumber         =$_POST['MNumber'];
$Gender          =$_POST['Gender'];
$DOB             =$_POST['DOB'];
$Addr            =$_POST['Addr'];
$City            =$_POST['City'];
$PinCode         =$_POST['PinCode'];
$Stat            =$_POST['Stat'];
$Country         =$_POST['Country'];
$Qualification   =$_POST['Qualification'];
$customRadio     =$_POST['customRadio'];
$sql = "INSERT INTO stdata (FirstName, MiddelName, LastName, EmailID, 
MobileNumber,Gender,DOB,Addr,City,PinCode,Stat,Country,Qualification,customRadio) 
values ('$FName','$MName','$LName','$EID','$MNumber','$Gender','$DOB ','$Addr','$City','$PinCode',
'$Stat','$Country ','$Qualification ','$customRadio');";
mysqli_query($conn, $sql);
header("Location:adminpage.php?Submit=success");
 