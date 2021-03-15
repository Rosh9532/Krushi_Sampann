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

  <title>Contracts</title>

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
  height: 950px;
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
     <a href="bhome.php" class="btn btn-success float-right" align="right" style="margin:10px;" >Home</a>
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>

  <!-- Page Content -->
  <div class="cont">

    <div class="row">

      <div class="col-lg-3" style="padding-top:20px;">
 <h1 class="my-3">OPTIONS</h1>
        <div class="list-group">
          <a href="bhome.php" class="list-group-item" style= "color:green; font-weight:bold;">HOME</a>
		   <a href="bprofile.php" class="list-group-item" style= "color:green; font-weight:bold;">PROFILE</a>
          <a href="buploadpro.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD POST</a>
		  <a href="view.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD CONTRACT</a>
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

	   <h2 style="background-color:#4BB543; padding:8px;color:white;"><b>✧Contracts</b></h2>
	  <br>
	  
    
    <!-- php code for testing -->



    <div class="row">

<?PHP

include('./conn.php');




$query = " SELECT * FROM contract order by cid ASC ";

$queryfire = mysqli_query($conn, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
  while($product = mysqli_fetch_array($queryfire)){
    ?>
    
      
      <div class="card text-white  mb-4 w-100 " style="max-width: 100%;">
	  
  <div class="card-header" style="background-color:#74cc5c;"><h4>
		 Contract Record <?php echo $product['cid'];  ?>
		
		 </h4></div>
		 
  <div class="card-body" style=" color:black;">
   <div style= "color:; font-weight:; font-size:30px;">
   
   
  
<div class="card-text"> 
<h5><span>  Name: <?php echo $product['Name'];  ?> </span> </h5>
<h5><span>  Crop: <?php echo $product['crop'];  ?> </span> </h5>
<h5><span>  Area in hectare: <?php echo $product['area'];?>  </span> </h5>
<h5><span>  Avg Production: <?php echo $product['production'];?> /hectare</span> </h5>
<h5 ><span>  Location: <?php echo $product['gat_no']; ?>, <?php echo $product['place'];  ?> , <?php echo $product['taluka'];  ?> , Dist. 
<?php echo $product['distric'];?> , <?php echo $product['state'];  ?> .
</span> </h5>
<br>
</div>
</div>

<a  class="btn btn-lg btn-success btn-block" data-toggle="collapse" data-target="#demo" >Contact Details</a>
<div id="demo" class="collapse p-2" style ="color:green; text-align:; ">
<h5><span>  Phone No.: <?php echo $product['phoneNo'];  ?> </span> </h5>
<h5><span>  E-Mail Id : <?php echo $product['email'];  ?> </span> </h5>
  </div>
</div>
</div>
  
  
   
</div>


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

      </div>
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
