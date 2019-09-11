<?php include 'includes/header.php';?>


<section class="main-container col2-right-layout top-section payment-sec">
	<div class="main container">
		<div class="row">
			<section class="col-main col-sm-12 col-xs-12 wow bounceInUp animated animated animated animated paysec2" style="visibility: visible;">
				<div class="my-account">

					<!--page-title-->
					<!-- BEGIN DASHBOARD-->
					<div class="dashboard">
						<div class="welcome-msg">
							<p class="hello"><strong>Payment Histroy</strong></p>

						</div>
						<div class="recent-orders order-his">
							<div class="title-buttons"> <button class="btn btn-success" onclick="window.location.href='<?= base_url('profile')?>';"><i class="fa fa-reply"></i> Back To Dashboard</button> </div>
						</div>
						<hr>

						<!--recent-orders-->
						<div class="box-account table-responsive">

							<table class="table table-bordered table-hover cart_summary">
								<thead style="background: #EAEAEA;">
								<tr>
									<th class="cart_product text-center">Sl. No.</th>
									<th class="text-center">Product Id</th>
									<th class="text-center">Plan Name</th>
									<th class="text-center">Payment Id</th>
									<th class="text-center">Price</th>
									<th class="text-center">Date</th>
									<th class="text-center">Action</th>
								</tr>
								</thead>
								<tbody>
							<?php if (count($PaymentHistory)):?>
							   <?php foreach ($PaymentHistory as $item):?>
								<tr id="table1">

									<td class="text-center">
										<span><?= $item->id?> </span>
									</td>

									<td class="text-center">
										<span><?= $item->product_id?> </span>
									</td>

									<td class="text-center">
										<span> <?= $item->plan_name?></span>
									</td>

									<td class="text-center">
										<span><?= $item->payment_id?></span>
									</td>

									<td class="text-center">
										<span><i class="fa fa-inr"></i> <?= $item->amount?> </span>
									</td>

									<td class="text-center">
										<span><?= $item->created_at?></span>
									</td>

									<td class="text-center">
										<a href="<?= base_url('user/pdfPaymentDetails/'.$item->id.'/Payment Details Invoice')?>" data-toggle="modal" target="_blank" class="order-refund"><button type="button" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Invoice</button></a>
									</td>
								</tr>
								<?php endforeach;?>

							<?php else:?>
							<tr class="text-center">
								<td colspan="7">
									No Payment History Found.
								</td>
							</tr>

						<?php endif;?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</section>
			<!--col-main col-sm-9 wow bounceInUp animated-->

		</div>
		<!--row-->
	</div>
	<!--main container-->
</section>

<?php /*include 'includes/footer.php';*/?>
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
