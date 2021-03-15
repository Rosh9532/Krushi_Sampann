<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Display</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="style\bootstrap\js\bootstrap.min.js"></script>


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
     
      margin:0;
    }

    @media only screen and (max-width: 850px) {
  #line {
    display: none;
  }
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
	   <a href="blogin.php" class="btn btn-success float-right"align="right" style="margin:10px;" >Login</a>
     <a href="bsignup.php" class="btn btn-success float-right" align="right" style="margin:10px;" >Register</a>
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>


   <div class="cont" >

     <div class="row">

         <div class="col-3"  style="" >
        
              <h2 class="my-3" style="padding-top:20px;padding-bottom:0px; margin-left:30px;font-weight: bold;">Available products</h2>
             <div class="list-group" style="color:black; padding: 20px; padding-top:0px; margin-left:10px; font-size:20px;">
                 <div class="list-group-item">Fruits</div>
                 <div  class="list-group-item">Vegetable</div>
                 <div class="list-group-item">Cereals</div>
             </div>

            
          </div>
          <!-- /.col-lg-3 -->
		  
		  
		  <div class="col-1" id="line" style="width:10px" >
		      <div class="vl"></div>
          </div>
		  <!-- /.col-lg-1 -->
		  
		  
		  
		  <div class="col-8"  style="padding-left:0px; margin-left:-40px;"> 
		  
				<div id="carouselExampleIndicators" class="carousel slide my-" data-ride="carousel"style="padding:30px;"">
				<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox" >
				<div class="carousel-item active">
              <img class="d-block img-fluid" src="https://source.unsplash.com/1000x350/?farmer" alt="First slide">
				</div>
				<div class="carousel-item">
              <img class="d-block img-fluid" src="img/h2.png" alt="Second slide">
				</div>
				<div class="carousel-item">
              <img class="d-block img-fluid" src="img/h3.jpg" alt="Third slide">
				</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
				</div>
        
				<div class="row" style="padding:30px;">

             <div class="col-lg-4 col-md-6 mb-4" style="border:3px;">
             <div class="card h-100 msg">
              <a href="#"><img class="card-img-top" src="img/po1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div>Mango</div>
                </h4>
                <h5 style="color:green;font-weight: bold;">Rs 800/per dozen</h5>
                <p class="card-text">Fresh Mango straight from farm...!! </p>
              </div>
              
              </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-4">
             <div class="card h-100 msg">
              <a href="#"><img class="card-img-top" src="img/po3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div >Garlic</div>
                </h4>
                <h5 style="color:green;font-weight: bold;">Rs. 40/per kg</h5>
                <p class="card-text"> Fresh white garlic.Garlic size is about 38-42mm.<p>Storage Tip: Keep them in dry place</p></p>
              </div>
              
             </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-4">
             <div class="card h-100 msg">
              <a href="#"><img class="card-img-top " src="img/po2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <div>Custard Apple</div>
                </h4>
                <h5 style="color:green;font-weight: bold;">Rs. 160/perkg</h5>
                <p class="card-text">We supply the best quality Custard Apple (Sitafal) in India . Weight per fruit will be between 200gm to 1000gm.</p>
              </div>
              
             </div>
             </div>

          
         

			   </div>
              <!-- /.row -->
		  
		  </div>
		  <!-- col-8 -->
		  
		 
		  
     </div>
	 <!-- row -->
    </div> 
	<!-- cont -->
  
  
  
   <!-- Bootstrap core JavaScript -->
  <script src="style/jquery/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
  
  
  
  
</body>

</html>