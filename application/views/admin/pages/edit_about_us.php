<?php $page = 'about2'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">About Us</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit About Us</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_about_us')?>';"><i class="fa fa-reply"></i> About Us Table </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart("dashboard/update_about_us/{$editAbout->id}",['class'=>'form-horizontal'])?>
			<div class="panel panel-default">
				<div class="col-md-8 col-md-offset-2 feedback-data">
					<?php if ($msg = $this->session->userdata('feedback')):?>
						<?php $feedback_class = $this->session->userdata('feedback_class');?>
						<div class="alert alert-dismissible <?= $feedback_class?>">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<i class="fa fa-check-circle"></i> <p><?= $msg;?></p>
						</div>
					<?php endif;?>
				</div>
				<div class="panel-body">

					<div class="form-group">
						<label class="col-md-3 control-label">About Us Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="about_desc"><?php echo $editAbout->about_desc?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Who We Are Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="who_we_are"><?php echo $editAbout->who_we_are?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Vision & Mission Description</label>
						<div class="col-md-9">
							<textarea class="ckeditor" id="content" name="vision_mission"><?php echo $editAbout->vision_mission?></textarea>
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
