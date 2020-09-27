<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title>About Foodeiblog | Food Recipes</title>
		<meta name="description" content="Foodeiblog is a collection of food recipes from across the country. These recipes will help make cooking easy. Come explore the recipes.">
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
		<section class="about spad">
			<div class="container">
				<div class="about__text">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb__text">
								<h2>About me</h2>
								<div class="breadcrumb__option">
									<a href="./index.php" hreflang="en-us">Home</a>
									<span>About</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="about__pic__item__large">
								<img src="img/categories/categories-post/cp-6.jpg" alt="">
							</div>
							<div class="about__pic">
							<div class="about__pic__item">
								<img src="img/categories/categories-post/cp-5.jpg" alt="">
							</div>
							<div class="about__pic__item">
								<img src="img/categories/categories-post/cp-7.jpg" alt="">
							</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about__right__text">
								<h2>Hello every one !!!</h2>
								<p>A collection of food recipes from across the country. These recipes will help make cooking easy. Come explore the recipes.</p>

								<p>Explore the best of cooking with these top-rated recipes for manchurian, dosa, paratha and more flavorful faves.</p>


								<p>Foodeiblog is your home for all type of Recipes and delicious Cooking. Read foodeiblog teach mouthwatering manchurian, dosa, paratha and many more, easy to make for all ages.</p>


								<p>Foodeiblog is here to teach you simple and practical recipes that carry out the all type of cooking.</p>

								<p>For new cooks and cooks new to cooking, the combination of written recipes will make it easier for you to understand the fundamentals in cooking dishes. And even experienced chefs will pick up new techniques that will make cooking easier and more flavorful. Cooking is not complicated and I will show you creative variations that you can experiment with. Half the fun of cooking is experimenting, so give it a try and make these dishes uniquely your own!</p>
								<div class="about__right__text__social">
									<a href="#" hreflang="en-us"><i class="fa fa-facebook"></i></a>
									<a href="#" hreflang="en-us"><i class="fa fa-twitter"></i></a>
									<a href="#" hreflang="en-us"><i class="fa fa-youtube-play"></i></a>
									<a href="#" hreflang="en-us"><i class="fa fa-instagram"></i></a>
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
			document.getElementById('about').classList.add('active');
			document.getElementById('contact').classList.remove('active');
		</script>
	</body>
</html>