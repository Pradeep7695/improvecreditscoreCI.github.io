<?php $page = 'domestic'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Credit Score Improvement Plans</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Credit Score Improvement Plans</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_credit_plan')?>';"><i class="fa fa-reply"></i> Back </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/createCreditPlan',['class'=>'form-horizontal'])?>
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
					<div class="form-group">
						<label class="col-md-2 control-label"> Credit Plan Name</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'plan_name','placeholder'=>'Credit Plan Name','value'=>set_value('plan_name')])?>
							<?= form_error('plan_name','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Package Price</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'price','placeholder'=>'Package Price','value'=>set_value('price')])?>
							<?= form_error('price','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Package Discount Price</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'discount_price','placeholder'=>'Package Discount Price','value'=>set_value('discount_price')])?>
							<?= form_error('discount_price','<div class="text-danger">','</div>')?>
						</div>
					</div>


					<div class="form-group">
						<label class="col-md-2 control-label">Package Sort Description</label>
						<div class="col-md-10">
							<?= form_textarea(['class'=>'ckeditor','name'=>'description','placeholder'=>'Description','value'=>set_value('description')])?>
							<?= form_error('description','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<?= form_hidden('created_at',date('d-m-y'))?>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
						</div>
					</div>

				</div>
			</div>
			<?= form_close()?>
		</div>
	</div>

</div>



<!-- ---------------..//end main content ----------------- -->

<?php include APPPATH ."views/admin/template/footer.php";?>

<script>
	$(document).ready(function() {
		$('#summernote').summernote({
			tabsize: 2,
			height: 100
		});
	});
</script>
