<?php include "includes/header.php"?>

<!-- -----------------main page start from here --------------- -->
<section class="col-main col-sm-10 col-md-offset-1 col-xs-12 wow bounceInUp animated animated animated animated" id="edtpro" style="visibility: visible;">
  <div class="chagepass">
	<div class="container">
	   <div class="row">
		   <div class="col-md-3 backtodash">
			   <button class="btn btn-success" onclick="window.location.href='<?= base_url('profile')?>';"><i class="fa fa-reply"></i> Back To Dashboard</button>
		   </div>
	   </div>
	   <div class="row">
		   <div class="forgot-pass">
			   <?php if ($msg = $this->session->userdata('feedback')):?>
				   <?php $feedback_class = $this->session->userdata('feedback_class');?>
				   <div class="alert alert-dismissible <?= $feedback_class?>">
					   <button type="button" class="close" data-dismiss="alert">&times;</button>
					   <p class="text-center" style="font-size: 20px;"><strong><i class="fa fa-check-circle"></i> <?=  $msg;?></strong></p>
				   </div>
			   <?php endif;?>
			   <div class="chan-pass">
				   <div class="col-md-8 col-md-offset-2 col-sm-8 col-xs-7">
					   <form action="<?= base_url('user/reset_password')?>" class="form-horizontal" method="post" accept-charset="utf-8">
						   <div class="panel panel-default">
							   <div class="panel-body">
								   <h3 class="text-center"><span class="fa fa-pencil"></span> Change Password</h3>
							   </div>
							   <div class="panel-body form-group-separated">

								   <div class="form-group">
									   <label class="col-md-3 col-xs-5 control-label">New Password</label>
									   <div class="col-md-9 col-xs-7">
										   <input type="password" name="npass" value="" class="form-control" placeholder="New Password" required>
									   </div>
								   </div>
								   <div class="form-group">
									   <label class="col-md-3 col-xs-5 control-label">Confirm Password</label>
									   <div class="col-md-9 col-xs-7">
										   <input type="password" name="cpass" value="" class="form-control" placeholder="Confirm Password" required>
									   </div>
								   </div>

								   <div class="form-group">
									   <div class="col-md-12 col-xs-5 text-center">
										   <button class="btn btn-info"><i class="fa fa-send"></i> Submit</button>
									   </div>
								   </div>
							   </div>
						   </div>
					   </form>
				   </div>
			   </div>
		   </div>
	   </div>
   </div>
  </div>
</section>


<!-- ----------..//end main page  ------------------------- -->

<?php /*include "includes/footer.php";*/?>
<section class="contact-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-6"><i class="fa fa-envelope-o" aria-hidden="true"></i>
				<h3>info@improvecreditscore.in</h3>
			</div>
			<div class="col-sm-6"><i class="fa fa-phone" aria-hidden="true"></i>
				<h3> +91-7304700513</h3>
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
			<!--<div class="col-sm-6 col-md-3"><a href="index.php"><img class="footer-logo-change" src="<?/*= base_url()*/?>assets/images/credit-logo.png" alt=""/></a></div>-->
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
