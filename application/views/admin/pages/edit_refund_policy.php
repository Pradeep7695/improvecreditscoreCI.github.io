<?php $page = 'about'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->

<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Refund Policy</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Edit Refund Policy</h2>
	<!--<div class="form-group pull-right">
		<button class="btn btn-info" onclick="window.location.href='<?/*= base_url('dashboard/show_domestic')*/?>';"><i class="fa fa-reply"></i> Back </button>
	</div>-->
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<?= form_open_multipart("dashboard/update_refund_policy/{$editRefundData->id}",['class'=>'form-horizontal'])?>
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
						<label class="col-md-2 control-label"> Refund Title</label>
						<div class="col-md-10">
							<?= form_input(['class'=>'form-control','name'=>'refund_title','placeholder'=>'Refund Policy Title','value'=>set_value('refund_title',$editRefundData->refund_title)])?>
							<?= form_error('refund_title','<div class="text-danger">','</div>')?>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Refund Policy Description</label>
						<div class="col-md-10">
							<textarea class="ckeditor" id="content" name="refund_desc"><?php echo $editRefundData->refund_desc?></textarea>
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
