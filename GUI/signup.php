	<!-- sign up code-->

	<?php


	$error = false;
	if (isset($_REQUEST['action'])) {
		switch ($_REQUEST['action']) {
			case 'signup':
				require_once "../UserData/UserDetails/SignUp.php";
				$valid = Registration::signup($_POST);
				if ($valid) {
					header('Location: login.php');
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

	<div class="limiter" style="padding: 50px;">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="signup.php?action=signup" method="POST" class="login100-form validate-form" style="background-color: transparent;">
					<span class="login100-form-title p-b-43">
						Sign Up
					</span>
					<br>

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



					<div class="wrap-input100 validate-input">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input">
						<select name="gender" id="gender" style="width: 100%; height: 100%; border-color: transparent;">
							<option value="female" style="margin-left: 10px;" name="female">Female</option>
							<option value="male" style="margin-left: 10px;" name="male">Male</option>
						</select>

					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="date" name="date">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>



					<div class="text-center p-t-46 p-b-20">
						<input class="signUp100-form-btn" type="submit" id="login-btn" value="Sign up" name="submit" />
					</div>

				</form>



				<div class="login100-more" style="background-image: url('images/pencil.png');">
				</div>
			</div>
		</div>
	</div>

	<?php
	require_once('./footer.php');
	?>