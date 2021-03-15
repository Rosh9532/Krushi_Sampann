<?php
 include('./conn.php');
 if(isset($_POST['submit'])){
 $nam= $_POST['Name'];  
 $name=$_POST['Username'];
 $phone=$_POST['Contact'];
 $aadhar=$_POST['adh'];
 $category = $_POST['category'];
 $emailid=$_POST['Email'];
 $password=$_POST['Password'];
 $address=$_POST['adr'];
    
    // $nam = dataFilter($_POST['Name']);
    // $mobile = dataFilter($_POST['mobile']);
    // $name = dataFilter($_POST['Username']);
    // $emailid = dataFilter($_POST['Email']);
    // $password =	dataFilter(password_hash($_POST['Password'], PASSWORD_BCRYPT));
    // $category = dataFilter($_POST['category']);
	// $address = dataFilter($_POST['adr']);
}	
	
$length = strlen($phone);

if($length != 10)
{
	$_SESSION['message'] = "Invalid Mobile Number !!!";
	header("location: error.php");
	die();
}

if($category==1){
 $query1="INSERT INTO `farminfo`(`Name`, `Username`, `Phone_no`, `aadhar`, `email`, `password`, `address`) VALUES ('$nam','$name','$phone','$aadhar','$emailid','$password','$address')";
 $req1=mysqli_query($conn,$query1);
 echo("<script>alert('U Have Successfully Registered')</script>");
 echo("<script>window.location='blogin.php'</script>");
 }
else{
	$query1="INSERT INTO `buyinfo`(`Name`, `Username`, `Phone_no`, `aadhar`, `email`, `password`, `address`) VALUES ('$nam','$name','$phone','$aadhar','$emailid','$password','$address')";
	$req1=mysqli_query($conn,$query1);
	echo("<script>alert('U Have Successfully Registered')</script>");
	echo("<script>window.location='blogin.php'</script>");
 }
?>