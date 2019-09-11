<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Improve Credit Score</title>
	<!-- Bootstrap -->
	<link rel="icon" href="<?= base_url()?>assets/admin/img/credit-logo.png" type="image/x-icon" />
	<link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome CSS-->
	<link href="<?= base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/css/one.css" id="style_theme" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/sweetalert.css">
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/credit-logo.png">

</head>
<body>
<!-- Loader -->
<div id="dvLoading"></div>
<!-- Color Swicher -->
<!--<div class="theme-settings" id="switcher"> <span class="theme-click"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></span> <span class="theme-color theme-default theme-active" data-color="one"></span> <span class="theme-color theme-color-two" data-color="two"></span> <span class="theme-color theme-color-three" data-color="three"></span> <span class="theme-color theme-color-four" data-color="four"></span><span class="theme-color theme-color-five" data-color="five"></span><span class="theme-color theme-color-six" data-color="six"></span><span class="theme-color theme-color-seven" data-color="seven"></span><span class="theme-color theme-color-eight" data-color="eight"></span></div>-->
<!-- Header Start -->
<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
	<div class="top-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 hidden-xs">
					<ul class="header-social-icons">
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<div class="col-sm-9">
					<ul class="pull-right">
						<!--  <li class="usr-profile" onclick="window.location.href='<?= base_url('profile')?>'" style="cursor: pointer"><i class="fa fa-user"></i> My Profile</li>-->
						<li><i class="fa fa-support" aria-hidden="true"></i><a href="<?= base_url('contact_us');?>"> Support</a></li>
						<li><i class="fa fa-envelope"></i><a href="mailto:info@improvecreditscore.in"> Email Us</a></li>
						<li><i class="fa fa-phone"></i> +91-7304700513</li>
						<li class="">
							<?php if (!$this->session->userdata('id')):?>
								<button class="btn usr-profile" onclick="window.location.href='<?= base_url('login')?>';"><i class="fa fa-key"></i> Login & Sign Up</button>
							<?php else:?>
								<button class="btn usr-profile" onclick="window.location.href='<?= base_url('logout')?>';"><i class="fa fa-sign-out"></i> Logout</button>
							<?php endif;?>
						</li>

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
				<div class="col-sm-12 col-md-3 hidden-xs"> <a href="<?= base_url('/');?>"><img class="logo-change" src="<?= base_url()?>assets/images/credit-logo.png" alt=""/></a> </div>
				<!-- Navigation -->
				<div class="col-sm-12 col-md-9">
					<nav class="navbar navbar-default pull-right">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a class="navbar-brand" href="index.php"><img class="logo-change-mobile" src="<?= base_url()?>assets/images/credit-logo.png" alt="Credit Score"/></a> </div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?= base_url('/');?>">Home</a></li>

								<li class=""><a href="<?= base_url('about_us');?>"  role="button" aria-haspopup="true" aria-expanded="false">About Us </a></li>
								<li class=""><a href="<?= base_url('credit_score_improvement_plans');?>" role="button" aria-haspopup="true" aria-expanded="false">Credit Score Improvement Plans </a></li>
								<li><a href="<?= base_url('contact_us');?>">Contact Us</a></li>
							</ul>
							<ul class="cart-signup">

								<li><a href="<?= base_url('profile');?>" class="sign-up pull-right">My Account</a></li>
							</ul>
						</div>
						<!-- /.navbar-collapse -->

					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Header End --> 
