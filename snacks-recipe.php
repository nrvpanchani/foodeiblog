<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title>Foodeiblog | Food Recipes</title>
		<meta name="description" content="Foodeiblog Food Recipes">
		<meta name="keywords" content="Foodeiblog, Food, Recipes, Food Recipes">
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

		<section class="categories categories-grid spad">
			<div class="categories__post">
				<div class="container">
					<div class="categories__grid__post">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<div class="breadcrumb__text">
									<h2>Categories: <span>Snacks Recipe</span></h2>
									<div class="breadcrumb__option">
										<a href="./index.php">Home</a>
										<span>Snacks Recipe</span>
									</div>
								</div>
								<div class="categories__list__post__item">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<a href="./papdi-chaat-recipe.php" title="Papdi Chaat Recipe">
											<div class="categories__post__item__pic set-bg" data-setbg="img/categories/categories-post/cp-8.jpg">
												<div class="post__meta">
													<h4>08</h4>
													<span>Aug</span>
												</div>
											</div>
											</a>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="categories__post__item__text">
												<span class="post__label">French</span>
												<h3><a href="./papdi-chaat-recipe.php">Papdi Chaat Recipe</a></h3>
												<ul class="post__widget">
													<li>by <span>Admin</span></li>
													<li>3 min read</li>
													<li>20 Comment</li>
												</ul>
												<p>Papdi Chaat is One of the most popular recipe from Gujarat, India. Papdi Chaat with step by step recipe for Papdi Chaat
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="categories__list__post__item">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<a href="./dahi-vada-recipe.php" title="Dahi Vada Recipe">
											<div class="categories__post__item__pic set-bg" data-setbg="img/categories/categories-post/cp-7.jpg">
												<div class="post__meta">
													<h4>08</h4>
													<span>Aug</span>
												</div>
											</div>
											</a>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="categories__post__item__text">
												<ul class="post__label--large">
													<li>Gujarati</li>
												</ul>
												<h3><a href="./dahi-vada-recipe.php">Dahi Vada Recipe</a></h3>
												<ul class="post__widget">
													<li>by <span>Admin</span></li>
													<li>3 min read</li>
													<li>20 Comment</li>
												</ul>
												<p>Dahi Vada is One of the most popular recipe from Gujarat, India. Dahi Vada with step by step recipe for Dahi Vada
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="row">
									<div class="col-lg-12">
										<div class="categories__pagination">
											<a href="#">1</a>
											<a href="#">2</a>
											<a href="#">3</a>
											<a href="#">Next</a>
										</div>
									</div>
								</div> -->
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="sidebar__item">
									<div class="sidebar__about__item">
										<div class="sidebar__item__title">
											<h6>About me</h6>
										</div>
										<img src="img/sidebar/sidebar-about.jpg" alt="">
										<h6>Hi every one!</h6>
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
									<div class="sidebar__item__banner">
										<img src="img/sidebar/banner.jpg" alt="">
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
			</div>
		</section>

		<?php require_once('footer.php') ?>
		<script type="text/javascript">
			document.getElementById('home').classList.remove('active');
			document.getElementById('recipes').classList.remove('active');
			document.getElementById('breakfast').classList.remove('active');
			document.getElementById('snacks').classList.add('active');
			document.getElementById('about').classList.remove('active');
			document.getElementById('contact').classList.remove('active');
		</script>
	</body>
</html>