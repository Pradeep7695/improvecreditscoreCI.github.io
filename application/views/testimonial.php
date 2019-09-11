<?php include 'includes/header.php';?>
<!-- Banner Wrapper Start -->
<div class="banner-wrapper inner-banner">
	<div class="top-banner">
		<div class="container">
			<h1>Testimonials</h1>
		</div>
	</div>
	<span id="bottom_row" class="bottom_row"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
<!-- Banner Wrapper End -->
<!-- Inner Wrapper Start -->
<section class="testimonials">
	<div class="container">
		<div class="title">
			<h2>Testimonials</h2>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="testimonials">

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?php foreach ($testimonial as $index=>$item):?>
							<div class="item slides <?php echo ($index==0)?' active':''; ?>">
								<div class="slide-1">
									<div class="tes-cnt">
										<p><?= $item->client_review?></p>
									</div>
									<img src="<?= $item->client_img?>" alt="">
									<div class="tes-details">
										<h3><?= $item->client_name?></h3>
									</div>
								</div>
							</div>
						<?php endforeach;?>

					</div>
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#testimonials" data-slide-to="0" class="active"></li>
						<li data-target="#testimonials" data-slide-to="1"></li>
						<li data-target="#testimonials" data-slide-to="2"></li>
						<li data-target="#testimonials" data-slide-to="3"></li>
						<li data-target="#testimonials" data-slide-to="4"></li>
						<li data-target="#testimonials" data-slide-to="5"></li>

					</ol>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 hidden-sm hidden-xs"><img src="<?= base_url()?>assets/images/credit-score.jpg" alt="HostWay"/></div>
		</div>
	</div>
</section>

<!-- Inner Wrapper End -->
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
