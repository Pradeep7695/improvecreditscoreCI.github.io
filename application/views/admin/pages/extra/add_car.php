<?php $page='car'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Car On Rent</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Car On Rent</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_car')?>';"><i class="fa fa-reply"></i> Car on Rent List Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/createCarRent',['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<div class="col-md-8 col-md-offset-2 feedback-data">
					<?php if ($msg = $this->session->userdata('feedback')): ?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<i class="fa fa-check-circle"></i> <p><?= $msg;?></p>
						</div>
					<?php endif;?>
				</div>
				<div class="panel-body">

					<div class="form-group">
						<label class="col-md-2 control-label">Car Description</label>
						<div class="col-md-10">
							<?= form_textarea(['class'=>'form-control','name'=>'car_desc','placeholder'=>'Car Description','value'=>set_value('car_desc')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Car On Rent Rules</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'car_rule','placeholder'=>'car on Rent Rules','value'=>set_value('car_rule')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Upload Image</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'car_img'])?>
						</div>
					</div>

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
