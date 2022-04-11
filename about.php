	<?php include_once './fixed/header.php' ?>

	<body>
		<div id="colorlib-page">
			<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
			<aside id="colorlib-aside" role="complementary" class="border js-fullheight">

				<?php include_once './fixed/navbar3.php' ?>

				<?php include_once './fixed/redesocial.php' ?>

			</aside>

			<div id="colorlib-main">

				<div class="colorlib-about">
					<div class="colorlib-narrow-content">
						<div class="row row-bottom-padded-md">
							<div class="col-md-6">
								<?php
								session_start();
								include_once './administrative/connect.php';

								$select_who = "SELECT * FROM `who_we_are`";
								$result_who = mysqli_query($conn, $select_who);
								$dados = mysqli_fetch_assoc($result_who);

								$title = $dados['title'];
								$text = $dados['text'];
								$img = $dados['img'];
								?>
								<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url('./administrative/php/<?= $img ?>');">
								</div>
							</div>
							<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
								<div class="about-desc">
									<span class="heading-meta">Welcome</span>
									<h2 class="colorlib-heading"><?= $title ?></h2>
									<p><?= $text ?></p>
								</div>
								<div class="row padding">
									<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
										<a href="#" class="steps active">
											<p class="icon"><span><i class="icon-check"></i></span></p>
											<h3>We are <br>pasionate</h3>
										</a>
									</div>
									<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
										<a href="#" class="steps">
											<p class="icon"><span><i class="icon-check"></i></span></p>
											<h3>Honest <br>Dependable</h3>
										</a>
									</div>
									<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
										<a href="#" class="steps">
											<p class="icon"><span><i class="icon-check"></i></span></p>
											<h3>Always <br>Improving</h3>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
								<h2 class="colorlib-heading">History</h2>
								<p><?= $text ?></p>
							</div>

							<div class="col-md-8 animate-box" data-animate-effect="fadeInRight">
								<div class="fancy-collapse-panel">
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingOne">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													</a>
												</h4>
											</div>
											<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
												<div class="panel-body">
													<div class="row">
														<div class="col-md-6">
															<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
														</div>
														<div class="col-md-6">
															<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingTwo">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What I do?
													</a>
												</h4>
											</div>
											<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
												<div class="panel-body">
													<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
													<ul>
														<li>Separated they live in Bookmarksgrove right</li>
														<li>Separated they live in Bookmarksgrove right</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="headingThree">
												<h4 class="panel-title">
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My Specialties
													</a>
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												<div class="panel-body">
													<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_bg_1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-skyline"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Projects</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineer"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Employees</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Constructor</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-worker"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">Partners</span>
						</div>
					</div>
				</div>
			</div> -->

				<!-- <div id="get-in-touch" class="colorlib-bg-color">
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
			</div> -->
			</div>
		</div>

		<?php include_once './fixed/footer.php' ?>

	</body>

	</html>