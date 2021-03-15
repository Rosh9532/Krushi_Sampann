<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>CONTRACT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            
        }

        html {
            height: 100%
        }

        p {
            color: grey
        }

        #heading {
            text-transform: uppercase;
            color: #28a745;
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #28a745;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #28a745;
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: #28a745;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #000000
        }

        #msform .action-button-previous {
            width: 100px;
            background: #28a745;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: #28a745;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: #28a745;
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: #28a745
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #28a745
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: #28a745
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript'
        src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'>$(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({ 'opacity': opacity });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function () {
                return false;
            })

        });</script>


<!-- style for nav-->
<style>
 
    .card-header{font-family: "Helvetica Neue";
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

<body oncontextmenu='return false' class='snippet-body'>

<div> <header style="background-color: #242424; ">
        <img src="img/KSlogo.png" alt="Logo" style="width:150px;" >
      कृषी संपन्न
     
		 <a href="aboutus.php"class="btn btn-lg btn-success float-right"align="right" style="margin:10px;">About us</a>
	   <a href="blog_out.php" class="btn btn-lg btn-success float-right"align="right" style="margin:10px;" >Logout</a>
     <a href="home.php" class="btn btn-lg btn-success float-right" align="right" style="margin:10px;" >Home</a>
     
	  </header>
	  <header style="background-color: #74cc5c; padding: 10px; "></header>
  </div>


    <!-- nav bar -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Start Making CONTRACT
                    </h2>
                    <p>Fill all form field to go to next step</p>
        <!--form started ...add php here-->         
                 
                    <form id="msform" action="contract_backend.php" method="POST" enctype="multipart/form-data">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Farm Details</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Email: *</label>
                                 <input type="email" name="email"
                                    placeholder="Email Id" />
                                     <label class="fieldlabels">Username: *</label>
                                      <input type="text" name="username" placeholder="UserName" />
                                     <label
                                    class="fieldlabels">Password: *</label> <input type="password" name="password"
                                    placeholder="Password" /> 
                            </div> <input type="button" name="next1" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels">Name: *</label> 
                                <input type="text" name="Name"
                                    placeholder="Name" />
                                      <label
                                    class="fieldlabels">Contact No.: *</label>
                                     <input type="text" name="phoneNo"
                                    placeholder="Contact No." /> 
                                    <label class="fieldlabels">Adress : *</label> 
                                    <div class="row">
                                        <div class="col-md-6"> <input type="text" class="form-control"
                                                placeholder="Place" required name="place"> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control"
                                                placeholder="Taluka" name="taluka" required> </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"> <input type="text" class="form-control"
                                                placeholder="Distric" name="distric" required> </div>
                                        <div class="col-md-6"> <input type="text" class="form-control"
                                                placeholder="State" name="state" required> </div>
                                    </div>


                            </div> <input type="button" name="next2" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Farm details</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6"> <input type="text" class="form-control"
                                            placeholder="7/12 ID (gat no.)" required name="gat_no"> </div>
                                    <div class="col-md-6"> <input type="number" class="form-control"
                                            placeholder="area in hector" name="area" required> </div>
                                </div>

                                 <label class="fieldlabels">Upload Your 7/12:</label> 
                                 <input type="file"
                                    name="file" > 
                                 <!--   <div> 
                                        <button type="submit" name="upload">UPLOAD</button> 
                                      </div> 
                                   -->
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="fs-title">Crop  details</h2>
                                        </div>  
                                    </div>
                                    <div class="row">
                                        <label class="fieldlabels"> Crops : *</label>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"> <input type="text" class="form-control"
                                                placeholder="add list of crops" name="crop" required> </div>
                                        <div class="col-md-6"> <input type="number" class="form-control"
                                                placeholder="average production" name="production" required> </div>
                                            </div>
                                    <label class="fieldlabels"> 
                                    Photo of crop:</label> 
                                    <input type="file" name="cropPic"  accept="image/*">
                            </div> 
                            <input type="button" name="next2" class="next action-button" value="Next" />
                            
                             <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                        <input type="submit" name="upload" class="next action-button"  />
                                    </div>
                                    <div class="col-5">
                                       
                                    </div>
                                </div> <br> 
                                <div class="row"><h4>Thanks For submitting your details with us. We
                                    will send you a confirmation email. We will review your details and
                                    revert back.</h4></div>
                                <br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="img/t.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Added Details</h5>
                                    </div>
                                    <div class="home-link" ><a href="./home.php"><span class="glyphicon glyphicon-home"></span>Back To Home</a>  </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>