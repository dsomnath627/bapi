<!DOCTYPE html>
<html lang="en">


<?php include "header.php"?>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<?php include "sidebar.php"?>

		<!--end sidebar-wrapper-->
		<!--header-->
		<?php include "navbar.php"?>

		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Tables</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Data Table</li>
								</ol>
							</nav>
						</div>
						<div class="ms-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary"  onclick="window.location.href='list_company_details.php';">Add Conpamy Details</button>
								
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card">
						
					</div>
					<div class="card">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">List Of Company</h4>
							</div>
							<hr/>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>Sl No.</th>
											<th>Company Name</th>
											<th>Company Address</th>
											<th>Company Phone No.</th>
											<th>GSTIN no.</th>
											
											<th>Action</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Green Tea</td>
											<td>Darjeeling</td>
											<td>9876543210</td>
											<td>GR45625</td>
											
											<td>
												<button type="button" class="btn btn-outline-danger m-1" onclick="window.location.href='edit_company_details.php';"><i class='bx bx-edit'></i>
											</button>
											<button type="button" class="btn btn-outline-info m-1"><i class='lni lni-eraser'></i>
							</button>
										</td>
											
										</tr>
										
									
										
									</tbody>
									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<?php include "footer.php"?>

		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-body">
		<button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bx bx-cog bx-spin"></i></button>
		<div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
		  <div class="offcanvas-header border-bottom">
			<h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
			<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
		  </div>
		  <div class="offcanvas-body">
			<h6 class="mb-0">Theme Variation</h6>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode" value="option1" checked>
			  <label class="form-check-label" for="lightmode">Light</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode" value="option2">
			  <label class="form-check-label" for="darkmode">Dark</label>
			</div>
			<hr>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar" value="option3">
				<label class="form-check-label" for="darksidebar">Semi Dark</label>
			  </div>
			  <hr>
			 <div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons" value="option3">
				<label class="form-check-label" for="ColorLessIcons">Color Less Icons</label>
			  </div>
		  </div>
		</div>
	   </div>
	   <!--end switcher-->
	<!-- JavaScript -->
	<!-- Bootstrap JS -->
	<script src="backend/assets/js/bootstrap.bundle.min.js"></script>
	
	<!--plugins-->
	<script src="backend/assets/js/jquery.min.js"></script>
	<script src="backend/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="backend/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Data Tables js-->
	<script src="backend/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function () {
			//Default data table
			$('#example').DataTable();
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
			});
			table.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
	<!-- App JS -->
	<script src="backend/assets/js/app.js"></script>
</body>


</html>