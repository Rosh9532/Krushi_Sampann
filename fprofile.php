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

  <title>Profile</title>

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
          <a href="home.php" class="list-group-item" style= "color:green; font-weight:bold;">HOME</a>
          <a href="upload_product.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD POST</a>
		  <a href="contract.php" class="list-group-item" style= "color:green; font-weight:bold;">UPLOAD CONTRACT</a>
          <a href="fpost.php" class="list-group-item" style= "color:green; font-weight:bold;">VIEW POST</a>
          <a href="viewcon.php" class="list-group-item" style= "color:green; font-weight:bold;">VIEW CONTRACT</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->
	  
	  
	  <div class="col-1" style="width:10px;" >
		      <div class="vl"></div>
          </div>
		  <!-- /.col-lg-1 -->
		  
		  

      <div class="col-lg-8" style="padding-left:0px; margin-left:-40px;padding-top:30px;">

      <section >
            <div class="" style="background:#bfdcae; align:center; font-size:20px;" >
                <div class="box" style="background:#bfdcae; align:center;">
                <head>
                    <div class="row"style="paddingleft:20px"><br><div class="col-sm-9" class="image-circle" style="padding-left:350px; padding-top:50px;">
					<img src="img/p.png" class="fit-image" style="width:250px;">
						</div>
                </head>
                     <br> </br>
                        <div class="col-sm-9"style="padding-left:60px; padding-top:100px;">
                            <br><b>NAME : </b>
                            <font size="+1"><?php echo $_SESSION['Name'];?></font>
                        </div><br>
						<div class="col-sm-9"style="padding-left:60px">
                            <br><b>USERNAME : </b>
                            <font size="+1"><?php echo $_SESSION['Username'];?></font>
                        </div><br>
						<div class="col-sm-9"style="padding-left:60px">
                            <br><b>PHONE NO. : </b>
                            <font size="+1"><?php echo $_SESSION['Phone_no'];?></font>
                        </div><br>
						<div class="col-sm-9"style="padding-left:60px">
                            <br><b>ADDRESS : </b>
                            <font size="+1"><?php echo $_SESSION['address'];?></font>
                        </div><br>
                        <div class="col-sm-9"style="padding-left:60px">
                            <br><b>AADHAR NO. : </b>
                            <font size="+1"><?php echo $_SESSION['aadhar'];?></font>
                        </div><br>
						
                        <div class="col-sm-3"></div>
                    </div>
                        <div class="12u$">
                            <center>
                                <div style="align:center; padding-top:100px;">
                                        
                                        <a href="editprofile.php" class="btn btn-lg btn-success" style="margin:20px;">Edit Profile</a>
									      	<a href="blog_out.php" class="btn btn-lg btn-success" style="margin:20px;">LOG OUT</a>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          
         

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
