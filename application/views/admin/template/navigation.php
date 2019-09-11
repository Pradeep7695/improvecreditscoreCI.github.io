<div class="page-sidebar">
	<!-- START X-NAVIGATION -->
	<ul class="x-navigation">
		<li class="xn-logo">
			<a href="<?= base_url('admin/dashboard')?>">Improve Credit Score</a>
			<a href="#" class="x-navigation-control"></a>
		</li>
		<li class="xn-profile">
			<a href="#" class="profile-mini">
				<img src="<?= base_url('assets/admin/img/no-image.jpg')?>" alt="The Travel fare"/>
			</a>
			<div class="profile">
				<div class="profile-image">
					<img src="<?= base_url('assets/admin/img/no-image.jpg')?>" alt="The Travel fare"/>
				</div>
				<div class="profile-data">
					<div class="profile-data-name">Super Admin</div>
				</div>

			</div>
		</li>

		<li class="<?php if ($page=='dashboard'){echo 'active';}?>">
			<a href="<?= base_url('admin/dashboard')?>"><span class="fa fa-dashboard"></span> <span class="xn-text">Dashboard</span></a>
		</li>

		<li class="<?php if ($page=='user'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-user"></span> <span class="xn-text">Members</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/register_user')?>">All Members</a></li>
				<li><a href="<?= base_url('dashboard/premium_member')?>">Premium Member</a></li>
				<li><a href="<?= base_url('dashboard/free_member')?>">Free Member</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='slider'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-sliders"></span> <span class="xn-text">Slider</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_slider')?>">Add Slider</a></li>
				<li><a href="<?= base_url('dashboard/show_slider')?>">Show Slider</a></li>
				<!--<li><a href="<?= base_url('dashboard/show_video_slider')?>">Show Video Slider</a></li>-->
			</ul>
		</li>

		<li class="<?php if ($page=='popular-tour'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-cog"></span> <span class="xn-text">Our Services</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_our_services')?>">Add Our Services</a></li>
				<li><a href="<?= base_url('dashboard/show_our_services')?>">Show Our Services</a></li>
			</ul>
		</li>
		
		<li class="<?php if ($page=='tour-package'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-credit-card"></span> <span class="xn-text">Improve Credit Score</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_improve_credit_score')?>">Add Credit Score</a></li>
				<li><a href="<?= base_url('dashboard/show_improve_credit_score')?>">Show Credit Score</a></li>
			</ul>
		</li>
		
		<li class="<?php if ($page=='domestic'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-credit-card-alt"></span> <span class="xn-text">Credit Score Improvement Plans</span></a>
			<ul>
				<li><a href="javaScript:void(0);">Add Credit Score Plan</a></li>
				<li><a href="javaScript:void(0);">Show Credit Score Plan</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='visa'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-tags"></span> <span class="xn-text">What We Do</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_what_we_do')?>">Add What We Do</a></li>
				<li><a href="<?= base_url('dashboard/show_what_we_do')?>">Show What We Do</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='testimonial'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Testimonial</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_testimonial')?>">Add Testimonial</a></li>
				<li><a href="<?= base_url('dashboard/show_testimonial')?>">Show Testimonial</a></li>
			</ul>
		</li>
<!-- -----------pages ------- -->

		<li class="<?php if ($page=='about'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-file"></span> <span class="xn-text">Refund Policy</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/show_refund_policy')?>">show Refund Policy</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='privacy'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-file"></span> <span class="xn-text">Privacy Policy</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/show_privacy_policy')?>">show Privacy Policy</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='terms'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-file"></span> <span class="xn-text">Terms & Condition</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/show_term_condition')?>">show Terms & Condition</a></li>
			</ul>
		</li>

		<li class="<?php if ($page=='about2'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-file"></span> <span class="xn-text">About Us</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/show_about_us')?>">show About Us</a></li>
			</ul>
		</li>


		<li class="<?php if ($page=='contact'){echo 'active';}?> xn-openable">
			<a href="#"><span class="fa fa-location-arrow"></span> <span class="xn-text">Contact Us</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/show_contact_us')?>">Show Contact Us</a></li>
			</ul>
		</li>

		<!--<li class="<?php /*if ($page=='car'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-car"></span> <span class="xn-text">Car Rent</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_car')*/?>">Add Car</a></li>
				<li><a href="<?/*= base_url('dashboard/show_car')*/?>">Show Car</a></li>
			</ul>
		</li>

		<li class="<?php /*if ($page=='foreign'){echo 'active';}*/?> xn-openable">
			<a href="#"><i class="fa fa-retweet"></i> <span class="xn-text">Foreign exchange</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_foreignExchange')*/?>">Add Foreign exchange</a></li>
				<li><a href="<?/*= base_url('dashboard/show_foreignExchange')*/?>">Show Foreign exchange</a></li>
			</ul>
		</li>

		<li class="<?php /*if ($page=='travel'){echo 'active';}*/?> xn-openable">
			<a href="#"><span class="fa fa-tag"></span> <span class="xn-text">Travel Insurance</span></a>
			<ul>
				<li><a href="<?/*= base_url('dashboard/add_travel_Insurance')*/?>">Add Travel Insurance</a></li>
				<li><a href="<?/*= base_url('dashboard/showTravelInsurance')*/?>">Show Travel Insurance</a></li>
			</ul>
		</li>
-->
		<!--<li class="<?php if ($page=='privacy'){echo 'active';}?> xn-openable">
			<a href="#"><i class="fa fa-shield"></i> <span class="xn-text">Privacy Policy</span></a>
			<ul>
				<li><a href="<?= base_url('dashboard/add_privacy_policy')?>">Add Privacy Policy</a></li>
				<li><a href="<?= base_url('dashboard/show_privacy_policy')?>">Show Privacy Policy</a></li>
			</ul>
		</li>-->

	<!--	<li class="<?php if ($page=='term'){echo 'active';}?> xn-openable">
			<a href="#"><i class="fa fa-pencil"></i> <span class="xn-text">Terms & Condition</span></a>
			<ul>
			<li><a href="<?= base_url('dashboard/add_term_condition')?>">Add Terms & Condition</a></li>
				<li><a href="<?= base_url('dashboard/show_term_condition')?>">Show Terms & Condition</a></li>
			</ul>
		</li>
-->









	</ul>
	<!-- END X-NAVIGATION -->
</div>
