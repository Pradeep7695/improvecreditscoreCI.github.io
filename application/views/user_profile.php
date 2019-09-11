<?php include "includes/header.php"?>

<!-- -----------------main page start from here --------------- -->
<section class="col-main col-sm-10 col-md-offset-1 col-xs-12 wow bounceInUp animated animated animated animated" id="edtpro" style="visibility: visible;">
	<div class="my-account">

		<!--page-title-->
		<!-- BEGIN DASHBOARD-->
		<div class="dashboard">
			<div class="col-md-12 dashboard-p">
				<div class="title-head">
					<p>My Details</p>
				</div>
			</div>
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
					<?php if ($msg = $this->session->userdata('feedback')):?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<p class="text-center" style="font-size: 20px;"><strong><i class="fa fa-check-circle"></i> <?=  $msg;?></strong></p>
						</div>
					<?php endif;?>
					<div class="box-account">
						<table class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Telephone</th>
								<th>Contact No.</th>
								<th>Email</th>
								<th>Pin Code</th>
								<th>City</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
						<?php if (count($userDetails)):?>
						   <?php foreach ($userDetails as $item):?>
							<tr>
								<td><?= $item->fname?></td>
								<td><?= $item->lname?></td>
								<td><?= $item->telephone?></td>
								<td><?= $item->contactno?></td>
								<td><?= $item->email?></td>
								<td><?= $item->pincode?></td>
								<td><?= $item->city?></td>
								<td>
									<button class="btn btn-success" onclick="window.location.href='<?= base_url('user/edit_profile/'.$item->id)?>';">Edit Profile</button>
								</td>
							</tr>
						 <?php endforeach;?>
					   <?php endif;?>
							</tbody>
						</table>
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
			<div class="col-sm-6 col-md-3"><a href="index.php"><img class="footer-logo-change" src="<?= base_url()?>assets/images/credit-logo.png" alt=""/></a></div>
			<div class="col-sm-6 col-md-6">
				<p>&copy;
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
