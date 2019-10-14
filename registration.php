<?php
if($_POST)
{
$patid=$_POST['pid'];
$fnam=$_POST['firstname'];
$lnam=$_POST['lastname'];
$ph=$_POST['phone'];
$gen=$_POST['gender'];
}
$con=mysqli_connect("localhost","root","","hospital_management");
$entry="Insert into patient_registration(pid,first_name,last_name,phno,gender) VALUES(".$patid.",'".$fnam."','".$lnam."',".$ph.",'".$gen."')";
if(mysqli_query($con,$entry)==true)
{
include_once("sucessful.html");
}
else
{
echo "NOT Registered";
}
mysqli_close($con);
?>

		 