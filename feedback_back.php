<?php
 include('./conn.php');
 if(isset($_POST['submit'])){
 $n=$_POST['n'];
 $e=$_POST['e'];
 $ph=$_POST['t'];
 $qu=$_POST['q'];
 $query1="INSERT INTO `feedback`(`Name`, `email`, `Phone_no`, `query`) VALUES ('$n','$e','$ph','$qu')";
 $req1=mysqli_query($conn,$query1);
 echo("<script>alert('Ur Feedback is Successfully received . Thank you for your precious feedback.')</script>");
 echo("<script>window.location='index.php'</script>");
 }
 else{
	 echo'do again ';
 }
?>