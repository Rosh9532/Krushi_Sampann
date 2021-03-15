<?php
   session_start();
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.s/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
 
.card-header{
                background: #61b15a;  /* fallback for old browsers */
                 background: -webkit-linear-gradient(to right, #58e645, #61b15a);  /* Chrome 10-25, Safari 5.1-6 */
                  background: linear-gradient(to right, #2e6120, #2e6120); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                color: white;
				font-size: 25px
				}
 
header {
  background-color: #000;
  padding: 10px;
  text-align: left;
  font-size: 75px;
  color: white;
  lenght:100%;
 
}
footer{
background-color: #74cc5c;
padding: 10px;
}

</style>
</head>
<body><div> <header style="background-color: #242424; ">
        <img src="img/KSlogo.png" alt="Logo" style="width:150px;" >
      कृषी संपन्न
     
		 <a href="aboutus.php"class="btn btn-success float-right"align="right" style="margin:10px;">About us</a>
	   <a href="blog_out.php" class="btn btn-success float-right"align="right" style="margin:10px;" >Logout</a>
     <a href="home.php" class="btn btn-success float-right" align="right" style="margin:10px;" >Home</a>
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>
    <div class="row">
        <div class="col-3">
        
        </div>
        <div class="col-6">
        <div class="card text-center"style="margin-top:40px;">
       <div class="card-header">
          <B style font= 30px>EDIT PROFILE</B>
       </div>
       <div class="card-body">
       <form method="POST" action="editprofile_back.php">
        

       <input type="text" class="form-control"placeholder="Enter Username" name="Username" >
       <br>
        <input type="tel" class="form-control"placeholder="Enter Contact number" name="Contact" >
       <br>
       <input type="number" class="form-control"placeholder="Enter Aadhar number" name="adh">
       <br>
        <input type="email" class="form-control"placeholder="Enter email" name="Email" >
       <br>
        <input type="password" class="form-control"placeholder="Enter Password" name="Password" >
       <br>
       <input type="text" class="form-control"placeholder="Enter Address" name="adr">
        <br>
        
          <div class="card-foot">
            <button type="submit" name="submit"class="btn btn-success btn-lg btn-block">UPDATE PROFILE</button>
         </div>
        
       
       
       </form>
         
         
       </div>
       
     </div>
        
        
     
     
     
         </div>
         <div class="col-3">
         
         </div>
     </div>
</body>
</html>