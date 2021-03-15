<?php
   session_start();
  
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Post</title>

  <!-- Bootstrap core CSS -->
  <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
header {
  padding: 15px;
  font-size: 75px;
  color: white;
  lenght:100%;
 
 
}
.cont{
      padding-left:30px;
	  
      margin:0;
    }
   .vl {
  border-left: 6px solid green;
  height: 2950px;
}
</style>

</head>

<body>
<!--title and logo-->
 <div> <header style="background-color: #242424; ">
        <img src="img/KSlogo.png" alt="Logo" style="width:150px;" >
      कृषी संपन्न
     
		 <a href="aboutus.php"class="btn btn-success float-right"align="right" style="margin:10px;">About us</a>
	   <a href="blog_out.php" class="btn btn-success float-right"align="right" style="margin:10px;" >Logout</a>
     <a href="home.php" class="btn btn-success float-right" align="right" style="margin:10px;" >Home</a>
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>

  <!-- Page Content -->
  

    <div class="row">

      <div class="col-lg-3" style="padding-top:20px;">

        <h1 class="my-3">OPTIONS</h1>
        <div class="list-group">
          <a href="bhome.php" class="list-group-item" style= "color:green; font-weight:bold;">HOME</a>
		   <a href="bprofile.php" class="list-group-item" style= "color:green; font-weight:bold;">PROFILE</a>
          <a href="buploadpro.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD POST</a>
		  <a href="buploadcon.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD CONTRACT</a>
          <a href="bpost.php" class="list-group-item" style= "color:green; font-weight:bold;">VIEW POST</a>
          <a href="viewcon.php" class="list-group-item" style= "color:green; font-weight:bold;">VIEW CONTRACT</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->
	  
	  
	  <div class="col-1" style="width:10px;" >
		      <div class="vl"></div>
          </div>
		  <!-- /.col-lg-1 -->
		  
		  

      <div class="col-lg-8 " style="padding-left:0px; margin-left:-50px; padding-top:30px; ">

	   <h2 style="background-color:#4BB543; padding:8px;color:white;"><b>✧Farmer's Post</b></h2>
	  <br>
	  
    
    <!-- php code for testing -->



    <div class="row">

<?PHP

include('./conn.php');




$query = " SELECT * FROM fproduct order by pid ASC ";

$queryfire = mysqli_query($conn, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
  while($product = mysqli_fetch_array($queryfire)){

    $fid =  $product['fid'];
    
    ?>
    
    
      <div class="card text-white  mb-4 w-100 " style="max-width: 100%;">
  <div class="card-header" style="background-color:#74cc5c;"><h4><?php echo
         $product['product'];  ?> </h4></div>
  <div class="card-body" style=" color:black;">
   <div style= "color:; font-weight:; font-size:30px;">
   
   
   <div class="row">
     <div class="col-5">
      <img src="img/productImages/<?php echo
      $product['pimage'];  ?>" alt="photo" class="img-fluid mb-2" >  
     </div>
     <div class="col-7">
      <?php echo
      $product['pinfo'];  ?>





     </div>
   </div>
   
  
  
        
  </div>
  <br>
<div class="card-text"> <h4>&#8377;<?php echo $product['price'];  ?><span>
   <br> <br>🗓️ <?php echo $product['dou'];  ?> </span> </h4></div>
<br>

<a href="" class="btn btn-lg btn-success btn-block" style ="margin-left:15px; display: block;" data-toggle="collapse" data-target="#demo" >View</a>
<br>
<div id="demo" class="collapse">
 
<!-- view profile -->  
<?php
 
$query2 = " SELECT * FROM farminfo where fid = $fid ";

$queryfire2 = mysqli_query($conn, $query2);

$num2 = mysqli_num_rows($queryfire2);
$productD = mysqli_fetch_array($queryfire2);


?>
<p  style= "color:green; font-weight:; font-size:20px; text-decoration: none" >Name : <?php echo $productD['Name'];  ?> <br> 
Phone no. : <?php echo $productD['Phone_no'];  ?> <br> 
Email : <?php echo $productD['email'];  ?> <br> 
Address :<?php echo $productD['address'];  ?>
</p>
  </div>
</div>
</div>
   
  
</div>
<br>
<?php		
  }
}
?>







	  <!-- post -->



<!-- next post -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        </div>
		<!-- row -->
        </div>
        <!-- /.cont -->

    
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container"></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="style/jquery/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
