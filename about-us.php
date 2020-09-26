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
		<section class="about spad">
			<div class="container">
				<div class="about__text">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb__text">
								<h2>About me</h2>
								<div class="breadcrumb__option">
									<a href="./index.php">Home</a>
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
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore
								magna aliqua accusantium doloremque laudantium.</p>
								<ul>
									<li>Class aptent taciti sociosqu ad litora torquent per conubia nostra</li>
									<li>Inceptos himenaeos mauris.Integer gravida tincidunt accumsan.</li>
									<li>Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi.</li>
									<li>In vitae tempor velit of the impenetrable foliage.</li>
								</ul>
								<p>Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula
								finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus
								aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed
								arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim
								laoreet.</p>
								<div class="about__right__text__social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-youtube-play"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
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