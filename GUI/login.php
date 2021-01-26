<?php


$error = false;
if (isset($_REQUEST['action'])) {
	switch ($_REQUEST['action']) {
		case 'login':
			require_once "../UserData/UserDetails/Account.php";
			$valid = Auth::login($_POST);
			if ($valid) {
				header('Location: index.php');
			} else {
				echo "<div class='login100-form validate-form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
			}
		
	}
}

require_once 'header.php';

?>


<!-- login code -->





<div class="limiter" style="padding: 50px; 	font-family: Poppins-Regular, sans-serif;">
	<div class="container-login100">
		<div class="wrap-login100">

			<form action="login.php?action=login" method="POST" class="login100-form validate-form" style="background-color: transparent;" name="login">
				<span class="login100-form-title p-b-43">
					Log In
				</span>
				<br>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<input class="input100" type="email" name="email" placeholder="email" />
					<span class="focus-input100"></span>
					<span class="label-input100">Email</span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<input class="input100" type="password" name="password" placeholder="password" />
					<span class="focus-input100"></span>
					<span class="label-input100">Password</span>
				</div>

				<br>

				<div class="container-login100-form-btn">
					<input class="login100-form-btn" type="submit" value="Login" name="submit" />
				</div>

				<br>
				<p style="text-align: center; margin-bottom: -30px;"> Don't have an account?</p>
				<br>
				<br>
				<a href="signup.php" class="signUp100-form-btn">
					Sign Up
				</a>
			</form>



			<div class="login100-more" style="background-image: url('images/pencil.png');">
			</div>
		</div>
	</div>
</div>




<?php
require_once('footer.php');
?>