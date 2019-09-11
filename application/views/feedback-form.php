<?php include 'includes/header.php';?>
<!-- Banner Wrapper Start -->
<div class="banner-wrapper inner-banner">
    <div class="top-banner">
        <div class="container">
            <h1>Feedback Form</h1>
        </div>
    </div>
    <span id="bottom_row" class="bottom_row"><i class="fa fa-angle-down" aria-hidden="true"></i></span> </div>
<!-- Banner Wrapper End -->
<!-- Inner Wrapper Start -->
<section class="inner-wrapper call-back login">
    <div class="block">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-3 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="form-block">
                        <img class="img-circle form-icon" src="<?= base_url()?>assets/images/icon-119.png" alt="">

                        <div class="form-wrapper">
                            <div class="row">
                                <div class="block-header feedback-form">
                                    <h2 class="title">Feedback Form</h2>
                                </div>
                            </div>
                            <form id="regform" name="table_form" action="" method='post' role='form'>

                            <div class="row">
                                    <div class="col-md-6">
                                        <label for="field-1">First Name </label>
                                        <input type="text" required="" placeholder="" value="" name="fname">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="field-1">Last Name</label>
                                        <input type="text" required="" placeholder="" value="" name="lname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="field-1">Contact No.</label>
                                        <input type="text" required="" placeholder="" value="" name="contactno">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="field-1">Email Id</label>
                                        <input type="email" required="" placeholder="" value="" name="email">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="field-1">Pin Code </label>
                                        <input type="text" required="" placeholder="" value="" name="pincode">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="field-1">City</label>
                                        <input type="text" required="" placeholder="" value="" name="city">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="field-1">Message</label>
                                        <textarea cols="" name="msg" type="text" rows="" required=""></textarea>
                                    </div>

                                </div>




                                <button type="submit" class="btn">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>

            </div>
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
          <!--  <div class="col-sm-6 col-md-3"><a href="index.php"><img class="footer-logo-change" src="<?/*= base_url()*/?>assets/images/credit-logo.png" alt=""/></a></div>-->
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
<!-- Footer Wrapper End -->
<!-- Footer -->

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
                url: 'Feedback_form/feedback',
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
