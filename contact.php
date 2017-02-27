<!DOCTYPE html>
<?php
  $menu = file_get_contents('menu_contact.php',TRUE);
  $switcher = file_get_contents('switcher.php',TRUE);
  $footer = file_get_contents('footer.php',TRUE);
  $ourclient = file_get_contents('ourclient.php',TRUE);
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Our Contacts | Unify - Responsive Website Template</title>

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
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-default.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css"><![endif]-->

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/page_contact.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<a class="logo" href="index.html">
					<img src="assets/img/logo1-default.png" alt="Logo">
				</a>
				<!-- End Logo -->

				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">
						<li class="hoverSelector">
							<i class="fa fa-globe"></i>
							<a>Languages</a>
							<ul class="languages hoverSelectorBlock">
								<li class="active">
									<a href="#">English <i class="fa fa-check"></i></a>
								</li>
								<li><a href="#">Spanish</a></li>
								<li><a href="#">Russian</a></li>
								<li><a href="#">German</a></li>
							</ul>
						</li>
						<li class="topbar-devider"></li>
						<li><a href="page_faq.html">Help</a></li>
						<li class="topbar-devider"></li>
						<li><a href="page_login.html">Login</a></li>
					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="header-v6 header-white-transparent header-sticky">
                            <?php echo $menu; ?>
                        </div>
			<!--/navbar-collapse-->
		</div>
		<!--=== End Header ===-->

		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">ที่อยู่บริษัท</h1>
				<ul class="pull-right breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="">Pages</a></li>
					<li class="active">Contacts</li>
				</ul>
			</div>
		</div><!--/breadcrumbs-->
		<!--=== End Breadcrumbs ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<!-- Google Map -->
					<div id="map" class="map map-box map-box-space margin-bottom-40"></div>
					<!-- End Google Map -->

					<p>มีข้อสงสัย สอบถาม ข้อร้องเรียน ส่งคำถาม ข้อร้องเรียน มาหาเรา เราจะตอบ ท่านโดยเร็วที่สุด ข้อร้องเรียน เราจะนำมาปรับปรุงบริการของเรา ให้ดียิ่งขึ้น</p><br />

					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Name <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="email" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Message <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u" id="btnEmail">ส่ง email</button></p>
						</fieldset>

						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Your message was successfully sent!</p>
						</div>
					</form>
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>ติดต่อ</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>info@tavon.co.th</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>66(94) 851 7557</a></li>
						<li><a href="#"><i class="fa fa-globe"></i>http://www.tavon.co.th</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>เวลาทำงาน</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>วันจันทร์-วันศุกร์:</strong> 10am to 8pm</li>
						<li><strong>วันเสาร์:</strong> 11am to 3pm</li>
						<li><strong>วันอาทิตย์:</strong> หยุด</li>
					</ul>

					<!-- Why we are? -->
					<div class="headline"><h2>Why we are?</h2></div>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
						<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
						<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
					</ul>
				</div><!--/col-md-3-->
			</div><!--/row-->

			<!-- Owl Clients v1 -->
			<?php echo $ourclient; ?>
			<!-- End Owl Clients v1 -->
		</div><!--/container-->
		<!--=== End Content Part ===-->
                
		<!--=== Footer Version 1 ===-->
		<?php echo $footer; ?>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->
        <div id="divView"></div>
	<!--=== Style Switcher ===-->
        <?php echo $switcher; ?>
	<!--/style-switcher-->
	<!--=== End Style Switcher ===-->

	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/back-to-top.js"></script>
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCDSb3wORiw36c9kGhpSVqjkTYtJpVp4l4&callback=initMap" async defer></script>
	<!-- JS Customization -->
	<script src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/forms/login.js"></script>
	<script src="assets/js/forms/contact.js"></script>
	<script src="assets/js/plugins/google-map.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
	<script src="assets/js/plugins/style-switcher.js"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
                        $("#btnEmail").click(sendEmail);
		});

		// Google Map
		function initMap() {
			GoogleMap.initGoogleMap();
		}
                function sendEmail(){
                    alert("1111");
                    //location.href = 'gmail.php';
                    $("#divView").load("gmail.php", {host_id : "aa",flagpage : "staff_view"}, function() {});
                    
                }
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
	<![endif]-->
	<!--[if lt IE 10]>
	<script src="assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
</body>
</html>
