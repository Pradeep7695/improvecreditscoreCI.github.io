<?php $page='travel'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Travel Insurance</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add Travel Insurance</h2>
	<div class="form-group pull-right">
		<button class="btn btn-warning" onclick="window.location.href='<?= base_url('dashboard/add_travel_Insurance','refresh')?>';"><i class="fa fa-refresh"></i> Refresh</button>
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/showTravelInsurance')?>';"><i class="fa fa-reply"></i> Travel Insurance List Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/createTravelInsurance',['class'=>'form-horizontal'])?>
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
						<label class="col-md-2 control-label">Travel Insurance Description</label>
						<div class="col-md-10">
							<?= form_textarea(['class'=>'ckeditor','name'=>'travel_desc','placeholder'=>'Travel Insurance Description','value'=>set_value('travel_desc')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Travel Insurance Rules</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'travel_rule','placeholder'=>'Travel Insurance Rules','value'=>set_value('travel_rule')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Upload Image</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'travel_img'])?>
						</div>
					</div>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
							<!--<?= form_button(['class'=>'btn btn-danger','type'=>'reset','value'=>'Cancel','content'=>'<i class="fa fa-reply"></i> Cancel'])?>-->
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
