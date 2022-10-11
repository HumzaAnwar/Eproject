<?php

include "../config.php";

include "../header.php";

// if (isset($_POST['forbtn'])) {

//     $pass =$_POST['pass'];
//     $cpass =$_POST['cpass'];

//     if($pass == $cpass){

//         $sql= "UPDATE `user` SET `Password`='' WHERE 1"        
//     }

// }


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password - Musify</title>
  
  	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-icons.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/login-custom.css">

  </head>

  <body>
<br>
    <main class="text-white">
    	<h1 class="h2 text-center pt-3 pb-2"><img height="24rem" width="29rem" src="../assets/img/logo.jpg"> &nbsp Musify</h1>
  	
  		<div class="content row mx-auto" >
  			<div class="img-container p-0 col-md-6 bg-warning" >
  				<img src="../assets/img/man.jpg" >
  			</div>
  			<div class="form-container col-md-6 " >
  		
  				<div class="">

  <!-- Forget Password-->

  					<form class="js-login-form pt-4 p-4" action= "" method="post" >
  						
  						<h2 class="fx-animate-1">Password Reset</h2>
  						<h5 class="fx-animate-3"><br></h5>
                          <div class="input-group mb-4 fx-animate-2">
						  <input type="password" Required name="pass" class="form-control p-3" placeholder="Enter New Password" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-key"></i></span>
						</div>

						<div class="input-group mb-4 fx-animate-2">
						  <input type="password" Required name="cpass" class="form-control p-3" placeholder="Confirm Password" >
						  <span class="input-group-text" id="basic-addon2"><i class="bi bi-key"></i></span>
						</div>
						
						<div class="mb-4 fx-animate-3">
							<button name="forbtn" class="btn btn-lg btn-outline-warning">Save Changes</button>
						</div>
						<div class="mb-4 fx-animate-5">
							<a class="text-warning" href="../forms/form.php">Login Now</a>
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
  </script>
</html>
