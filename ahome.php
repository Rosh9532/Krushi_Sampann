<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

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
  height: 900px;
}
</style>	
</head>

<body>
<!--title and logo-->
 <div> <header style="background-color: #242424; ">
        <img src="img/KSlogo.png" alt="Logo" style="width:150px;" >
      कृषी संपन्न
     
		 <a href="aboutus.php"class="btn btn-success float-right"align="right" style="margin:10px;">About us</a>
	   <a href="index.php" class="btn btn-success float-right"align="right" style="margin:10px;" >Logout</a>
     
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>


   <div class="cont" >

     <div class="row">
	 
		 <div class="col-lg-3" style="padding-top:20px;">

        <h1 class="my-3">OPTIONS</h1>
        <div class="list-group">
          <a href="user.php" class="list-group-item" style= "color:green; font-weight:bold;">USER</a>
		   <a href="admin1.php" class="list-group-item" style= "color:green; font-weight:bold;">POSTS</a>
          <a href="viewcon.php" class="list-group-item" style= "color:green; font-weight:bold;">CONTRACTS</a>
		  
        </div>

      </div>
          <!-- /.col-lg-3 -->
		  
		  
		  <div class="col-1" style="width:10px" >
		      <div class="vl"></div>
          </div>
		  <!-- /.col-lg-1 -->
		  
		  
		  
		  <div class="col-8"  style="padding-left:0px; padding-top:30px; margin-left:-40px;"> 
		  
        <h2 style="background-color:#74cc5c; padding:20px;color:white;"><b>✧List of farmers</b></h2>
		  <br>
        
      


      <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No.</th>
      <th scope="col">E-mail ID</th>
      <th scope="col">Aadhar No.</th>
      <th scope="col">Address</td>
    </tr>
  </thead>

      <?PHP

include('./conn.php');




$query = " SELECT * FROM farminfo order by fid ASC ";

$queryfire = mysqli_query($conn, $query);

$num = mysqli_num_rows($queryfire);

if($num > 0){
  while($product = mysqli_fetch_array($queryfire)){
    ?>
				
			
  <tbody>
    <tr>
      <th scope="row"><?php echo $product['fid'];  ?></th>
      <td><?php echo $product['Name'];  ?></td>
      <td><?php echo $product['Phone_no'];  ?></td>
      <td><?php echo $product['email'];  ?></td>
      <td><?php echo $product['aadhar'];  ?></td>
      <td><?php echo $product['address'];  ?></td>
    </tr>
  	  
		  
		  
		  <?php		
  }
}
?>
      </tbody>
</table>


<!-- list of buyers -->
<br><br><br><br>
<h2 style="background-color:#74cc5c; padding:20px;color:white;"><b>✧List of Buyers</b></h2>
		  <br>
        
      


      <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone No.</th>
      <th scope="col">E-mail ID</th>
      <th scope="col">Aadhar No.</th>
      <th scope="col">Address</td>
    </tr>
  </thead>

      <?PHP

include('./conn.php');




$query2 = " SELECT * FROM buyinfo order by bid ASC ";

$queryfire2 = mysqli_query($conn, $query2);

$num2 = mysqli_num_rows($queryfire2);

if($num2 > 0){
  while($product2 = mysqli_fetch_array($queryfire2)){
    ?>
				
			
  <tbody>
    <tr>
      <th scope="row"><?php echo $product2['bid'];  ?></th>
      <td><?php echo $product2['Name'];  ?></td>
      <td><?php echo $product2['Phone_no'];  ?></td>
      <td><?php echo $product2['email'];  ?></td>
      <td><?php echo $product2['aadhar'];  ?></td>
      <td><?php echo $product2['address'];  ?></td>
    </tr>
  	  
		  
		  
		  <?php		
  }
}
?>
      </tbody>
</table>



		  </div>
		  <!-- col-8 -->
		  
		 
		  
     </div>
	 <!-- row -->
    </div> 
	<!-- cont -->
  
  
  
  
  
  
  
  
  
  
</body>

</html>