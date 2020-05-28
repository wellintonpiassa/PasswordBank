
<?php require('templates/header.php'); ?>

	<!--This piece of script here will let the user know if he has made some mistake when filling the register form by showing some specfic massages -->
	<?php  	

		$empty = '';
		$usernameError  = '';
		$emailError = '';
		$pwdError = '';

		$username = '';
		$email = '';


		function fillFields(){

			global $username;

			if(isset($_GET['username']))
				$username = htmlspecialchars($_GET['username']);

			global $email;

			if(isset($_GET['email']))
				$email = htmlspecialchars($_GET['email']);
		}

		if(isset($_GET['error'])){

					
			if($_GET['error'] == "emptyfields"){ 	

				$empty = 'Fill in all fields.';

				fillFields();
					
			}else if($_GET['error'] == "invalidemailandusername"){ 

				$usernameError = 'Enter a valid username.';

				$emailError = 'Enter a valid e-mail.';

				fillFields();

			}else if($_GET['error'] == "invalidemail"){

				$emailError = 'Enter a valid e-mail.';

				fillFields();

			}else if($_GET['error'] == "invalidusername"){

				$usernameError = 'Enter a valid username.';

				fillFields();

			}else if($_GET['error'] == "differentpasswords"){

				$pwdError = "Passwords don't match.";

				fillFields();

			}else if($_GET['error'] == "usernamealreadytaken"){

				$usernameError = 'Username already taken.';

				fillFields();
					
			}else if($_GET['error'] == "emailalreadytaken"){

				$emailError = 'E-mail already taken.';

				fillFields();
					
			}  
		}		
	?>	

	<main>
		<div>

			<?php if(!isset($_GET['success'])): ?>

				<div class="container-fluid">
					<div class="title">
						<h2>Now you are only a few steps from keeping all your passwords safe!</h2>
						<h4>Create your account</h4>	
					</div>


					<div class="forms">
						<form action="scripts/sign-up-script.php" method="POST">

							<div><?php echo $empty; ?></div>

							<label for="username"></label>
							<input type="text" name="Username" placeholder=" Username" id="username" value="<?php echo $username; ?>">
							<div><?php echo $usernameError; ?></div>

							<label for="Email"></label>
							<input type="text" name="email" placeholder=" Email" id="Email" value="<?php echo $email; ?>">
							<div><?php echo $emailError; ?></div>

							<label for="pwd"></label>
							<input type="password" placeholder="Password" name="password" id="pwd">
							<div></div>

							<label for="pwd-2"></label>
							<input type="password" placeholder=" Confirm password" name="password-2" id="pwd-2">
							<div><?php echo $pwdError; ?></div>

							<div class="check">
								<input type="checkbox" name="cBox" >
								<label for="cBox">  
									By clicking, you agree to our Terms of Use and Privacy Policy. 
								</label>
							</div>						
							
							<div></div>

							<input class="submit" type="submit" name="submit" value="Sign up">
								
							<p>Already have an account?<a href="sign-in.php"> Sign in</a></p>
						</form>
					</div>
				</div>

			<?php else: ?>

				<div>
					<h2>Now you are only a few steps from keeping all your passwords safe!</h2>

					<h3>Congratulations, you have successfully registered at the website! </h3>
				</div>

				<div>
					<a href="index.php">Go back</a>
				</div>

			<?php endif; ?>
		</div>
	</main>
		
<?php require('templates/footer.php'); ?>

