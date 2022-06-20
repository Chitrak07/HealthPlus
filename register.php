<?php include('server.php') ?>
<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>HealthPlus</title>

		
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="css/log.css">
	
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<section class= "navs">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  				<div class="container-fluid">
    				<div class="navbar-header">
      					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
	      				</button>
	      				<a class="navbar-brand logo" href="#">
	      					<span><i class="fa fa-heart"></i></span>
	      					Health
							  <span><i class="fa fa-plus"></i></span>
	      				</a>
	    			</div>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<ul class="nav navbar-nav navbar-mid">
					        <li class="active"><a href="index.html">Home</a></li>
					        <li><a href="services.html">Services</a></li>
							<li><a href="contact.html">Contact Us</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="symptomai.html">Symptom AI</a></li>
				      	</ul>
				    </div>
				</div>
			</nav>
		</section>

			  	<div class="item">
			  		
                    <h2>Already have an Account Login</h2>


                    <a href="login.php"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></a>
                    
                          <h1>Sign Up</h1>
                          <p>Please fill in this form to create an account.</p>
                          <form method="post" action="register.php">
  	                       <?php include('errors.php'); ?>
							 <label>Username</label>
  	                       <input type="text" name="username" value="<?php echo $username; ?>">
                          <label for="email"><b>Email</b></label>
                          <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>">
                    <br><br>
                          <label>Enter Password</label>
  	                         <input type="password" placeholder="Enter Password" name="password_1">
                    
                          <label for="psw-repeat"><b>Repeat Password</b></label>
						  <input type="password" placeholder="Enter Password AGAIN" name="password_2">
                          
                          <label>
                            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                          </label>
                    
                          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    
                          <div class="clearfix">
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                            <button type="submit" class="signupbtn" name="reg_user">Sign Up</button>
                          </div>

                        </div>
                      </form>
                    </div>
	
					</div>
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="container">
				<div class="row">

				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copy-right-text text-center">
							&copy; 0901CS19119 <a > Shubham Kumar Vaish</a>
						</div>
					</div>
				</div>
			</div>
		</section>

	</body>
</html>