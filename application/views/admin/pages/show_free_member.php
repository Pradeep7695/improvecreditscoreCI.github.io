<?php $page = 'user'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->
<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Member Details</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Free Member Details</h2>
</div>

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Package Details</h3>
								</div>
								<table class="table">
									<tbody>
									<tr>
										<td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Store"><i class="fa fa-shopping-cart fa-fw"></i></button></td>
										<td><a href="" target="_blank">Package Name</a></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Date Added"><i class="fa fa-calendar fa-fw"></i></button></td>
										<td>25/07/2019</td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Payment Method"><i class="fa fa-credit-card fa-fw"></i></button></td>
										<td>Cash On Delivery</td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Shipping Method"><i class="fa fa-truck fa-fw"></i></button></td>
										<td>Flat Shipping Rate</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-md-6">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title"><i class="fa fa-user"></i> Customer Details</h3>
								</div>
								<table class="table">
									<tbody><tr>
										<td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Customer Full Name"><i class="fa fa-user fa-fw"></i></button></td>
										<td> <?= $FreeMemberDetails->fname; ?>  <?= $FreeMemberDetails->lname;?>
										</td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Telephone No | Contact No"><i class="fa fa-phone fa-fw"></i></button></td>
										<td><?= $FreeMemberDetails->telephone?> / <?= $FreeMemberDetails->contactno?></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="E-Mail"><i class="fa fa-envelope-o fa-fw"></i></button></td>
										<td><a href="mailto:<?= $FreeMemberDetails->email?>"><?= $FreeMemberDetails->email?></a></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Pin Code | City"><i class="fa fa-location-arrow fa-fw"></i></button></td>
										<td><?= $FreeMemberDetails->pincode?> | <?= $FreeMemberDetails->city?></td>
									</tr>
									</tbody>
								</table>
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





