<?php session_start(); ?>

<!DOCTYPE html>
<html>

	<head>

		<!--- Metas --->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="	sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<!-- Font Awesome -->
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    	<!--Styles-->
    	<link rel="stylesheet" type="text/css" href="../styles/header.css">
    	<link rel="stylesheet" type="text/css" href="../styles/footer.css">
    	<link rel="stylesheet" type="text/css" href="../styles/pages.css">
    	<link rel="stylesheet" type="text/css" href="../styles/index.css">
    	
		<!---Favicon and title--->
		<link rel="shortcut icon" href="../styles/img/Logo.png"/>
		<title>PasswordBank</title>

	</head>

	<body>

		<header>
			<nav class="navbar navbar-expand-md fundo">
				<div class="container-fluid">
					<div class ="logo nav-brand">
						<img src="../styles/img/Logo.png">
						<a href="index.php"><h1>PasswordBank</h1></a>			
					</div>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
						<span><i class="fas fa-bars text-white"></i></span>
					</button>

		            <?php if(!isset($_SESSION['username'])): ?>
						
					<div class="collapse navbar-collapse" id="navigation">
						<ul class="navbar-nav ml-auto">
							
							<li class="nav-item"><a class="nav-link" href="index.php">The idea</a></li>

							<li class="nav-item"><a class="nav-link" href="sign-in.php">Sign in</a></li>

							<li class="nav-item divisor"></li>

							<li class="nav-item bold"><a class="nav-link" href="sign-up.php">Sign up</a></li>

						</ul>
					</div>	
				</div>
			</nav>

			<?php else: ?>

				<nav>
					<ul>
						<li>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="index.php">The idea</a></li>
						<li><a href="home.php">Home</a></li>
					</ul>
				</nav>

				<form action="scripts/sign-out-script.php" method="POST">
					<input type="submit" name="signout" value="Sign out">
				</form>

			<?php endif; ?>

		</header>