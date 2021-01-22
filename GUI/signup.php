<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image//png" href="images/pencil.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style type="text/css">
	.signUp100-form-btn:hover{
		background-color: blue;
	}
</style>
</head>
<body>


	<!-- sign up code-->

	<?php
    require_once('../UserData/UserDetails/SignUp.php');
?>



	<div class="topnav" id="myTopnav">
  <a href="login.php" class="active">Log In</a>
  </a>
  <a href="index.php"> <img src="images/pencil.png" width="60" height="60" style="border-radius: 50%; margin: 9px; margin-left: 20px;"></a>
</div>
</div>
	<div class="limiter" style="padding: 50px;">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" style="background-color: transparent;" method="POST">
					<span class="login100-form-title p-b-43">
						Sign Up
					</span>
					
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="lastname">
						<span class="focus-input100"></span>
						<span class="label-input100">Last Name</span>
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input">
						<select name="gender" id="gender" style="width: 100%; height: 100%; border-color: transparent;">
					    <option value="female" style="margin-left: 10px;" name ="female">Female</option>
					    <option value="male"style="margin-left: 10px;" name = "male">Male</option>
					</select>
						
					</div>
					
					<div class="wrap-input100 validate-input">
						<input class="input100" type="date" name="date">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
					
					

					<div class="text-center p-t-46 p-b-20">
						<button class="signUp100-form-btn">
							Register
						</button>
					</div>

				</form>

			

				<div class="login100-more" style="background-image: url('images/pencil.png');">
				</div>
			</div>
		</div>
	</div>
	
	

	<footer style="text-align: center; font-family: arial; margin-top: 100px;color:#808080;border-top: 1px solid black; border-color: lightgrey; font-size: 14px; ">
		<p id="footer" style="margin-top: 10px;">
			© All rights reserved. January, 2021
		</p>
	</footer>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>