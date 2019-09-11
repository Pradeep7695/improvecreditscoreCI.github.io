<?php $page = 'user'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">All Member</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> All Member</h2>
</div>
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
<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="table-responsive">
						<table id="register-user" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Id</th>
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

							<?php if (count($registerUser)):
								$count = $this->uri->segment(3, 0); ?>
								<?php foreach ($registerUser as $registerUser):?>

									<tr>
										<td><?=++$count?></td>
										<td><a href="<?= base_url("dashboard/user_details/". $registerUser->id)?>"><?= $registerUser->fname;?></a></td>
										<td><?= $registerUser->lname;?></td>
										<td><?= $registerUser->telephone;?></td>
										<td><?= $registerUser->contactno;?></td>
										<td><?= $registerUser->email;?></td>
										<td><?= $registerUser->pincode;?></td>
										<td><?= $registerUser->city;?></td>
										<td>
											<?php
											echo anchor("dashboard/user_details/". $registerUser->id,'<button class="btn btn-info btn-condensed"><i class="fa fa-eye-slash"></i></button>');
											/*echo anchor("dashboard/deleteUser/". $registerUser->id,'<button class="btn btn-danger btn-condensed" onclick="return confirm(\'Are you sure you want to delete this ?\');"><i class="fa fa-trash"></i></button>')
											*/?>
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
