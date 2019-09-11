<?php $page = 'terms'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Show Terms & Condition</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Terms & Condition List</h2>
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
						<table id="terms_condition" class="table table-bordered table-striped table-actions">
							<thead>
							<tr>
								<th>Id</th>
								<th>Terms & Condition Title</th>
								<th>Terms & Condition Description</th>
								<th width="250">Action</th>
							</tr>
							</thead>
							<tbody>
							<?php if ($getAllTerms):?>
								<?php foreach ($getAllTerms as $getAllTerms):?>
									<tr>
										<td><?= $getAllTerms->id?></td>
										<td><?= $getAllTerms->term_title;?></td>
										<td><?= $getAllTerms->term_desc;?></td>
										<td>
											<?php
											echo anchor("dashboard/edit_terms/". $getAllTerms->id,'<button class="btn btn-info btn-condensed"><i class="fa fa-edit"></i></button>');
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
		$('#terms_condition').DataTable({
			"order": []
		});
	});
</script>
