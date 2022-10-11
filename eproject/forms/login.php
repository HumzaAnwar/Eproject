<?php

include '../config.php';

session_start();

if(isset($_POST['logbtn'])){

	$name = $_POST['myname'];
	$email = $_POST['myemail'];
	$password = $_POST['mypass'];


	if(empty($email) || empty($password)){ 
		  
	}
   
	else{
		$sql ="SELECT * FROM user WHERE Email='$email' AND Password = '$password'";

	   $result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			$_SESSION ["myname"] = $row["First_name"];
				
			header("Location: ../check.php");
	}
	else{
		
        header("Location: form.php?loginfailed");
        
    }
}
	}
?>