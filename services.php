	<?php include_once './fixed/header.php' ?>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
		
		<?php include_once './fixed/navbar4.php' ?>

		<?php include_once './fixed/redesocial.php' ?>

		</aside>

		<div id="colorlib-main">
			<div class="colorlib-services">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Services</span>
							<h2 class="colorlib-heading">Here are some of our expertise</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-md">
						<?php 

						// session_start();
						include_once './administrative/connect.php';
						
						$select_service = "SELECT * FROM `service`";
						$result_service = mysqli_query($conn,$select_service);
						while($dados_service = mysqli_fetch_assoc($result_service)){

							$name = $dados_service['name'];
							$description = $dados_service['description'];
							// $img = $dados_service['img'];

							echo"
							
							<div class='col-md-6'>
							<div class='row'>
								<div class='col-md-12'>
									<div class='colorlib-feature animate-box' data-animate-effect='fadeInLeft'>
										<div class='colorlib-icon'>
											<i class='flaticon-worker'></i>
										</div>
										<div class='colorlib-text'>
											<h3>$name</h3>
											<p>$description. </p>
										</div>
									</div>
								</div>
							</div>
						</div>
							
							";
						}
						?>
						<!-- <div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-worker"></i>
										</div>
										<div class="colorlib-text">
											<h3>General Conctructing</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										</div>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-sketch"></i>
										</div>
										<div class="colorlib-text">
											<h3>Pre-Contruction Design</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-engineering"></i>
										</div>
										<div class="colorlib-text">
											<h3>Building &amp; Modeling</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										</div>
									</div>

									<div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="colorlib-icon">
											<i class="flaticon-crane"></i>
										</div>
										<div class="colorlib-text">
											<h3>Construction Management</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- <div class="row">
						<div class="col-md-4">
							<a href="services.php" class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<div class="services-img" style="background-image: url('./administrative/php/$img')"></div>
								<div class="desc">
									<h3>Design &amp; Build</h3>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<div class="services-img" style="background-image: url(images/services-2.jpg)"></div>
								<div class="desc">
									<h3>House Remodeling</h3>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<div class="services-img" style="background-image: url(images/services-3.jpg)"></div>
								<div class="desc">
									<h3>Construction Management</h3>
								</div>
							</a>
						</div>
					</div> -->
					<div class="row">
						<?php 
							include_once './administrative/connect.php';
						
							$select_service1 = "SELECT * FROM `service`";
							$result_service1 = mysqli_query($conn,$select_service1);
							while($dados_service1 = mysqli_fetch_assoc($result_service1)){
	
								$name1 = $dados_service1['name'];
								$img = $dados_service1['img'];
	
								echo"
								<div class='col-md-4'>
									<a href='services.html' class='services-wrap animate-box' data-animate-effect='fadeInRight'>
										<div class='services-img' style='background-image: url(./administrative/php/$img)'>
										</div>
										<div class='desc'>
											<h3>$name1</h3>
										</div>
									</a>
								</div>
								";
							}
						?>
						<!-- <div class="col-md-4">
							<a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<div class="services-img" style="background-image: url(images/services-4.jpg)"></div>
								<div class="desc">
									<h3>Painting &amp; Tiling</h3>
								</div>
							</a>
						</div> -->
						<!-- <div class="col-md-4">
							<a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<div class="services-img" style="background-image: url(images/services-5.jpg)"></div>
								<div class="desc">
									<h3>Kitchen Remodeling</h3>
								</div>
							</a>
						</div> -->
					</div>
				</div>
			</div>

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p><a href="contact.php" class="btn btn-primary btn-learn">Contact me!</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include_once './fixed/footer.php' ?>

	</body>
</html>

