<?php include "includes/header.php"?>

<!-- -------------------main content start from here ------------- -->

<section class="profile-dash">
	<div class="container">
		<div class="row">
			<div class="my-profile">
				<div class="container">
					<div class="row">
						<div class="col-md-12 dashboard-p">
						   <div class="title-head">
							   <p>My Profile</p>
						   </div>
						</div>
						<div class="col-md-12 dashboard-p">
							<?php if ($msg = $this->session->userdata('feedback')):?>
								<?php $feedback_class = $this->session->userdata('feedback_class');?>
								<div class="alert alert-dismissible <?= $feedback_class?>">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<p class="text-center" style="font-size: 20px;"><strong><i class="fa fa-check-circle"></i> <?=  $msg;?></strong></p>
								</div>
							<?php endif;?>
							<div class="top-main-p">
								<p><strong> Welcome ,
										<?php $fname = $this->session->userdata('fname');
										$lname = $this->session->userdata('lname');
										?>
									<?= $fname . " " .$lname?>	!</strong> <br>
									Improve Credit Score Dashboard to view a snapshot of your recent account activity and update your account information and Payment Details.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-3 col-sm-4">
							<!-- My account box start -->
							<div class="edit-profile-photo">
								<img src="<?= base_url()?>assets/images/no-user-pro.jpg" alt="agent-1" class="img-responsive">
								<div class="change-photo-btn">
									<!--<div class="photoUpload">
                                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                                        <input type="file" class="upload">
                                    </div>-->
								</div>
								<div class="user-name">
									<?php $fname = $this->session->userdata('fname');
									      $lname = $this->session->userdata('lname');
									?>
									<p><?= $fname . " " . $lname ?></p>
								</div>
							</div>
							<!-- My account box end -->
						</div>
						<div class="col-lg-8 col-md-6 col-sm-5">
							<!-- My address start-->
							<div class="my-address">
								<div class="row">
									<div class="col-md-6">
										<div class="manage-profile">
											<div class="user-profile">
												<div class="my-account-box">
													<div class="item">
														<h3 class="title">
															<i class="fa fa-dashboard"></i>  Manage Profile
														</h3>
														<p onclick="window.location.href='<?= base_url("user/user_profile")?>';">
															<a href="javaScript:void(0)">
																<i class="fa fa-plus"></i> Edit Profile
															</a>
														</p>

														<p onclick="window.location.href='<?= base_url('user/payment_history')?>'">
															<a href="javaScript:void(0)">
																<i class="fa fa-credit-card"></i>Payment History
															</a>
														</p>
													</div>

												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="manage-cart">
											<div class="cart-deatils">
												<div class="my-account-box">

													<div class="item">

														<h3 class="title">
															<i class="fa fa-cogs"></i>  User Setting
														</h3>

														<p onclick="window.location.href='<?= base_url('user/change_password')?>';">
															<a href="JavaScript:void(0);">
																<i class="fa fa-exchange"></i>Change Password
															</a>
														</p>

														<p onclick="window.location.href='<?= base_url('logout')?>';">
															<a href="javaScript:void(0);" class="logout-a">
																<i class="fa fa-sign-out"></i>Log Out
															</a>
														</p>
													</div>

												</div>
											</div>
										</div>
									</div>

								</div>

							</div>
							<!-- My address end -->
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- ----------------..//end main content ----------------------- -->
<?php /*include "includes/footer.php"*/?>

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

