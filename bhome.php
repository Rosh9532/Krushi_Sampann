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

  <title>Home</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>

		<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
		  <!-- <a href="buploadcon.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD CONTRACT</a> -->
          <a href="bpost.php" class="list-group-item" style= "color:green; font-weight:bold;">VIEW POST</a>
          <!-- <a href="viewcon.php" class="list-group-item" style= "color:green; font-weight:bold;">VIEW CONTRACT</a> -->
        </div>

      </div>
      <!-- /.col-lg-3 -->
	  
	  
	  <div class="col-1" style="width:10px;" >
		      <div class="vl"></div>
          </div>
		  <!-- /.col-lg-1 -->
		  
		  

      <div class="col-lg-8" style="padding-left:0px; margin-left:-50px;padding-top:30px;">

      
	  
	      <section >
            
        <div class="row" style="padding:30px;">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-60">
              <a href="#"><img class="card-img-top" src="img/capsicum.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div>Capsicum</div>
                </h4>
                <h5 style="color:green;font-weight: bold;">Rs.150 /kg</h5>
                <p class="card-text">Capsicum to make your dish spicy</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-60">
              <a href="#"><img class="card-img-top" src="img/potato.jpg" alt="" ></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div>Potato</div>
                </h4>
                <h5 style="color:green;font-weight: bold;">Rs.40 /kg</h5>
                <p class="card-text">The inseparable part of every dish is over here.</p>
              </div>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-60">
              <a href="#"><img class="card-img-top" src="img/productImages/Oranges5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div>Orange</div>
                </h4>
                <h5 style="color:green;font-weight: bold;">Rs.40 /kg</h5>
                <p class="card-text">Ripe and Juicy oranges over here!</p>
              </div>
              
            </div>
          </div>
        </section>
          
	  
	  
	 
	  
	  
		</div>
      <br>
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
