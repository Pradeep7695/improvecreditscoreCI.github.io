<?php $page = 'dashboard'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Dashboard</li>
</ul>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-4">

			<!-- START WIDGET MESSAGES -->
			<div class="widget widget-default widget-item-icon"  onclick="window.location.href='<?= base_url('dashboard/premium_member')?>';" style="cursor: pointer;">
				<div class="widget-item-left">
					<span class="fa fa-inr"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('payments')?></div>
					<div class="widget-title">Credit Score Plans</div>
					<div class="widget-subtitle">Total Payment User</div>
				</div>

				<div class="widget-controls">
					<a href="javaScript:void(0)" class="widget-control-right btn-success" data-toggle="tooltip" data-placement="top" title="Payment User Widget"><span class="fa fa-inr"></span></a>
				</div>
			</div>
			<!-- END WIDGET MESSAGES -->

		</div>
		<div class="col-md-4">

			<!-- START WIDGET REGISTRED -->
			<div class="widget widget-default widget-item-icon" onclick="window.location.href='<?= base_url('dashboard/register_user')?>';" style="cursor: pointer;">
				<div class="widget-item-left">
					<span class="fa fa-user"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('register-user')?></div>
					<div class="widget-title">Registered Member</div>
					<div class="widget-subtitle">On your website</div>
				</div>
				<div class="widget-controls">
					<a href="javaScript:void(0)" class="widget-control-right btn-success" data-toggle="tooltip" data-placement="top" title="Register User Widget"><span class="fa fa-user"></span></a>
				</div>
			</div>
			<!-- END WIDGET REGISTRED -->

		</div>

		<div class="col-md-4">

			<!-- START WIDGET REGISTRED -->
			<div class="widget widget-default widget-item-icon"  onclick="window.location.href='<?= base_url('dashboard/show_testimonial')?>';" style="cursor: pointer;">
				<div class="widget-item-left">
					<span class="fa fa-thumbs-up"></span>
				</div>
				<div class="widget-data">
					<div class="widget-int num-count"><?php echo $this->db->count_all('testimonial')?></div>
					<div class="widget-title">Testimonial Users</div>
					<div class="widget-subtitle">On your website</div>
				</div>
				<div class="widget-controls">
					<a href="javaScript:void(0)" class="widget-control-right btn-success" data-toggle="tooltip" data-placement="top" title="Testimonial Widget"><span class="fa fa-thumbs-up btn-success"></span></a>
				</div>
			</div>
			<!-- END WIDGET REGISTRED -->

		</div>


		<!-- ----------------dashboard table -------------- -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-success">
						<div class="panel-heading"><h3 class="text-center">All Members</h3></div>
						<div class="panel-body">
							<table id="register-user" class="table table-bordered table-striped table-actions">
								<thead>
								<tr>
									<th>Sl. No.</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Telephone No</th>
									<th>Contact No</th>
									<th>Email Id</th>
									<th>Pin Code</th>
									<th>City</th>
									<th width="100">Action</th>
								</tr>
								</thead>
								<tbody>
								<?php if (count($LatestRegisterUser)):
									$count = $this->uri->segment(3, 0); ?>
								<?php foreach ($LatestRegisterUser as $LatestRegisterUser):?>
								<tr>
									<td><?= ++$count ?></td>
									<td><?= $LatestRegisterUser->fname;?></td>
									<td><?= $LatestRegisterUser->lname;?></td>
									<td><?= $LatestRegisterUser->telephone;?></td>
									<td><?= $LatestRegisterUser->contactno;?></td>
									<td><?= $LatestRegisterUser->email;?></td>
									<td><?= $LatestRegisterUser->pincode;?></td>
									<td><?= $LatestRegisterUser->city;?></td>
									<td>
										<?php
										echo anchor("dashboard/user_details/". $LatestRegisterUser->id,'<button class="btn btn-info btn-condensed"><i class="fa fa-eye-slash"></i></button>');

										?>
									</td>
								</tr>
									<?php endforeach;?>
								<?php endif;?>

								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>

	</div>
</div>


<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>

<script>
	$(function(){
		$('#register-user').DataTable({
			"order": []
		});
	});
</script>
