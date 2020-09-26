<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title>Foodeiblog | Template</title>
		<meta name="description" content="Foodeiblog Template">
		<meta name="keywords" content="Foodeiblog, unica, creative, html">
		<?php require_once('head.php')  ?>
	</head>
	<body>
		<!-- Page loader -->
		<div id="preloder">
			<div class="loader"></div>
		</div>
		<!-- End Page loader -->
		<?php require_once('humberger-menu.php') ?>
		<?php require_once('header.php') ?>

		<section class="typography spad">
			<div class="container">
				<div class="typography__text">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="breadcrumb__text">
								<h2>Disclaimer</h2>
								<div class="breadcrumb__option">
									<a href="./index.php">Home</a>
									<span>Disclaimer</span>
								</div>
							</div>
							<div class="typography__top__text">
								
								<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
								<ul>
									<li>limit or exclude our or your liability for death or personal injury;
									<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>

									<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>

									<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
								</ul>
								
								<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

								<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="sidebar__item">
								<div class="sidebar__about__item">
									<div class="sidebar__item__title">
										<h6>About me</h6>
									</div>
									<img src="img/sidebar/sidebar-about.jpg" alt="">
									<h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.
									</p>
									<a href="#" class="primary-btn">Read more</a>
								</div>
								<div class="sidebar__follow__item">
									<div class="sidebar__item__title">
										<h6>Follow me</h6>
									</div>
									<div class="sidebar__item__follow__links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-youtube-play"></i></a>
										<a href="#"><i class="fa fa-instagram"></i></a>
										<a href="#"><i class="fa fa-envelope-o"></i></a>
									</div>
								</div>
								<div class="sidebar__feature__item">
									<div class="sidebar__item__title">
										<h6>Feature Posts</h6>
									</div>
									<div class="sidebar__feature__item__large set-bg" data-setbg="img/sidebar/feature-post.jpg">
										<div class="sidebar__feature__item__large--text">
											<span>Dinner</span>
											<h5><a href="#">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
										</div>
									</div>
									<div class="sidebar__feature__item__list">
										<div class="sidebar__feature__item__list__single">
											<div class="post__meta">
												<h4>08</h4>
												<span>Aug</span>
											</div>
											<div class="post__text">
												<span>Dinner</span>
												<h5><a href="#">Grilled Potato and Green Bean Salad</a></h5>
											</div>
										</div>
										<div class="sidebar__feature__item__list__single">
											<div class="post__meta">
												<h4>05</h4>
												<span>Aug</span>
											</div>
											<div class="post__text">
												<span>Smoothie</span>
												<h5><a href="#">The $8 French Rosé I Buy in Bulk Every Summer</a></h5>
											</div>
										</div>
										<div class="sidebar__feature__item__list__single">
											<div class="post__meta">
												<h4>26</h4>
												<span>jul</span>
											</div>
											<div class="post__text">
												<span>Desert</span>
												<h5><a href="#">Ina Garten's Skillet-Roasted Lemon Chicken</a></h5>
											</div>
										</div>
										<div class="sidebar__feature__item__list__single">
											<div class="post__meta">
												<h4>16</h4>
												<span>jul</span>
											</div>
											<div class="post__text">
												<span>Vegan</span>
												<h5><a href="#">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h5>
											</div>
										</div>
									</div>
								</div>
								<div class="sidebar__item__banner">
									<img src="img/sidebar/banner.jpg" alt="">
								</div>
								<div class="sidebar__item__categories">
									<div class="sidebar__item__title">
										<h6>Categories</h6>
									</div>
									<ul>
										<li><a href="#">Recipes <span>128</span></a></li>
										<li><a href="#">Dinner <span>32</span></a></li>
										<li><a href="#">Dessert <span>86</span></a></li>
										<li class="p-left"><a href="#">Smothie <span>25</span></a></li>
										<li class="p-left"><a href="#">Drinks <span>36</span></a></li>
										<li class="p-left"><a href="#">Cakes <span>15</span></a></li>
										<li><a href="#">Vegan <span>63</span></a></li>
										<li><a href="#">Weightloss <span>27</span></a></li>
									</ul>
								</div>
								<div class="sidebar__subscribe__item">
									<div class="sidebar__item__title">
										<h6>Subscribe</h6>
									</div>
									<p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
									<form action="#">
										<input type="text" class="email-input" placeholder="Your email">
										<label for="s-agree-check">
										I agree to the terms & conditions
										<input type="checkbox" id="s-agree-check">
										<span class="checkmark"></span>
										</label>
										<button type="submit" class="site-btn">Subscribe</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php require_once('footer.php') ?>
		<script type="text/javascript">
			document.getElementById('home').classList.remove('active');
			document.getElementById('recipes').classList.remove('active');
			document.getElementById('breakfast').classList.remove('active');
			document.getElementById('snacks').classList.remove('active');
			document.getElementById('about').classList.remove('active');
			document.getElementById('contact').classList.remove('active');
		</script>
	</body>
</html>