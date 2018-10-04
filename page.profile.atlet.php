<?php include 'page_header.php';?>
<?php
include 'data/alldata.php';
$namanya = generateName();
?>

<div class="content content-full">
	<div class="block block-rounded block-bordered">
		<div class="block-header block-header-default text-center">
			<h3 class="block-title"><?php echo $namanya['nama'];?> </h3>
		</div>
		<div class="block-content block-content-full">


			<!-- start -->
			
			<div class="content content-boxed">
				<div class="row row-deck">
					<div class="col-md-12">
						<a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
							<div class="block-content block-content-full text-center bg-body-light">
								<img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar4.jpg" alt="">
								<div class="mt-2">
									<p class="font-w600 mb-0">
										<?php echo $namanya['nama'];?> <span class="font-w400 text-muted mb-0">| <?php echo $namanya['cabor'];?></span>
									</p>
								</div>
							</div>
							<div class="block-content block-content-full text-center">
								<div class="row gutters-tiny">
									<div class="col-4">
										<div class="item item-circle mx-auto">
											<i class="fa fa-fw fa-boxes fa-2x text-warning"></i>
										</div>
										<p class="text-muted mb-0">
											16 Emas
										</p>
									</div>
									<div class="col-4">
										<div class="item item-circle mx-auto">
											<i class="fa fa-fw fa-users fa-2x "></i>
										</div>
										<p class="text-muted mb-0">
											17 Perak
										</p>
									</div>
									<div class="col-4">
										<div class="item item-circle mx-auto">
											<i class="fa fa-fw fa-users fa-2x text-danger"></i>
										</div>
										<p class="text-muted mb-0">
											8 Perunggu
										</p>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-md-12">
						<div class="block block-rounded block-bordered block-link-shadow">
							<div class="block-content">
								<table class="table table-borderless table-striped">
									<tbody>
										<tr>
											<td>
												<i class="fa fa-fw fa-id-badge mr-1"></i> <?php echo $namanya['nama'];?>
											</td>
										</tr>

										<tr>
											<td>
												<i class="fa fa-fw fa-birthday-cake mr-1 text-success"></i> 10 Agustus 1998
											</td>
										</tr>
										
										<tr>
											<td>
												<i class="fa fa-fw fa-tags mr-1"></i>
												<a class="badge badge-primary text-uppercase font-w600" href="javascript:void(0)">Menengah</a>
												<a class="badge badge-primary text-uppercase font-w600" href="javascript:void(0)">Berat</a>
											
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>


				</div>
				
			</div>
			<!-- end -->
			
		</div>
	</div>


</div>
<?php include 'page_footer.php';?>