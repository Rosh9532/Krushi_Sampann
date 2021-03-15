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

  <title>Upload</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" type="text/css" href="indexFooter.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
  
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
     <a href="home.php" class="btn btn-success float-right" align="right" style="margin:10px;" >Home</a>
     
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
		  
		  

      <div class="col-lg-8" style="padding-left:0px; margin-left:-50px;padding-top:30px;">

      
             
			  <section id="one" class="wrapper style1 align-center">
      
<form method="POST" action="buploadpro_back.php" enctype="multipart/form-data">


          <h2 style="background-color:#74cc5c; padding:20px;color:white;"><b>Upload Post for required product..</b></h2>
		  <br><br><span style="font-size: 120%;">
		  <div class="col-sm-6"><b>Product Name :</b>
          <input type="text" name="pname" id="pname" value="" placeholder="" style="background-color:white;color: black;margin-left:20px;" />
          </div>
          <br>
      <div class="col-sm-6"><b>Product Quantity :</b>
          <input type="text" name="p" id="pquant" value="" placeholder="" style="background-color:white;color: black;margin-left:20px;" />
          </div>
     <br>
          <div class="col-sm-6" style="">
            <div class="select-wrapper" style="width:100px;" ><b>
              <select name="type" id="type" required style="background-color:white; color: black; width:150px; ">
			  
                <option value="" style="color: black;">Category</option>
				<option value="Fruit" style="color: black;">Fruit</option>
                <option value="Vegetable" style="color: black;">Vegetable</option>
                <option value="Grains" style="color: black;">Grains</option>
			
              </select></b> 
          </div>
          </div> 
    <br>
    <div class="col-sm-6"> <b>Expected Price :</b>
          <input type="text" name="price" id="price" value="" placeholder="" style="background-color:white;color: black; margin-left:20px;" />
      </div> 
	  </span>
      <div class="col-sm-6" >  <br><br><br><br>
      <button type="submit" name="submit"class="btn btn-success float-right btn-lg btn-block" >SUBMIT</button>
      </div>
    
    </form></div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
				</section>
		</div>
      <br>
<script>
     CKEDITOR.replace( 'pinfo' );
  </script>
        </div>
			 
			 
			 
			 
			 
         

        </div>
        <!-- /.row -->

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
