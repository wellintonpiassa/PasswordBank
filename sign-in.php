<?php require('templates/header.php'); ?>
	
	<!--This piece of script here will let the user know if he has made some mistake when trying to sign in by showing some specfic massages -->
	<?php 

		$error = '';

		if(isset($_GET['error'])){

			if($_GET['error'] == 'emptyfields'){

				$error = 'Fill in all fields.';

			}else if($_GET['error'] == 'incorrectuser'|| $_GET['error'] == 'wrongpwd'){

				$error = 'Incorrect username or password.';

			}
		}

	?>
	
	<main>
		<div class="container-fluid">
			<div class="signin-box">
				<h2>Sign in</h2>	
			</div>

			<?php if(isset($_GET['pwdreset']) && $_GET['pwdreset'] === 'success'): ?>
				<p>Your password has been reseted!</p>
			<?php endif; ?>

			<div class="forms">	
					<form action="scripts/sign-in-script.php" method="POST">

						<div><?php echo $error; ?></div>
							
						<label for="Emailuid"></label>
						<input type="text" placeholder="Email" name="emailuid" id="Emailuid">
						<br>
						<label for="pwd"></label>
						<input type="password" placeholder="Password" name="password" id="pwd">
						<br>
						<input class="submit" type="submit" name="submit" value="Sign in">
					</form>

					<div><a href="reset-password.php">Forgot password?</a></div>

					<div>Don't have an account? <a href="sign-up.php">Sign up</a></div>
			</div>
		</div>
	</main>

<?php require('templates/footer.php'); ?>

