<?php
include "../config.php";

if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

	$last_name= $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];
		
	$sql = "INSERT INTO `user`(`First_name`, `Last_name`, `Email`, `Password`) VALUES ('$first_name','$last_name','$email','$password')";

	$result = mysqli_query($conn,$sql);

    if ($result == TRUE) {
		echo '<script>alert("Your Account created successfully.")</script>';
    }else{

		echo '<script>alert("Invalid Credentials.")</script>';
    } 
    $conn->close(); 
  }

  if(isset($_GET['loginfailed'])){
	echo '<script>
        alert("WRONG INFORMATION.")
        </script>';
        
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Musify Form</title>
  
  	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-icons.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/login-custom.css">

  </head>
  <body>

    <main class="text-white">
    	<h1 class="h2 text-center pt-3 pb-2"><img height="24rem" width="29rem" src="../assets/img/logo.jpg"> &nbsp Musify</h1>
  	
  		<div class="content row mx-auto" >
  			<div class="img-container p-0 col-md-6 bg-warning" >
  				<img src="../assets/img/man.jpg" >
  			</div>
  			<div class="form-container col-md-6 " >
  				
  				<div onclick="show_login()" class="login-button button-selected">Login</div>
  				<div onclick="show_signup()" class="signup-button">Signup</div>

  				<div class="">

  <!-- LOGIN-->

  					<form class="js-login-form pt-4 p-4" action= "login.php" method="post" >
  						
  						<h2 class="fx-animate-1">Login</h2>
  						<h5 class="fx-animate-3">Please enter your details</h5>
  						<div class="input-group mb-4 fx-animate-1" >
  						<input type="hidden" name="myname">
						<input type="text" Required name="myemail" class="form-control p-3" placeholder="Email" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-envelope"></i></span>
						</div>

						<div class="input-group mb-4 fx-animate-2">
						  <input type="password" Required name="mypass" class="form-control p-3" placeholder="Password" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-key"></i></span>
						</div>
						
						<div class="mb-4 fx-animate-3">
							<button name="logbtn" class="btn btn-lg btn-outline-warning">Login</button>
						</div>
						<div class="mb-4 fx-animate-5">
							<a class="text-warning" href="../forms/forget.php">Forgot password?</a> or <a onclick="show_signup()" class="text-warning" href="#">Signup</a>
						</div>

						<hr>
						<div>
							Follow us:
							<div class="d-flex">
								<div class="me-2 fx-animate-4"><a href=""><i class="h3 text-white bi bi-facebook"></i></a></div>
								<div class="me-2 fx-animate-5"><a href=""><i class="h3 text-white bi bi-twitter"></i></a></div>
								<div class="me-2 fx-animate-6"><a href=""><i class="h3 text-white bi bi-instagram"></i></a></div>
							</div>

						</div>

  					</form>



  	<!-- SIGN-UP -->

  					<form class="js-signup-form hide pt-4 p-4" action= "" method="post" >
  						
  						<h2 class="fx-animate-1">Signup</h2>
  						<h5 class="fx-animate-3">Create an account</h5>
  						
  						<div class="input-group mb-3 fx-animate-1" >
						  <input type="text" Required name="firstname" class="form-control p-2" placeholder="Frist Name" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-person"></i></span>
						</div>

						<div class="input-group mb-3 fx-animate-2">
						  <input type="text" Required name="lastname" class="form-control p-2" placeholder="Last Name" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-person-fill"></i></span>
						</div>

						<div class="input-group mb-3 fx-animate-4" >
						  <input type="text" Required name="email" class="form-control p-2" placeholder="Email" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-envelope"></i></span>
						</div>

						<div class="input-group mb-3 fx-animate-5">
						  <input type="password" Required name="password" class="form-control p-2" placeholder="Password" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-key"></i></span>
						</div>
						
						<div class="mb-3 fx-animate-3">
							<button name="submit" class="btn btn-lg btn-outline-warning">Create account</button>
						</div>
						<div class="mb-3 fx-animate-5">
							<a class="text-warning" href="../forms/forget.php">Forgot password?</a> or <a onclick="show_login()" class="text-warning" href="#">Login</a>
						</div>

						<hr>
						<div>
							Follow us:
							<div class="d-flex">
								<div class="me-2 fx-animate-4"><a href=""><i class="h3 text-white bi bi-facebook"></i></a></div>
								<div class="me-2 fx-animate-5"><a href=""><i class="h3 text-white bi bi-twitter"></i></a></div>
								<div class="me-2 fx-animate-6"><a href=""><i class="h3 text-white bi bi-instagram"></i></a></div>
							</div>

						</div>

  					</form>
  					
  				</div>
  			</div>
  		</div>
    	
    </main>

  </body>

  <script>

	
  	
  	function show_login()
  	{
  		document.querySelector(".js-signup-form").classList.add("hide");
  		document.querySelector(".js-login-form").classList.remove("hide");

  		document.querySelector(".login-button").classList.add("button-selected");
  		document.querySelector(".signup-button").classList.remove("button-selected");
  		
  	}

  	function show_signup()
  	{
  		document.querySelector(".js-login-form").classList.add("hide");
  		document.querySelector(".js-signup-form").classList.remove("hide");

  		document.querySelector(".signup-button").classList.add("button-selected");
  		document.querySelector(".login-button").classList.remove("button-selected");
  	}

  </script>
</html>
