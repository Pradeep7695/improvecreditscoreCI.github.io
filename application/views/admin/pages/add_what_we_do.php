<?php $page='visa'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Add What We Do</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Add What We Do</h2>
	<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?= base_url('dashboard/show_what_we_do')?>';"><i class="fa fa-reply"></i> Back </button>
	</div>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart('dashboard/create_what_we_do',['class'=>'form-horizontal'])?>
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
						<label class="col-md-2 control-label">Title</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'we_do_title','placeholder'=>'What We Do Title','value'=>set_value('we_do_title')])?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label">Description</label>
						<div class="col-md-10">
							<?= form_textarea(['class'=>'ckeditor','name'=>'we_do_desc','placeholder'=>'What We Do Description','value'=>set_value('we_do_title')])?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Upload Image</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'file multiple','type'=>'file','id'=>'input-b3','data-browse-on-zone-click'=>'TRUE','data-show-upload'=>'false','data-show-caption'=>'true','name'=>'do_img'])?>
						</div>
					</div>

					<div class="form-group">
						<div class="btn-section">
							<?= form_button(['class'=>'btn btn-success','type'=>'submit','value'=>'Submit','content'=>'<i class="fa fa-send"></i> Submit'])?>
						<!--	<?= form_button(['class'=>'btn btn-danger','type'=>'reset','value'=>'Cancel','content'=>'<i class="fa fa-reply"></i> Cancel'])?>-->
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
