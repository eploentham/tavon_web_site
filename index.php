<!DOCTYPE html>
<?php
  $menu = file_get_contents('menu.php',TRUE);
  $switcher = file_get_contents('switcher.php',TRUE);
  $footer = file_get_contents('footer.php',TRUE);
  $ourclient = file_get_contents('ourclient.php',TRUE);
?>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Tavon</title>

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
    <link rel="stylesheet" href="assets/css/headers/header-v6.css">
    <link rel="stylesheet" href="assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
    <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
    <link rel="stylesheet" href="assets/css/theme-skins/dark.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed">
    <div class="wrapper">
            <!--=== Header v6 ===-->
            <div class="header-v6 header-white-transparent header-sticky">
                <?php echo $menu; ?>
            </div>
            <!--=== End Header v6 ===-->

            <!-- Interactive Slider v2 -->
            <div class="interactive-slider-v2 img-v4">
                    <div class="container">
                            <h1>กรีนพลัส</h1>
                            <p>เป็นที่ยอมรับของผู้ที่ต้องการบริโภคสินค้าและ ผู้ที่ต้องการเป็นเจ้าของธุรกิจหยอดเหรียญทั้งในและต่างประเทศ </p>
                    </div>
            </div>
            <!-- End Interactive Slider v2 -->

            <!--=== Content ===-->
            <div class="content-md">
                    <div class="container">
                            <!-- Service Box -->
                            <div class="row text-center margin-bottom-60">
                                    <div class="col-md-4 md-margin-bottom-50">
                                            <img class="image-md margin-bottom-20" src="assets/img/icons/flat/01.png" alt="">
                                            <h1 class="title-v3-md margin-bottom-10">สินค้าดี คุณภาพสูง</h1>
                                            <p>วัสดุ อุปกรณ์ เราเลือกใช้วัสดุเกรดดี ...</p>
                                    </div>
                                    <div class="col-md-4 flat-service md-margin-bottom-50">
                                            <img class="image-md margin-bottom-20" src="assets/img/icons/flat/02.png" alt="">
                                            <h2 class="title-v3-md margin-bottom-10">บริการหลังการขาย</h2>
                                            <p>บริษัทก่อตั้งมา 10 กว่าปี มี ทีมงานมืออาชีพ พร้อมให้บริการด้วยใจ...</p>
                                    </div>
                                    <div class="col-md-4 flat-service">
                                            <img class="image-md margin-bottom-20" src="assets/img/icons/flat/03.png" alt="">
                                            <h2 class="title-v3-md margin-bottom-10">อุปกรณ์ทันสมัย ใส่เหรียญได้ทุกขนาด</h2>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cur modo, tortor mauris con</p>
                                    </div>
                            </div>
                            <!-- End Service Box -->
                    </div><!--/container -->

                    <div class="bg-color-light">
                            <div class="container content-sm">
                                    <div class="row">
                                            <div class="col-md-6 md-margin-bottom-50">
                                                    <img class="img-responsive" src="assets/img/mockup/cooler1.png" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                    <br><br><br>
                                                    <div class="headline-left margin-bottom-30">
                                                            <h2 class="headline-brd">เราเป็นผู้เชี่ยวชาญ ธุรกิจระบบหยอดเหรียญ</h2>
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                                    </div>
                                                    <ul class="list-unstyled lists-v2 margin-bottom-30">
                                                            <li><i class="fa fa-check"></i> Suspendisse eget augue non dolor ultrices</li>
                                                            <li><i class="fa fa-check"></i> Donec eget aliquet tortor, quis lacinia dolor</li>
                                                            <li><i class="fa fa-check"></i> Curabitur ut augue at mi eleifend lobortis</li>
                                                            <li><i class="fa fa-check"></i> Eleifend eget aliquet tortor, quis lacinia dolor</li>
                                                    </ul>
                                                    <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Learn More</a>
                                            </div><!--/end row-->
                                    </div>
                            </div>
                    </div>
                    <div class="container content-sm">
                            <div class="headline-center margin-bottom-60">
                                    <h2>Recent Works</h2>
                                    <p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p>
                            </div><!--/end Headline Center-->

                            <!-- Portfolio Box -->
                            <ul class="list-unstyled row portfolio-box">
                                    <li class="col-sm-4 md-margin-bottom-50">
                                            <a class="thumbnail fancybox" data-rel="gallery" title="Project One" href="assets/img/main/img9.jpg">
                                                    <img class="full-width img-responsive" src="assets/img/main/img9.jpg" alt="">
                                                    <span class="portfolio-box-in rounded-x">
                                                            <i class="icon-magnifier-add"></i>
                                                    </span>
                                            </a>
                                            <div class="headline-left margin-bottom-10"><h3 class="headline-brd">Project One</h3></div>
                                            <small class="project-tag"><i class="fa fa-tag"></i><a href="#">Technology</a>, <a href="#">Business</a></small>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet </p>
                                    </li>
                                    <li class="col-sm-4 md-margin-bottom-50">
                                            <a class="thumbnail fancybox" data-rel="gallery" title="Project Two" href="assets/img/main/img22.jpg">
                                                    <img class="full-width img-responsive" src="assets/img/main/img22.jpg" alt="">
                                                    <span class="portfolio-box-in rounded-x">
                                                            <i class="icon-magnifier-add"></i>
                                                    </span>
                                            </a>
                                            <div class="headline-left margin-bottom-10"><h3 class="headline-brd">Project Two</h3></div>
                                            <small class="project-tag"><i class="fa fa-tag"></i><a href="#">Technology</a>, <a href="#">Business</a></small>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet </p>
                                    </li>
                                    <li class="col-sm-4">
                                            <a class="thumbnail fancybox" data-rel="gallery" title="Project Three" href="assets/img/main/img18.jpg">
                                                    <img class="full-width img-responsive" src="assets/img/main/img18.jpg" alt="">
                                                    <span class="portfolio-box-in rounded-x">
                                                            <i class="icon-magnifier-add"></i>
                                                    </span>
                                            </a>
                                            <div class="headline-left margin-bottom-10"><h3 class="headline-brd">Project Three</h3></div>
                                            <small class="project-tag"><i class="fa fa-tag"></i><a href="#">Technology</a>, <a href="#">Business</a></small>
                                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet </p>
                                    </li>
                            </ul>
                            <!-- End Portfolio Box -->
                    </div><!--/end container-->

                    <!-- Flat Background Block -->
                    <div class="flat-bg-block-v1 parallaxBg1 margin-bottom-60">
                            <div class="container">
                                    <div class="row">
                                            <div class="col-md-7 md-margin-bottom-60">
                                                    <div class="headline-left margin-bottom-20">
                                                            <h2 class="headline-brd">Unify is Fully Responsive</h2>
                                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas moles</p>
                                                    </div><!--/end Headline Left-->

                                                    <div class="row">
                                                            <div class="col-sm-5">
                                                                    <ul class="list-unstyled checked-list">
                                                                            <li><i class="fa fa-check"></i> Donec id elit non mi porta gravida</li>
                                                                            <li><i class="fa fa-check"></i> Corporate and Creative</li>
                                                                            <li><i class="fa fa-check"></i> Responsive Bootstrap Template</li>
                                                                            <li><i class="fa fa-check"></i> Corporate and Creative</li>
                                                                    </ul>
                                                            </div>
                                                            <div class="col-sm-5 col-sm-offset-1">
                                                                    <ul class="list-unstyled checked-list">
                                                                            <li><i class="fa fa-check"></i> Donec id elit non mi porta gravida</li>
                                                                            <li><i class="fa fa-check"></i> Corporate and Creative</li>
                                                                            <li><i class="fa fa-check"></i> Responsive Bootstrap Template</li>
                                                                            <li><i class="fa fa-check"></i> Corporate and Creative</li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                            </div>
                                            <div class="col-md-5">
                                                    <img class="img-over img-responsive" src="assets/img/mockup/2.png" alt="">
                                            </div>
                                    </div>
                            </div><!--/end container-->
                    </div>
                    <!-- End Flat Background Block -->

                    <div class="container">
                            <div class="headline-left margin-bottom-40">
                                    <h2 class="headline-brd">Latest Shots</h2>
                            </div><!--/end Headline Left-->

                            <div class="row margin-bottom-60">
                                    <div class="col-sm-6">
                                            <!-- Owl Carousel v5 -->
                                            <div class="owl-carousel-v5">
                                                    <div class="owl-slider-v5">
                                                            <div class="item">
                                                                    <img class="full-width img-responsive" src="assets/img/main/img12.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                    <img class="full-width img-responsive" src="assets/img/main/img16.jpg" alt="">
                                                            </div>
                                                            <div class="item">
                                                                    <img class="full-width img-responsive" src="assets/img/main/img22.jpg" alt="">
                                                            </div>
                                                    </div>
                                            </div>
                                            <!-- End Owl Carousel v5 -->
                                    </div>
                                    <div class="col-sm-6">
                                            <h3>Justo cras odio apibus ac afilisi</h3><br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta ipsum vel mi gravida mattis. Ut sit amet laoreet diam. Fusce iaculis sollicitudin purus, in tristique urna. Suspendisse potenti. Fusce non sem efficitur leo fermentum porttitor ut vitae orci. Aliquam erat volutpat.</p><br>
                                            <p>Sed consectetur blandit ornare. Etiam at ante est. Nunc sed luctus ipsum, eu tincidunt justo. Sed id venenatis tellus. Mauris a cursus dolor. Maecenas sed magna non est interdum sollicitudin eget vitae ex. Ut eget lacus lorem.</p><br>
                                            <button type="button" class="btn-u text-uppercase">View More</button>
                                    </div>
                            </div><!--/end row-->
                    </div><!--/end container-->

                    <!-- Flat Testimonials -->
                    <div class="flat-testimonials bg-image-v1 parallaxBg margin-bottom-60">
                            <div class="container">
                                    <div class="headline-center headline-light margin-bottom-60">
                                            <h2>What People Are Saying</h2>
                                            <p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p>
                                    </div><!--/end Headline Center-->

                                    <div class="row">
                                            <div class="col-sm-4">
                                                    <div class="flat-testimonials-in md-margin-bottom-50">
                                                            <img class="rounded-x img-responsive" src="assets/img/team/img1-sm.jpg" alt="">
                                                            <h3>Anthony Connor</h3>
                                                            <span class="color-green">Software Developer</span>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis, magna id sem ipsum mi interduml</p>
                                                    </div>
                                            </div>
                                            <div class="col-sm-4">
                                                    <div class="flat-testimonials-in md-margin-bottom-50">
                                                            <img class="rounded-x img-responsive" src="assets/img/team/img2-sm.jpg" alt="">
                                                            <h3>Angela Danil</h3>
                                                            <span class="color-green">Web Designer</span>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis, magna id sem ipsum mi interduml</p>
                                                    </div>
                                            </div>
                                            <div class="col-sm-4">
                                                    <div class="flat-testimonials-in">
                                                            <img class="rounded-x img-responsive" src="assets/img/team/img3-sm.jpg" alt="">
                                                            <h3>Anthony Connor</h3>
                                                            <span class="color-green">Software Developer</span>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis, magna id sem ipsum mi interduml</p>
                                                    </div>
                                            </div>
                                    </div><!--/end row-->
                            </div><!--/end container-->
                    </div>
                    <!-- End Flat Testimonials -->

                    <div class="container">
                            <div class="headline-center margin-bottom-60">
                                    <h2>What We Provide</h2>
                                    <p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p>
                            </div><!--/end Headline Center-->

                            <div class="row margin-bottom-40">
                                    <div class="col-md-4">
                                            <div class="content-boxes-v5 margin-bottom-30">
                                                    <i class="rounded-x icon-layers"></i>
                                                    <div class="overflow-h">
                                                            <h3 class="no-top-space">Responsive Layout</h3>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis</p>
                                                    </div>
                                            </div>
                                            <div class="content-boxes-v5 md-margin-bottom-30">
                                                    <i class="rounded-x icon-settings"></i>
                                                    <div class="overflow-h">
                                                            <h3 class="no-top-space">Color Options</h3>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis</p>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="content-boxes-v5 margin-bottom-30">
                                                    <i class="rounded-x icon-earphones-alt "></i>
                                                    <div class="overflow-h">
                                                            <h3 class="no-top-space">Outstanding Support</h3>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis</p>
                                                    </div>
                                            </div>
                                            <div class="content-boxes-v5 md-margin-bottom-30">
                                                    <i class="rounded-x icon-user "></i>
                                                    <div class="overflow-h">
                                                            <h3 class="no-top-space">User Friendly</h3>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis</p>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <div class="content-boxes-v5 margin-bottom-30">
                                                    <i class="rounded-x icon-wrench"></i>
                                                    <div class="overflow-h">
                                                            <h3 class="no-top-space">Customizable Design</h3>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis</p>
                                                    </div>
                                            </div>
                                            <div class="content-boxes-v5 md-margin-bottom-30">
                                                    <i class="rounded-x icon-star"></i>
                                                    <div class="overflow-h">
                                                            <h3 class="no-top-space">Free Updates</h3>
                                                            <p>Proin et augue vel nisi rhoncus tincidunt. Cras venenatis</p>
                                                    </div>
                                            </div>
                                    </div>
                            </div><!--/end row-->
                    </div><!--/end container-->
            </div>
            <!--=== End Content ===-->

            <!-- Image Mouse -->
            <img class="img-responsive img-mouse margin-bottom-60" src="assets/img/mockup/3.png" alt="">
            <!-- End Image Mouse -->

            <!--=== Footer Version 1 ===-->
            <div class="footer-v1">
                    <div class="footer">
                            <div class="container">
                                    <div class="row">
                                            <!-- About -->
                                            <div class="col-md-3 md-margin-bottom-40">
                                                    <a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
                                                    <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                                                    <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                                            </div><!--/col-md-3-->
                                            <!-- End About -->

                                            <!-- Latest -->
                                            <div class="col-md-3 md-margin-bottom-40">
                                                    <div class="posts">
                                                            <div class="headline"><h2>Latest Posts</h2></div>
                                                            <ul class="list-unstyled latest-list">
                                                                    <li>
                                                                            <a href="#">Incredible content</a>
                                                                            <small>May 8, 2014</small>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#">Best shoots</a>
                                                                            <small>June 23, 2014</small>
                                                                    </li>
                                                                    <li>
                                                                            <a href="#">New Terms and Conditions</a>
                                                                            <small>September 15, 2014</small>
                                                                    </li>
                                                            </ul>
                                                    </div>
                                            </div><!--/col-md-3-->
                                            <!-- End Latest -->

                                            <!-- Link List -->
                                            <div class="col-md-3 md-margin-bottom-40">
                                                    <div class="headline"><h2>Useful Links</h2></div>
                                                    <ul class="list-unstyled link-list">
                                                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                                                            <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                                                            <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                                                            <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                                                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                                                    </ul>
                                            </div><!--/col-md-3-->
                                            <!-- End Link List -->

                                            <!-- Address -->
                                            <div class="col-md-3 map-img md-margin-bottom-40">
                                                    <div class="headline"><h2>Contact Us</h2></div>
                                                    <address class="md-margin-bottom-40">
                                                            25, Lorem Lis Street, Orange <br />
                                                            California, US <br />
                                                            Phone: 800 123 3456 <br />
                                                            Fax: 800 123 3456 <br />
                                                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                                                    </address>
                                            </div><!--/col-md-3-->
                                            <!-- End Address -->
                                    </div>
                            </div>
                    </div><!--/footer-->

                    <div class="copyright">
                            <div class="container">
                                    <div class="row">
                                            <div class="col-md-6">
                                                    <p>
                                                            2015 &copy; All Rights Reserved.
                                                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                                                    </p>
                                            </div>

                                            <!-- Social Links -->
                                            <div class="col-md-6">
                                                    <ul class="footer-socials list-inline">
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                                                            <i class="fa fa-facebook"></i>
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                                                            <i class="fa fa-skype"></i>
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                                                            <i class="fa fa-google-plus"></i>
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                                                            <i class="fa fa-linkedin"></i>
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                                                            <i class="fa fa-pinterest"></i>
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                                                            <i class="fa fa-twitter"></i>
                                                                    </a>
                                                            </li>
                                                            <li>
                                                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                                                            <i class="fa fa-dribbble"></i>
                                                                    </a>
                                                            </li>
                                                    </ul>
                                            </div>
                                            <!-- End Social Links -->
                                    </div>
                            </div>
                    </div><!--/copyright-->
            </div>
            <!--=== End Footer Version 1 ===-->
    </div><!--/wrapper-->

	<!--=== Style Switcher ===-->
	<i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
	<div class="style-switcher animated fadeInRight">
		<div class="style-swticher-header">
			<div class="style-switcher-heading">Style Switcher</div>
			<div class="theme-close"><i class="icon-close"></i></div>
		</div>

		<div class="style-swticher-body">
			<!-- Theme Colors -->
			<div class="style-switcher-heading">Theme Colors</div>
			<ul class="list-unstyled">
				<li class="theme-default theme-active" data-style="default" data-header="light"></li>
				<li class="theme-blue" data-style="blue" data-header="light"></li>
				<li class="theme-orange" data-style="orange" data-header="light"></li>
				<li class="theme-red" data-style="red" data-header="light"></li>
				<li class="theme-light" data-style="light" data-header="light"></li>
				<li class="theme-purple last" data-style="purple" data-header="light"></li>
				<li class="theme-aqua" data-style="aqua" data-header="light"></li>
				<li class="theme-brown" data-style="brown" data-header="light"></li>
				<li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>
				<li class="theme-light-green" data-style="light-green" data-header="light"></li>
				<li class="theme-dark-red" data-style="dark-red" data-header="light"></li>
				<li class="theme-teal last" data-style="teal" data-header="light"></li>
			</ul>

			<!-- Theme Skins -->
			<div class="style-switcher-heading">Theme Skins</div>
			<div class="row no-col-space margin-bottom-20 skins-section">
				<div class="col-xs-6">
					<button data-skins="default" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Light</button>
				</div>
				<div class="col-xs-6">
					<button data-skins="dark" class="btn-u btn-u-xs btn-u-dark btn-block skins-btn">Dark</button>
				</div>
			</div>

			<hr>

			<!-- Layout Styles -->
			<div class="style-switcher-heading">Layout Styles</div>
			<div class="row no-col-space margin-bottom-20">
				<div class="col-xs-6">
					<a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn">Wide</a>
				</div>
				<div class="col-xs-6">
					<a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn">Boxed</a>
				</div>
			</div>

			<hr>

			<!-- Theme Type -->
			<div class="style-switcher-heading">Theme Types and Versions</div>
			<div class="row no-col-space margin-bottom-10">
				<div class="col-xs-6">
					<a href="E-Commerce/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>
				</div>
				<div class="col-xs-6">
					<a href="One-Pages/Classic/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>
				</div>
			</div>

			<div class="row no-col-space">
				<div class="col-xs-6">
					<a href="Blog-Magazine/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>
				</div>
				<div class="col-xs-6">
					<a href="RTL/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">RTL <small class="dp-block">Version</small></a>
				</div>
			</div>
		</div>
	</div><!--/style-switcher-->
	<!--=== End Style Switcher ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
	<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
	<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/plugins/fancy-box.js"></script>
	<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
	<script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
		});
	</script>
	<!--[if lt IE 9]>
  <script src="assets/plugins/respond.js"></script>
  <script src="assets/plugins/html5shiv.js"></script>
  <script src="assets/plugins/placeholder-IE-fixes.js"></script>
  <![endif]-->
</body>
</html>
