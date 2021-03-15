<?php
session_start();
include('./conn.php');
if(isset($_POST['submit'])){
	$name=$_POST['Username'];
 $phone=$_POST['Contact'];
 $aadhar=$_POST['adh'];
 
 $emailid=$_POST['Email'];
 $password=$_POST['Password'];
 $address=$_POST['adr'];
	$nam=$_SESSION['Name'];
	$query1="UPDATE `farminfo` SET `Username`='$name',`Phone_no`='$phone',`aadhar`='$aadhar',`email`='$emailid',`password`='$password',`address`='$address' WHERE `Name`='$nam'";
	$res1=mysqli_query($conn,$query1);
	// $_SESSION['email']=$email;
	// $_SESSION['Phone_no']=$phone;
	echo("<script>alert('PROFILE UPDATED')</script>");
	echo("<script> window.location='blogin.php'</script>");
}   
 

?>