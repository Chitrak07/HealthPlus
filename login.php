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
			  		
			  		<h2>Don't Have Account Signup</h2>

<a href="register.php"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button></a>
<?php include('errors.php'); ?>
      <h1>Login</h1>

	  <form action="" method="POST">
		Username: <input type="text" name="user"><br />
		Password: <input type="password" name="pass"><br />	
		 <input type="submit" class="signupbtn" value="Login" name="submit" />
		</form>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

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

		<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: index.html");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>

	</body>
</html>