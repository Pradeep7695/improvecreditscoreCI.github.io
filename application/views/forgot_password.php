<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Improve Credit Score</title>
	<!-- Bootstrap -->
	<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
	<!-- Font Awesome CSS-->
	<link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/one.css')?>" id="style_theme" rel="stylesheet">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.png')?>">


	<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>
<body>
<!-- Loader -->
<div id="dvLoading"></div>
<!-- Color Swicher -->

<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
	<div class="top-wrapper hidden-xs">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<ul class="header-social-icons">
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-6">
					<ul class="pull-right">
						<!--<li  class="usr-profile" onclick="window.location.href='<?/*= base_url('profile')*/?>'" style="cursor: pointer"><i class="fa fa-user"></i> My Profile</li>-->
						<li><i class="fa fa-support" aria-hidden="true"></i><a href="<?= base_url('contact_us');?>"> Support</a></li>
						<li><i class="fa fa-envelope"></i><a href="mailto:info@improvecreditscore.in"> Email Us</a></li>
						<li><i class="fa fa-phone"></i> +91-7304700513</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="logo-wrapper">
		<!-- Logo -->
		<div class="container">
			<div class="row">
				<!-- Logo -->
				<div class="col-sm-12 col-md-3 hidden-xs"> <a href="index.php"><img class="logo-change" src="<?= base_url()?>assets/images/credit-logo.png" alt=""/></a> </div>
				<!-- Navigation -->
				<div class="col-sm-12 col-md-9">
					<nav class="navbar navbar-default pull-right">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a class="navbar-brand" href="index.php"><img class="logo-change-mobile" src="<?= base_url()?>assets/images/credit-logo.png" alt=""/></a> </div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?= base_url('/');?>">Home</a></li>

								<li class=""><a href="<?= base_url('about_us');?>"  role="button" aria-haspopup="true" aria-expanded="false">About Us </a></li>
								<li class=""><a href="<?= base_url('credit_score_improvement_plans')?>" role="button" aria-haspopup="true" aria-expanded="false">Credit Score Improvement Plans </a></li>
								<li><a href="<?= base_url('contact_us');?>">Contact Us</a></li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->
						<ul class="cart-signup hidden-xs">
							<li><?php
								if (!$this->session->userdata('id'))
								{
									echo "<a href='http://localhost/improvecreaditscore/login' class='sign-up pull-right'> Login</a>";
								}
								else
								{
									echo "<a href='http://localhost/improvecreaditscore/logout' class='sign-up pull-right'> Logout</a>";
								}
								?></li>
							<li><a href="<?= base_url('profile');?>" class="sign-up pull-right">My Account</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header End -->
<!-- Banner Wrapper Start -->
<div class="banner-wrapper inner-banner">
	<div class="top-banner">
		<div class="container">
			<h1>Login</h1>
		</div>
	</div>
	<span id="bottom_row" class="bottom_row"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
<!-- Banner Wrapper End -->
<!-- Inner Wrapper Start -->
<section class="inner-wrapper call-back login">
	<div class="block">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-md-offset-3 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
					<div class="form-block">
						<img class="img-circle form-icon" src="<?= base_url()?>assets/images/icon-118.png" alt="">

						<div class="form-wrapper">
							<div class="row">
								<div class="block-header">
									<h2 class="title">Forgot Password</h2>
								</div>
								<?php if ($msg = $this->session->userdata('feedback')):?>
									<?php $feedback_class = $this->session->userdata('feedback_class');?>
									<div class="alert alert-dismissible <?= $feedback_class?>">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<p class="text-center"><strong><?=  $msg;?></strong></p>
									</div>
								<?php endif;?>
							</div>
							<?= form_open('user/forgotPassword')?>
							<div class="field-entry">
								<label for="field-1">Email Address *</label>
								<input type="email"  name="email" value="" id="field-1">
							</div>


							<div class="forget-password">
								<!--<div class="pull-left">
									<a href="<?/*= base_url()*/?>"> Forgot Password ?</a>
								</div>-->

								<a href="<?= base_url('register')?>" data-toggle="modal" data-target="" class="pull-right"> New User Sign Up Now ?</a>
							</div>
							<button type="submit" class="btn">Submit</button>

							<?= form_close()?>
						</div>
					</div>
				</div>

				<div class="clear"></div>

			</div>
		</div>
	</div>
