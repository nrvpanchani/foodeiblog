<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<head>
		<title>Foodeiblog | Foodblog</title>
		<meta name="description" content="Foodeiblog Foodblog">
		<meta name="keywords" content="Foodeiblog, Foodblog">
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

		<section class="contact spad">
			<div class="container">
				<div class="contact__text">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb__text">
								<h2>Contact</h2>
								<div class="breadcrumb__option">
									<a hreflang="en-us" href="./index.php">Home</a>
									<span>Contact</span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="contact__widget">
								<ul>
									<li>
										<i class="fa fa-map-marker"></i>
										<span>Surat, GJ, IN.</span>
									</li>
									<li>
										<i class="fa fa-envelope-o"></i>
										<span>Email: <a hreflang="en-us" href="mailto:infinitystudioapp@gmail.com" class="__cf_email__">infinitystudioapp@gmail.com</a></span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="contact__form">
								<div class="contact__form__title">
									<h2>gET IN TOUCH</h2>
								</div>
								<form action="#">
									<input type="text" placeholder="Name">
									<input type="text" placeholder="Email">
									<input type="text" placeholder="Website">
									<textarea placeholder="Message"></textarea>
									<button type="submit" class="site-btn">Submit</button>
								</form>
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
			document.getElementById('contact').classList.add('active');
		</script>
	</body>
</html>