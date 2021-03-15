<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>

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

</style>
</head>
<body>

<div> <header style="background-color: #242424; ">
        <img src="img/KSlogo.png" alt="Logo" style="width:150px;" >
      कृषी संपन्न
     
		 <a href="index.php"class="btn btn-success float-right"align="right" style="margin:10px;">Home</a>
	   <a href="blogin.php" class="btn btn-success float-right"align="right" style="margin:10px;" >Login</a>
     <a href="bsignup.php" class="btn btn-success float-right" align="right" style="margin:10px;" >Register</a>
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>
	  
<div class="row">

<div class="col-3">
     
</div>

<div class="col-6">

    <div class="card text-center" style="margin-top:60px;">
                <div class="card-header" >
                    LOG IN 
                </div>
                
                <div class="card-body" style="font-size:20px;">
                        <form method="POST" action="blogin_back3.php">
                                    <br>
                                    <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
                                    <br>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    <br><b>
									<input type="radio" id="Farmer" name="category" value="1">
                                     <label for="Farmer" style="margin-right:10px;">Farmer</label>
                                    <input type="radio" id="Buyer" name="category" value="0">
                                     <label for="Buyer" style="margin-right:10px;">Buyer</label>
									 <input type="radio" id="Admin" name="category" value="2">
                                     <label for="Buyer" style="margin-right:10px;">Admin</label><br>
                                    <br></b>
                                    <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>
                        </form>
                </div>
            
            <div class="card-footer text-muted">
                <a href="index.php" style="text-decoration: none;">New here? Register</a>
            </div>
    </div>

</div>

<div class="col-1">
    <!-- blank column of 1 units -->
</div>
</div>

</body>
</html>