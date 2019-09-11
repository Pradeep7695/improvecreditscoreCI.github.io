<?php include 'includes/header.php';?>

<!-- Banner Wrapper Start -->
<div class="banner-wrapper">
	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
		<!-- Overlay -->
		<div class="overlay"></div>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		<?php foreach ($Slider as $index=>$item):?>
			<div class="item slides<?php echo ($index==0)?' active':''; ?>">
				<div class="slide-1"><img src="<?= $item->slider_img?>" alt=""/></div>
				<div class="hero">
					<h1><?= $item->slider_title?></h1>
					<p><?= $item->slider_text?></p>
					<div class="slider-btn">
						<button class="btn btn-hero" onclick="window.location.href='<?= base_url('credit_score_improvement_plans')?>';">Get Credit</button>
					</div>
				</div>
			</div>
		<?php endforeach;?>

		</div>
		<div class="slide-arrows"><a class="left carousel-control" href="#bs-carousel" data-slide="prev"><span class="transition3s glyphicon glyphicon-chevron-left fa fa-angle-left"></span></a> <a class="right carousel-control" href="#bs-carousel" data-slide="next"><span class="transition3s glyphicon glyphicon-chevron-right fa fa-angle-right"></span></a></div>
	</div>
	<span id="bottom_row" class="bottom_row"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
</div>
<!-- Banner Wrapper End --> 
<!-- Domain Search Start -->
<section class="domain-search">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h3>Be Credit Healthy and Save Money<span></span></h3>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="search">
          <label>Call Us On</label>
          <input class="input-text" value="+91-7304700513" type="text" disabled>
          <!--<button class="btn">Search <i class="fa fa-search" aria-hidden="true"></i></button>-->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Domain Search End --> 
<!-- Domain Prices Start -->

<!-- ------------------services and price---------------------------- -->


 <section class="domain-price">
  <div class="block type-1 scroll-to-block" data-rel="1">
  <div class="container">

    <div class="row wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
      <div class="block-header col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
        <h2 class="title1">Our Services</h2>
        <div class="text">We help in building & improving your Credit score, – a healthy credit score means instant loan approved at lower interest rate.</div>
      </div>
    </div>

    <div class="row wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
		<?php if (count($Service)):?>
		<?php foreach ($Service as $item):?>
      <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
        <img src="<?= $item->service_img?>" alt="">
        <div class="content">
          <h3 class="title1"><?= $item->service_title?></h3>
          <div class="text"><?= $item->service_desc?></div>
        </div>
      </div>
			<?php endforeach;?>
		<?php endif;?>
    </div>

      </div>
    </div>
 </section>


<!-- -------------------..//end services and price------------------- -->


<!-- Domain Prices End -->
<!-- About Us Start -->
<!--<section class="about-us">
  <div class="container">
    <div class="title">
      <h2>Our Company</h2>
      <p>Lorem Ipsum is simply dummy the printing and typesetting industry.</p>
    </div>
    <div class="row">
      <div class="col-sm-6"> <img src="assets/images/about-img.png" alt="HostWay"/> </div>
      <div class="col-sm-6">
        <h3>Lorem text of the printing and typesetting 
          industry.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
          tempor incididunt ut labore et doloremagna aliqua. Ut nim ad minim 
          veniam, quis nostrud exercitation ullamco laboris nisi</p>
        <a href="javascript:void(0)" class="read-more">Read More</a> </div>
    </div>
  </div>
</section>-->
<!-- About Us End --> 
<!-- Web Search Start -->
<!--<section class="about-us web-search">
  <div class="container">
    <div class="title">
      <h2>Web Search</h2>
      <p>Lorem Ipsum is simply dummy the printing and typesetting industry.</p>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h3>Lorem text of the printing and typesetting 
          industry.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
          tempor incididunt ut labore et doloremagna aliqua. Ut nim ad minim 
          veniam, quis nostrud exercitation ullamco laboris nisi</p>
        <a href="javascript:void(0)" class="read-more">Read More</a> </div>
      <div class="col-sm-6"> <img src="assets/images/web-search-img1.png" alt="HostWay"/> </div>
    </div>
  </div>
</section>-->
<!-- Web Search End --> 
<!-- Dream Host Start -->
<section class="dream-host">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-9">
        <h3>Get Your  Credit Score<span>Check your credit score & apply for the our Credit Score Improvement Plans</span></h3>
      </div>
      <div class="col-sm-12 col-md-3"> <a href="credit-score-improvement-plans.php" target="_blank" class="purchase pull-right">Check Now</a> </div>
    </div>
  </div>
</section>
<!-- Dream Host End --> 
<!-- Our Services Start -->
<section class="our-services">
  <div class="block type-3 span-title">
    <div class="container">

      <div class="row wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
        <div class="block-header col-md-8 col-md-offset-2  col-sm-12">
          <h2 class="title2"><span>IMPROVE CREDIT SCORE </span></h2>
          <div class="text">Your one stop solution for improving your credit score – the higher the credit score the lower is the interest rate.</div>
        </div>
      </div>

      <div class="row">
	 <?php if (count($CreditScore)):?>
	    <?php foreach ($CreditScore as $item):?>
        <div class="icon-entry col-sm-6 col-md-3 wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
          <img class="" src="<?= $item->credit_img?>" alt="">
          <div class="content">
            <h3 class="title2"><?= $item->credit_title?></h3>
            <div class="text"><?= $item->credit_desc?></div>
          </div>
        </div>
       <?php endforeach;?>
	<?php endif;?>

        <div class="clearfix visible-sm"></div>
      </div>
    </div>
  </div>
</section>
<!-- Our Services End --> 
<!-- What we do Start -->
<section class="what-we-do">
  <div class="container">
    <div class="title">
      <p class="top">Include All</p>
      <h2>What We do</h2>
    </div>
    <div class="row">
	<?php if (count($whatWeDo)):?>
	  <?php foreach ($whatWeDo as $item):?>
      <div class="col-sm-6 col-md-3">
        <div class="what-we">
          <img class="" src="<?= $item->do_img?>" alt="">
          <h3><?= $item->we_do_title?></h3>
          <p><?= $item->we_do_desc?></p>
        </div>
      </div>
      <?php endforeach;?>
	<?php endif;?>

    </div>
  </div>
</section>
<!-- What we do End --> 
<!-- Hosting Platforms Start -->

<!-- Hosting Platforms End --> 
<!-- Testimonials Start -->
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
<!-- Testimonials End --> 

<?php /*include 'includes/footer.php';*/?>
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



