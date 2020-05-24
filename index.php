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
			
					


			<h2>Features:</h2>


			<ul>
				<li>Passwords easily accessible from every device.</li>
				<li>A secure container for your passwords.</li>
				<li>Free to use.</li>
			</ul>

		</div>
	</main>

<?php require("templates/footer.php"); ?>

