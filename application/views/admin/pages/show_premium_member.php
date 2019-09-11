<?php $page = 'user'; include APPPATH ."views/admin/template/head.php";?>

<?php include APPPATH ."views/admin/template/navigation.php";?>

<?php include APPPATH ."views/admin/template/header.php";?>

<!-- ------------------maine content start here --------------- -->
<ul class="breadcrumb">
	<li><a href="#">Home</a></li>
	<li class="active">Member Details</li>
</ul>

<div class="page-title">
	<h2><span class="fa fa-arrow-circle-o-left"></span> Premium Member Details</h2>
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
									<h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Package Details</h3>
								</div>
								<table class="table">
									<tbody>
									<tr>
										<td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Package Name"><i class="fa fa-shopping-cart fa-fw"></i></button></td>
										<td><?= $PremiumMemberDetails->plan_name?></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Package Name"><i class="fa fa-inr fa-fw"></i></button></td>
										<td><i class="fa fa-inr"></i> <?= $PremiumMemberDetails->amount?> /-</td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Date & Time"><i class="fa fa-calendar fa-fw"></i></button></td>
										<td><?= $PremiumMemberDetails->created_at?></td>
									</tr>
									<tr>
										<td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Package Validity"><i class="fa fa-calendar-check-o fa-fw"></i></button></td>
										<td><?= $PremiumMemberDetails->package_validity?></td>
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





