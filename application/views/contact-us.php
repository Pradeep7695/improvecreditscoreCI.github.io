<?php include 'includes/header.php';?>
<!-- Banner Wrapper Start -->
<div class="banner-wrapper inner-banner">
    <div class="top-banner">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </div>
    <span id="bottom_row" class="bottom_row"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
<!-- Banner Wrapper End -->
<!-- Inner Wrapper Start -->
<section class="map-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
				<div id="content" class="col-sm-12 contactus">
					<div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
						<h4>
							Contact Us
						</h4>
					</div>

					<div class="contact-form">
						<!-- Form -->
						<form id="regform" name="table_form" action="" method="post" role="form" novalidate="novalidate">
							<!-- Left Inputs -->
							<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
								<!-- Name -->
								<input type="text" name="name" id="name" required="required" class="form" placeholder="Name">
								<!-- Email -->
								<input type="email" name="email" id="mail" required="required" class="form" placeholder="Email">
								<!-- Subject -->
								<input type="text" name="contactno" id="subject" required="required" class="form" placeholder="Contact Number">
							</div><!-- End Left Inputs -->
							<!-- Right Inputs -->
							<div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
								<!-- Message -->
								<textarea name="address" id="message" row="10" class="form textarea" placeholder="Address"></textarea>
							</div><!-- End Right Inputs -->
							<!-- Bottom Submit -->
							<div class="relative fullwidth col-xs-12">
								<!-- Send Button -->
								<button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
							</div><!-- End Bottom Submit -->
							<!-- Clear -->
							<div class="clear"></div>
						</form>

					</div></div>
            </div>

            <!--<div class="col-md-6">
               <div class="contact-map">
                   <div class="panel panel-primary">
                       <div class="panel-heading">Location Map </div>
                       <div class="panel-body">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.235563889037!2d72.91216930432765!3d19.097319117899772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c7ce584bd5bd%3A0xd86c90e71f8c94c6!2sDamodar+Park%2C+Ghatkopar+West%2C+Mumbai%2C+Maharashtra+400086!5e0!3m2!1sen!2sin!4v1553594103165" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </div>
                   </div>
               </div>
            </div>-->
        </div>
    </div>
</section>
<!-- Inner Wrapper End -->
<!-- Get in Touch End -->
<!--<section class="get-in-touch">
    <div class="container">
        <div class="title">
            <h2>Get In Touch</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="details"> <i class="fa fa-phone-square" aria-hidden="true"></i>
                    <h3>Contact</h3>
				<?php /*if (count($ContactData)):*/?>
					<?php /*foreach ($ContactData as $item):*/?>
                    <p><strong>Phone No.:</strong> <?/*= $item->contact_no*/?><br>
					<?php /*endforeach;*/?>
				<?php /*endif;*/?>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <div class="details"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h3>Email</h3>
				<?php /*if (count($ContactData)):*/?>
					<?php /*foreach ($ContactData as $item):*/?>
                    <p><strong>Email:</strong> <a href="mailto:<?/*= $item->email*/?>"><?/*= $item->email*/?></a></p>
					<?php /*endforeach;*/?>
				<?php /*endif;*/?>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Get in Touch End -->
<!-- Testimonials Start -->

<!-- Testimonials End -->

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

<!-- ----validation jqury --- -->
<script src="<?= base_url()?>assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= base_url()?>assets/js/additional-methods.min.js" type="text/javascript"></script>

<script src="<?= base_url()?>assets/js/sweetalert.min.js" type="text/javascript"></script>

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

<!-- ------------------------------form validation js---------------------- -->
<script type="text/javascript" >

    $(function(){
        $('form#regform').validate({
            onsubmit : false
        });


        $('#regform').submit(function(e){
            e.preventDefault();
            var $form = $(this);
            // check if the input is valid
            if(! $form.valid()) return false;


            $.ajax({
                type: "POST",
                url: 'ContactForm/contactus',
                data: $(this).serialize(),
                dataType : "json",
                success: function(data){
                    if(data.success){
                        $('form#regform')[0].reset();
                        //$('#regform').hide();
                        // $('.alert-success').empty().append(data.message).removeClass('hidden');
                        swal("Form Send", "Thank you for your submission!", "success");

                    }
                    else if(data.error){
                        //$('#regform').hide();
                        /* $('.alert-danger').empty().append(data.message).removeClass('hidden');*/
                        swal("Failed", "Try Again", "danger");
                    }

                }
            });
        });
    });

</script>

<!-- ------------------------------../ form validation js---------------------- -->

</body>
</html>
