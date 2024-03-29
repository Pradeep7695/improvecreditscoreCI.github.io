<!DOCTYPE html>
<html lang="en" class="body-full-height">

<head>
	<!-- META SECTION -->
	<title>Improve Credit Score</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- END META SECTION -->

	<!-- CSS INCLUDE -->
	<link rel="stylesheet" type="text/css" id="theme" href="<?= base_url('assets/admin/css/theme-default.css')?>"/>
	<!-- EOF CSS INCLUDE -->
</head>
<body>

<div class="login-container">

	<div class="login-box animated fadeInDown">
		<div class="login-logo"></div>
		<div class="login-body">
			<?php if ($msg = $this->session->userdata('failed')): ?>
			  <?php if ($failed = $this->session->userdata('failed_icon'))?>
				<div class="alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?= $failed?>	<?= $msg;?>
				</div>
			<?php endif;?>
			<div class="login-title text-center"><strong>Welcome</strong>, Please login</div>
			<?= form_open('admin/login',['class'=>'form-horizontal','autocomplete'=>'off'])?>
				<div class="form-group">
					<div class="col-md-12">
						<?= form_input(['class'=>'form-control','name'=>'username','placeholder'=>'Username','value'=>set_value('name')])?>
						<?= form_error('username','<div class="alert alert-dismissible alert-primary"><button type="button" class="close" data-dismiss="alert">&times;</button><strong></strong> ', '</div>');?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<?= form_password(['class'=>'form-control','name'=>'password','placeholder'=>'Password'])?>
						<?= form_error('password','<div class="alert alert-dismissible alert-primary"><button type="button" class="close" data-dismiss="alert">&times;</button><strong></strong> ', '</div>');?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6 admin-login">
						<?= form_submit(['name'=>'submit','class'=>'btn btn-info btn-block','value'=>'Login','data-loading-text'=>'Loading...']);?>
					</div>
				</div>
			</form>
		</div>
		<div class="login-footer">
			<div class="pull-left">
				&copy; <?php date('Y') ?> Improve Credit Score
			</div>
		</div>
		<div class="login-footer poweredby">
			<div class="pull-right">
			Powered by <a href="https://www.itarsia.com/" target="_blank">Itarsia India</a>
			</div>
		</div>
	</div>

   </div>

<script type="text/javascript" src="<?= base_url('assets/admin/js/plugins/jquery/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/admin/js/plugins/jquery/jquery-ui.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/admin/js/plugins/bootstrap/bootstrap.min.js')?>"></script>

<script>
	$('input[type="submit"]').on('click', function () {
		var $btn = $(this).val($(this).data('loading-text'))
	})
</script>

</body>

</html>






