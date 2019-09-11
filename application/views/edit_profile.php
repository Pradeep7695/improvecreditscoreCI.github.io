<?php include "includes/header.php"?>

<!-- -----------------main page start from here --------------- -->
<section class="col-main col-sm-10 col-md-offset-1 col-xs-12 wow bounceInUp animated animated animated animated" id="edtpro" style="visibility: visible;">
	<div class="my-account">

		<!--page-title-->
		<!-- BEGIN DASHBOARD-->
		<div class="dashboard">
			<!-- ----------user profile --------- -->
			<div class="col2-set">
				<div class="main-profile">
					<div class="row">
						<div class="col-md-3 backtodash">
							<button class="btn btn-success" onclick="window.location.href='<?= base_url('profile')?>';"><i class="fa fa-reply"></i> Back To Dashboard</button>
						</div>
					</div>
				</div>
			</div>
			<!-- --------end profile user-------- -->
			<hr>
			<!--recent-orders-->
			<div class="box-account">
				<div class="col2-set">
					<div class="box-account">
						<!-- Acount Information -->
						<?= form_open("user/update_profile/{$editUser->id}")?>
							<fieldset>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">First Name</label>
										<?= form_input(['class'=>'form-control','name'=>'fname','value'=>set_value('fname',$editUser->fname)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">Last Name</label>
										<?= form_input(['class'=>'form-control','name'=>'lname','value'=>set_value('lname',$editUser->lname)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">Telephone No.</label>
										<?= form_input(['class'=>'form-control','name'=>'telephone','value'=>set_value('telephone',$editUser->telephone)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">Contact No.</label>
										<?= form_input(['class'=>'form-control','name'=>'contactno','value'=>set_value('contactno',$editUser->contactno)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">Email</label>
										<?= form_input(['class'=>'form-control','name'=>'email','value'=>set_value('email',$editUser->email)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">Pin Code</label>
										<?= form_input(['class'=>'form-control','name'=>'pincode','value'=>set_value('pincdoe',$editUser->pincode)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>

								<div class="col-lg-6">
									<div class="form-group has-primary has-feedback">
										<label class="control-label">City</label>
										<?= form_input(['class'=>'form-control','name'=>'city','value'=>set_value('city',$editUser->city)])?>
										<span class="fa fa-edit form-control-feedback"></span>
									</div>
								</div>
							</fieldset>

						<div class="changes-pass">
							<button type="submit" class="btn btn-success btn-sub-acinfo"><i class="fa fa-refresh"></i>  Save Changes</button>
						</div>

						<?= form_close()?>

					</div>
				</div>

				<div class="col2-set">

					<!--box-->
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
