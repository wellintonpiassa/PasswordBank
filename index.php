<?php require("templates/header.php"); ?>
	
	<main>

		<?php if(isset($_GET['success'])): ?>
			<?php if($_GET['success'] == "signup"): ?>

				<div>Congratulations! You have successfully registered at our website!</div>

			<?php endif; ?>
		<?php endif; ?>

		<div>
			<div>
				<h3>Welcome to PasswordBank!</h3>

				<h4>Here you can record and access your websites passwords easily.</h4>
			</div>

			<div>
				<h2>Features:</h2>

				<ul>
					<li>Passwords easily accessible from every device.</li>
					<li>A secure container for your passwords.</li>
					<li>Free to use.</li>
				</ul>
			</div>
		</div>
	</main>

<?php require("templates/footer.php"); ?>

