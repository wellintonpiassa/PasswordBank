<?php require("templates/header.php"); ?>
	
	<main>

		<?php if(isset($_GET['success'])): ?>
			<?php if($_GET['success'] == "signup"): ?>

				<div>Congratulations! You have successfully registered at our website!</div>

			<?php endif; ?>
		<?php endif; ?>

		<div>
			<div class="box-1">
				<div class="box-1-inside">
					<div class="text-header">
						<h3>Welcome to PasswordBank!</h3>		
					
						<h4>
							Here you can record and access your websites passwords easily, counting on a totally safe and easy system
						</h4>	
					</div>
					
					<div class="carousel slide" data-ride="carousel" id="carousel-site">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="carousel-header">
									<p>The best password manager for your keys</p>
									<i class="fas fa-user-lock"></i>				
								</div>
							</div>

							<div class="carousel-item">
								<div class="carousel-header">
									<p>Teste2</p>
									<i class="fas fa-user-lock"></i>				
								</div>
							</div>

							<div class="carousel-item">
								<div class="carousel-header">
									<p>teste3</p>
									<i class="fas fa-user-lock"></i>				
								</div>
							</div>

						</div>


						<a class="carousel-control-prev" href="#carousel-site" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="sr-only">Anterior</span>
						</a>

						<a class="carousel-control-next" href="#carousel-site" role="button" data-slide="next">
							<span class="carousel-control-next-icon "></span>
							<span class="sr-only">Proximo</span>
						</a>

					</div>	
				</div>
			</div>
			
					
			<div class="box-2 row">
				
				<article class="container col-lg-6 box-2-inside">

					<div class="titles">
						<h1>Stronger security</h1>	
						<p>
							To protect your data, RoboForm uses AES-256 bit encryption with PBKDF2 SHA-256. Support for two factor authentication (2FA) to access your account. The advanced online security and privacy app trusted by more than 12 million users worldwide.
						</p>
					</div>

					<div class="box-2-list">
						<ul>
							<li>
								<i class="fas fa-chevron-right"></i> Teste 1
							</li>

							<li>
								<i class="fas fa-chevron-right"></i> Teste 2
							</li>

							<li>
								<i class="fas fa-chevron-right"></i> Teste 3
							</li>

							<li>
								<i class="fas fa-chevron-right"></i> Teste 4
							</li>

							<li>
								<i class="fas fa-chevron-right"></i> Teste 5
							</li>
							
						</ul>
					</div>

				</article>

				<div class="col-lg-5 d-none d-lg-block d-xl-block">
					<img class="img-fluid" src="../styles/img/seg4.jpg">
				</div>

			</div>


			<section class="row box-3" >

				<h1 class="row">Choose a plan that’s right for you</h1>
				
				<section class="row col-md-12 plans">

					<div class="offset-1 col-lg-2 left-plan pattern">	
						<h4>Free</h4>

						<ul>
							<li><i class="fas fa-check"></i> Online password storage </li>
							<li><i class="fas fa-check"></i> Storage unlimit </li>
							<li><i class="fas fa-times"></i> Desktop Version </li>
							<li><i class="fas fa-times"></i> Mobile password storage </li>
							<li><i class="fas fa-times"></i> Extensions </li>
						</ul>

						<button>
							<a href="sign-up.php">Sign Up!</a>
						</button>

					</div>

					<div class="offset-1 col-lg-4 main-plan pattern">
						<h4>Premium</h4>

						<ul>
							<li><i class="fas fa-check"></i> Online password storage </li>
							<li><i class="fas fa-check"></i> Storage unlimit </li>
							<li><i class="fas fa-check"></i> Desktop Version </li>
							<li><i class="fas fa-check"></i> Mobile password storage </li>
							<li><i class="fas fa-check"></i> Extensions </li>
						</ul>

						<button type="button">
							<a href="#">Buy</a>
						</button>
					</div>

					<div class="offset-1 col-lg-2 right-plan pattern">
						<h4>Standard</h4>

						<ul>
							<li><i class="fas fa-check"></i> Online password storage </li>
							<li><i class="fas fa-check"></i> Storage unlimit </li>
							<li><i class="fas fa-check"></i> Desktop Version </li>
							<li><i class="fas fa-times"></i> Mobile password storage </li>
							<li><i class="fas fa-times"></i> Extensions </li>
						</ul>

						<button type="button">
							<a href="#">Buy</a>
						</button>
					</div>

				</section>
				

			</section>

		</div>
	</main>

<?php require("templates/footer.php"); ?>