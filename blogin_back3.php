<?php
    session_start();
   include('./conn.php');
 
    if(isset($_POST['submit'])){
	 $name=$_POST['username'];
	 $password=$_POST['password'];
	 $category = $_POST['category'];
	 
	}
 if($category==1){
	 $query1="SELECT * FROM `farminfo` WHERE `Username`='$name'";
	 $res1=mysqli_query($conn,$query1);
	 echo"$name";
	 if(mysqli_num_rows($res1)){
		 $data=mysqli_fetch_assoc($res1);
		 if(strcmp($data['password'],$password)==0){
			$_SESSION['Name']=$data['Name'];
			$_SESSION['Username']=$data['Username'];
			$_SESSION['id'] = $data['fid'];
			$_SESSION['Phone_no']=$data['Phone_no'];
			$_SESSION['aadhar']=$data['aadhar'];
			$_SESSION['address']=$data['address'];
			// $_SESSION['logged_in'] = true;
			 echo("<script> window.location='home.php'</script>");
		 }else{
		 
			 echo("<script>alert('Password not found .Please LOGIN')</script>");
	         echo("<script> window.location='blogin.php'</script>");
			 
		 }
	 }else{
     
		 echo("<script>alert('Username not found .Please REGISTER')</script>");
	     echo("<script> window.location='bsignup.php'</script>");
		 
	 }	 
 }elseif($category==0){
	$query1="SELECT * FROM `buyinfo` WHERE `Username`='$name'";
	$res1=mysqli_query($conn,$query1);
	echo"$name";
	if(mysqli_num_rows($res1)){
		$data=mysqli_fetch_assoc($res1);
		if(strcmp($data['password'],$password)==0){
			$_SESSION['Name']=$data['Name'];
			$_SESSION['Username']=$data['Username'];
			$_SESSION['id'] = $data['bid'];
			$_SESSION['Phone_no']=$data['Phone_no'];
			$_SESSION['aadhar']=$data['aadhar'];
			$_SESSION['address']=$data['address'];
			// $_SESSION['logged_in'] = true;
			echo("<script> window.location='bhome.php'</script>");
		}else{
		
			echo("<script>alert('Password not found .Please LOGIN')</script>");
			echo("<script> window.location='blogin.php'</script>");
			
		}
	}else{
	
		echo("<script>alert('Username not found .Please REGISTER')</script>");
		echo("<script> window.location='bsignup.php'</script>");
		
	}	 

 }
 elseif($category==2){
 
	//  echo("<script>alert('Do not  be oversmart')</script>");
	//  echo("<script> window.location='bsignup.php'</script>");
	$query1="SELECT * FROM `admininfo` WHERE `Username`='$name'";
	$res1=mysqli_query($conn,$query1);
	echo"$name";
	if(mysqli_num_rows($res1)){
		$data=mysqli_fetch_assoc($res1);
		if(strcmp($data['password'],$password)==0){
			// $_SESSION['Name']=$data['Name'];
			// $_SESSION['Username']=$data['Username'];
			// $_SESSION['Phone_no']=$data['Phone_no'];
			// $_SESSION['aadhar']=$data['aadhar'];
			// $_SESSION['address']=$data['address'];
			// $_SESSION['logged_in'] = true;
			echo("<script> window.location='ahome.php'</script>");
		}else{
		
			echo("<script>alert('Password not found .Please LOGIN')</script>");
			echo("<script> window.location='blogin.php'</script>");
			
		}
	 }
	// else{
	
	// 	echo("<script>alert('Username not found .Please REGISTER')</script>");
	// 	echo("<script> window.location='bsignup.php'</script>");
		
	// }	 


 }
 else{
	 echo("<script>alert('Do not  be oversmart')</script>");
	 echo("<script> window.location='bsignup.php'</script>");
 
 }
 
 
 
 ?>
  