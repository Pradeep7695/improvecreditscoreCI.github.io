<?php $page = 'user'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->
<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Member Details</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Member Details List</h2>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title"><i class="fa fa-user"></i> Member Details</h3>
								</div>
								<table class="table">
									<tbody><tr>
										<td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Customer Full Name"><i class="fa fa-user fa-fw"></i></button></td>
										<td> <?= $userDetails->fname; ?>  <?= $userDetails->lname;?>
										</td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Telephone No | Contact No"><i class="fa fa-phone fa-fw"></i></button></td>
										<td><?= $userDetails->telephone?> / <?= $userDetails->contactno?></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="E-Mail"><i class="fa fa-envelope-o fa-fw"></i></button></td>
										<td><a href="mailto:<?= $userDetails->email?>"><?= $userDetails->email?></a></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Pin Code | City"><i class="fa fa-location-arrow fa-fw"></i></button></td>
										<td><?= $userDetails->pincode?> | <?= $userDetails->city?></td>
									</tr>
									</tbody></table>
							</div>
						</div>
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





