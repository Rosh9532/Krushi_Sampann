<?php
 include('./conn.php');
 if(isset($_POST['upload'])){
    $email= $_POST['email'];  
    $username=$_POST['username'];
    $password=$_POST['password'];
 
    $Name=$_POST['Name'];
    $phoneNo=$_POST['phoneNo'];
    $place=$_POST['place'];
    $taluka=$_POST['taluka'];
    $distric=$_POST['distric'];
    $state=$_POST['state'];
 
 
    $gat_no=$_POST['gat_no'];
    $area=$_POST['area'];
    $crop=$_POST['crop'];
    $production =$_POST['production'];   
    $targetfolder = "upload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

  }
}


    // $filename=$_FILES['proof'];
    // $fileerror=$_FILES['error'];
    // $filetmp=$_FILES['tmp_name'];
    // $fileext=explode('.',$filename);
    // $filecheck=strtolower(end($fileext));
    // $fileextstored=array('png','jpg','jpeg');
    // if(in_array($filecheck,$fileextstored)){
    //     $destinationfile='upload/'.$filename;
    //     move_uploaded_file($filetmp, $destinationfile);
    // }
    $query1="INSERT INTO `contract`(`email`, `username`, `password`, `Name`, `phoneNo`, `place`, `taluka`, `distric`, `state`, `gat_no`, `area`, `proof`, `crop`, `production`) VALUES('$email','$username','$password','$Name','$phoneNo','$place','$taluka','$distric','$state','$gat_no','$area','$targetfolder','$crop','$production')";
    $req1=mysqli_query($conn,$query1);
    echo("<script>alert('U Have Successfully Entered Details')</script>");
     echo("<script>window.location='home.php'</script>");
 
//  else{
//     echo'Do not be oversmart';
// }
 ?>