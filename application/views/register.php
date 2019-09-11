<?php include 'includes/header.php';?>
<!-- Banner Wrapper Start -->
<!--<div class="banner-wrapper inner-banner">
    <div class="top-banner">
        <div class="container">
            <h1>Sign Up</h1>
        </div>
    </div>
    <span id="bottom_row" class="bottom_row"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>-->
<!-- Banner Wrapper End -->
<!-- Inner Wrapper Start -->
<section class="inner-wrapper call-back login" id="user-reg">
    <div class="block">

		<div class="container register">
			<div class="row">
				<div class="col-md-3 register-left">
					<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
					<h3>Welcome to Improve Credit Score</h3>
					<p>You are 30 seconds away from improving your own Credit Score!</p>
					 <button class="btn btn-info" onclick="window.location.href='<?= base_url('login')?>';">New User Login ?</button>
				</div>
				<div class="col-md-9 register-right">
					<div class="tab-content" id="myTabContent">
						<?php if ($msg = $this->session->userdata('feedback')):?>
							<?php $feedback_class = $this->session->userdata('feedback_class');?>
							<div class="alert alert-dismissible <?= $feedback_class?>">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<?=  $msg;?>
							</div>
						<?php endif;?>
						<?= form_open('create_user')?>
						 <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<h3 class="register-heading">User Sign Up</h3>
							<div class="row register-form">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="fname" placeholder="First Name *" value="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="lname" placeholder="Last Name *" value="" />
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="telephone" placeholder="Telephone No. *" value="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="contactno" placeholder="Contact No. *" value="" />
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Your Email *" value="" />
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Password *" value="" />
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="pincode" placeholder="Pin Code *" value="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="city" placeholder="City *" value="" />
									</div>
								</div>

							<div class="col-md-8 col-md-offset-2">
								<button class="btn btn-success btn-reg-sign" type="submit">Sign Up</button>
							</div>
								</div>
							</div>
						</div>
						<?= form_close()?>

					</div>
				</div>
			</div>

		</div>

    </div>
</section>
<!-- Inner Wrapper End -->

</body>
</html>

<?php /*include 'includes/footer.php';*/?>

<!--<section class="contact-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-6"><i class="fa fa-envelope-o" aria-hidden="true"></i>
				<?php /*if (count($ContactData)):*/?>
					<?php /*foreach ($ContactData as $item):*/?>
						<h3><?/*= $item->email*/?></h3>
					<?php /*endforeach;*/?>
				<?php /*endif;*/?>
			</div>
			<div class="col-sm-6"><i class="fa fa-phone" aria-hidden="true"></i>
				<?php /*if (count($ContactData)):*/?>
					<?php /*foreach ($ContactData as $item):*/?>
						<h3><?/*= $item->contact_no*/?></h3>
					<?php /*endforeach;*/?>
				<?php /*endif;*/?>
			</div>

		</div>
	</div>
</section>-->
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
			<div class="col-sm-6 col-md-3"><a href="index.php"><img class="footer-logo-change" src="<?= base_url()?>assets/images/credit-logo.png" alt=""/></a></div>
			<div class="col-sm-6 col-md-6">
				<p>Copyright &copy;
					<script type="text/javascript">
						var d=new Date();
						document.write(d.getFullYear());
					</script>
					Improve Credit Score |  All Rights Reserved. Powered By <a href="https://www.itarsia.com" target="_blank">Itarsia India</a></p>
			</div>
			<div class="col-sm-6 col-md-3 hidden-sm">
				<ul class="social-icons pull-right">
					<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url()?>assets/jquery/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/jquery/plugins.js"></script>
<script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/custom.js"></script>
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