</section>
<!-- Inner Wrapper End -->
<!-- ------------------forget password model fade-------------------- -->



<!-- --------------------..//end forget password model fade------------- -->
<!-- Contact Details Start -->
<section class="contact-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-6"><i class="fa fa-envelope-o" aria-hidden="true"></i>
				<?php if (count($ContactData)):?>
					<?php foreach ($ContactData as $item):?>
						<h3><?= $item->email?></h3>
					<?php endforeach;?>
				<?php endif;?>
			</div>
			<div class="col-sm-6"><i class="fa fa-phone" aria-hidden="true"></i>
				<?php if (count($ContactData)):?>
					<?php foreach ($ContactData as $item):?>
						<h3><?= $item->contact_no?></h3>
					<?php endforeach;?>
				<?php endif;?>
			</div>

		</div>
	</div>
</section>
<!-- Contact Details End -->
<!-- Footer Wrapper Start -->
<section class="footer-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h3>About Improve Credit Score</h3>
				<p><b> <i class="fa fa-hand-o-right"></i></b> For Group / Multiple Person /
					Corporate Schemes & Offers Email or
					Call Us at </p>
				<?php if (count($ContactData)):?>
					<?php foreach ($ContactData as $item):?>
						<p><b><i class="fa fa-phone"></i> Call Us:</b> <a href="JavaScript:void(0);"> <?= $item->contact_no?></a></p>

						<p><b><i class="fa fa-envelope-o"></i> Email:</b> <a href="mailto:<?= $item->email?>"><?= $item->email?></a></p>

						<p><b><i class="fa fa-map-marker"></i> Address:</b>
							<?= $item->address?>
						</p>
					<?php endforeach;?>
				<?php endif;?>

			</div>
			<div class="col-sm-1">
				<div class="border"></div>
			</div>
			<div class="col-sm-3">
				<h3>Quick Links</h3>
				<ul>
					<li><a href="<?= base_url('term_condition')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Terms & Conditions</a></li>
					<li><a href="<?= base_url('privacy_policy')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Privacy Policy</a></li>
					<li><a href="<?= base_url('refund_policy')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Refund Policy</a></li>
				</ul>
			</div>
			<div class="col-sm-1">
				<div class="border"></div>
			</div>
			<div class="col-sm-3">
				<h3>Information</h3>
				<ul>
					<li><a href="<?= base_url('contact_us')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact us</a></li>
					<li><a href="<?= base_url('about_us')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> About us</a></li>
					<li><a href="<?= base_url('testimonial')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
					<li><a href="<?= base_url('feedback')?>"><i class="fa fa-angle-right" aria-hidden="true"></i> Feedback form</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Footer Wrapper End -->
<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-6 col-md-3"><a href="index.php"><img class="footer-logo-change" src="<?/*= base_url()*/?>assets/images/credit-logo.png" alt=""/></a></div>-->
			<div class="col-sm-6 col-md-6">
				<p>&copy;
					<script type="text/javascript">
						var d=new Date();
						document.write(d.getFullYear());
					</script>
					Improve Credit Score |  All Rights Reserved. Powered By <a href="https://www.itarsia.com" target="_blank">Itarsia India</a></p>
			</div>
			<div class="col-sm-6 col-md-6 hidden-sm img-ft-pay">
				<img class="img-responsive" src="<?= base_url('assets/images/payment.png')?>">
			</div>
		</div>
	</div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url('assets/jquery/jquery-3.1.1.min.js')?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/jquery/plugins.js')?>"></script>
<script src="<?= base_url('assets/js/custom.js')?>"></script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments)};
	gtag('js', new Date());

	gtag('config', 'UA-83282272-3');
</script>
</body>
</html>
