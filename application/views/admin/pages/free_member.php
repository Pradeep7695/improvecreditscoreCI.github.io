<?php $page = 'user'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Free Member</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Free Member List</h2>
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

							<?php if (count($freeMember)):
								$count = $this->uri->segment(3, 0); ?>
								<?php foreach ($freeMember as $freeMember):?>
								<tr>
									<td><?=++$count?></td>
									<td><a href="<?= base_url("dashboard/show_free_member_details/". $freeMember->id)?>"><?= $freeMember->fname;?></a></td>
									<td><?= $freeMember->lname;?></td>
									<td><?= $freeMember->telephone;?></td>
									<td><?= $freeMember->contactno;?></td>
									<td><?= $freeMember->email;?></td>
									<td><?= $freeMember->pincode;?></td>
									<td><?= $freeMember->city;?></td>
									<td>
										<?php
							      	       echo anchor("dashboard/show_free_member_details/". $freeMember->id,'<button class="btn btn-info btn-condensed"><i class="fa fa-eye-slash"></i></button>');
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
