<!DOCTYPE html>
<?php
  $menu = file_get_contents('menu_product.php',TRUE);
  $switcher = file_get_contents('../switcher.php',TRUE);
  $footer = file_get_contents('footer_product.php',TRUE);
  $ourclient = file_get_contents('../ourclient.php',TRUE);
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Login Tavon</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/shop.style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v5.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v4.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/log-reg-v3.css">

	<!-- Style Switcher -->
	<link rel="stylesheet" href="assets/css/plugins/style-switcher.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">

	<div class="wrapper">
		<!--=== Header v5 ===-->
		<div class="header-v5 header-static">
			<!-- Topbar v3 -->
			<div class="topbar-v3">
				<div class="search-open">
					<div class="container">
						<input type="text" class="form-control" placeholder="Search">
						<div class="search-close"><i class="icon-close"></i></div>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<!-- Topbar Navigation -->
							<ul class="left-topbar">
								<li>
									<a>Currency (USD)</a>
									<ul class="currency">
										<li class="active">
											<a href="#">USD <i class="fa fa-check"></i></a>
										</li>
										<li><a href="#">Euro</a></li>
										<li><a href="#">Pound</a></li>
									</ul>
								</li>
								<li>
									<a>Language (EN)</a>
									<ul class="language">
										<li class="active">
											<a href="#">English (EN)<i class="fa fa-check"></i></a>
										</li>
										<li><a href="#">Spanish (SPN)</a></li>
										<li><a href="#">Russian (RUS)</a></li>
										<li><a href="#">German (GRM)</a></li>
									</ul>
								</li>
							</ul><!--/end left-topbar-->
						</div>
						<div class="col-sm-6">
							<ul class="list-inline right-topbar pull-right">
								<li><a href="#">Account</a></li>
								<li><a href="shop-ui-add-to-cart.html">Wishlist (0)</a></li>
								<li><a href="shop-ui-login.php">Login</a> | <a href="shop-ui-register.php">Register</a></li>
								<li><i class="search fa fa-search search-button"></i></li>
							</ul>
						</div>
					</div>
				</div><!--/container-->
			</div>
			<!-- End Topbar v3 -->

			<!-- Navbar -->
			<?php echo $menu; ?>
			<!-- End Navbar -->
		</div>
		<!--=== End Header v5 ===-->

		<!--=== Breadcrumbs v4 ===-->
		<div class="breadcrumbs-v4">
			<div class="container">
				<span class="page-name">Log In</span>
				<h1>Maecenas <span class="shop-green">enim</span> sapien</h1>
				<ul class="breadcrumb-v4-in">
					<li><a href="index.html">Home</a></li>
					<li><a href="">Product</a></li>
					<li class="active">Log In</li>
				</ul>
			</div><!--/end container-->
		</div>
		<!--=== End Breadcrumbs v4 ===-->

		<!--=== Login ===-->
		<div class="log-reg-v3 content-md">
			<div class="container">
				<div class="row">
					<div class="col-md-7 md-margin-bottom-50">
						<h2 class="welcome-title">Welcome to Unify</h2>
						<p>Suspendisse et tincidunt ipsum, et dignissim urna. Vestibulum nisl tortor, gravida at magna et, suscipit vehicula massa.</p><br>
						<div class="info-block-v2">
							<i class="icon icon-layers"></i>
							<div class="info-block-in">
								<h3>Pellentesque vulputate</h3>
								<p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
							</div>
						</div>
						<div class="info-block-v2">
							<i class="icon icon-settings"></i>
							<div class="info-block-in">
								<h3>Curabitur tincidunt</h3>
								<p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
							</div>
						</div>
						<div class="info-block-v2">
							<i class="icon icon-paper-plane"></i>
							<div class="info-block-in">
								<h3>Aenean condimentum</h3>
								<p>Vestibulum non ex volutpat, sodales diam sit amet, semper nunc. Integer sed nibh commodo, tincidunt nisi.</p>
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<form id="sky-form1" class="log-reg-block sky-form">
							<h2>Log in to your account</h2>

							<section>
								<label class="input login-input">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="email" placeholder="Email Address" name="email" class="form-control">
									</div>
								</label>
							</section>
							<section>
								<label class="input login-input no-border-top">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" name="password" class="form-control">
									</div>
								</label>
							</section>
							<div class="row margin-bottom-5">
								<div class="col-xs-6">
									<label class="checkbox">
										<input type="checkbox" name="checkbox"/>
										<i></i>
										Remember me
									</label>
								</div>
								<div class="col-xs-6 text-right">
									<a href="#">Forget your Password?</a>
								</div>
							</div>
							<button class="btn-u btn-u-sea-shop btn-block margin-bottom-20" type="submit">Log in</button>

							<div class="border-wings">
								<span>or</span>
							</div>

							<div class="row columns-space-removes">
								<div class="col-lg-6 margin-bottom-10">
									<button type="button" class="btn-u btn-u-md btn-u-fb btn-block"><i class="fa fa-facebook"></i> Facebook Log In</button>
								</div>
								<div class="col-lg-6">
									<button type="button" class="btn-u btn-u-md btn-u-tw btn-block"><i class="fa fa-twitter"></i> Twitter Log In</button>
								</div>
							</div>
						</form>

						<div class="margin-bottom-20"></div>
						<p class="text-center">Don't have account yet? Learn more and <a href="shop-ui-register.html">Sign Up</a></p>
					</div>
				</div><!--/end row-->
			</div><!--/end container-->
		</div>
		<!--=== End Login ===-->

		<!--=== Shop Suvbscribe ===-->
		<div class="shop-subscribe">
			<div class="container">
				<div class="row">
					<div class="col-md-8 md-margin-bottom-20">
						<h2>subscribe to our weekly <strong>newsletter</strong></h2>
					</div>
					<div class="col-md-4">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Email your email...">
							<span class="input-group-btn">
								<button class="btn" type="button"><i class="fa fa-envelope-o"></i></button>
							</span>
						</div>
					</div>
				</div>
			</div><!--/end container-->
		</div>
		<!--=== End Shop Suvbscribe ===-->

		<!--=== Footer v4 ===-->
		<?php echo $footer?>
		<!--=== End Footer v4 ===-->
	</div><!--/wrapper-->

	<!-- Wait Block -->
	<div class="g-popup-wrapper">
		<div class="g-popup g-popup--fb">
			<div class="g-popup--fb-title">
				<a target="_blank" href="https://www.facebook.com/htmlstream" class="g-popup--fb__logo"><img alt="facebook" src="assets/img/others/fb.png" width="110"></a>
				<div class="g-popup--fb-message">Click <strong>"Like"</strong><br>to read our blog on Facebook</div>
			</div>
			<div class="g-popup--fb-widjet">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4&appId=118547268248380";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like" data-href="https://www.facebook.com/htmlstream/" data-width="270" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
			</div>
			<a href="javascript:void(0);" class="g-popup__close g-popup--fb__close"><span class="icon-close" aria-hidden="true"></span></a>
		</div>
	</div>
	<!-- End Wait Block -->

	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/back-to-top.js"></script>
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<!-- JS Customization -->
	<script src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="assets/js/shop.app.js"></script>
	<script src="assets/js/forms/page_login.js"></script>
	<script src="assets/js/plugins/style-switcher.js"></script>
	<script src="assets/js/forms/page_contact_form.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			Login.initLogin();
			App.initScrollBar();
			StyleSwitcher.initStyleSwitcher();
			PageContactForm.initPageContactForm();
		});
	</script>
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
<!--[if lt IE 10]>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->

</body>
</html>
