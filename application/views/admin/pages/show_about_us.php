<?php $page = 'about2'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Show About Us</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> About Us List</h2>
	<!--<div class="form-group pull-right">
		<button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/add_contactUs')?>';"><i class="fa fa-plus"></i> Add Contact Us</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/add_contactUs')?>';"><i class="fa fa-reply"></i> Back</button>
	</div>-->
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="col-md-8 col-md-offset-2 feedback-data">
					<?php if ($msg = $this->session->userdata('feedback')):?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<?php $feedback_icon = $this->session->userdata('feedback_icon');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<?= $feedback_icon?> <p><?= $msg;?></p>
						</div>
					<?php endif;?>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="about_us" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Id</th>
								<th>About Us Description</th>
								<th>Who We Are Description</th>
								<th>Vision & Mission Description</th>
								<th>Date</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php if ($aboutData):?>
								<?php foreach ($aboutData as $aboutData):?>
									<tr>
										<td><?= $aboutData->id;?></td>
										<td><?= $aboutData->about_desc;?></td>
										<td><?= $aboutData->who_we_are;?></td>
										<td><?= $aboutData->vision_mission?></td>
										<td><?= date('d-m-Y',strtotime($aboutData->created_at))?></td>
										<td>
											<?php
											echo anchor("dashboard/edit_about_us/". $aboutData->id,'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
											/*	echo anchor("dashboard/delete_contactUs/". $contactAll->id,'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>')*/
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
		$('#about_us').DataTable({
			"order": []
		});
	});
</script>
