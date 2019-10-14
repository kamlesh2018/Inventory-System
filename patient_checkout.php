<?php
if($_POST)
{
   $patient=$_POST['pid'];
}
$con=Mysqli_connect("localhost","root","","hospital_management");
$query="Delete from patient_registration WHERE pid=$patient";
if(Mysqli_query($con,$query)==true)
{
	include("sucessful1.html");
}
else
{
	echo "Sorry You couldn`t checkout";
}
mysqli_close($con);
?>