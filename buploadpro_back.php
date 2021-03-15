<?php
session_start();
 include('./conn.php');
 if(isset($_POST['submit'])){
 $bid = $_SESSION['id'];
 $pname=$_POST['pname'];
 $pquant=$_POST['p'];
 $type=$_POST['type'];
 $price=$_POST['price'];
 $query1="INSERT INTO `bpost`(`bid` ,`pname`, `pquant`, `pcat`, `price`) VALUES ('$bid','$pname','$pquant','$type','$price')";
 $req1=mysqli_query($conn,$query1);
 echo("<script>alert('U Have Successfully Uploaded Post')</script>");
 echo("<script>window.location='bpost.php'</script>");
 }
 else{
	 echo'Do not be oversmart';
 }
?>