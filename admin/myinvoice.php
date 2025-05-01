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
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pe-3">Customer Invoice</div>
						<div class="ps-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Customer Invoice</li>
								</ol>
							</nav>
						</div>
						<div class="ms-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary"    onclick="window.location.href='add_invoice.php';" style="margin-right: 5px;">Add New Bill</button>
								<button type="button" class="btn btn-primary"   onclick="window.location.href='list_invoice.php';" >All Invoice</button>

								
								
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
                    <div id="invoiceContent1">

					<div class="card">
						<div class="card-body">
							<div id="invoice">
								<div class="toolbar ">
									<div class="text-end">
										<button type="button" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
										<button type="button" id="example21" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
									</div>
									<hr/>
								</div>
								<div class="invoice overflow-auto">
									<div style="min-width: 600px">
										<header>
											<div class="row">
												<div class="col">
													<a href="javascript:;">
														<img src="backend/assets/images/logo-icon.png" width="80" alt="" />
													</a>
												</div>
												<div class="col company-details">
													<h2 class="name">
												<a target="_blank" href="javascript:;">
												Subhashish Bannerjee
												</a>
											</h2>
													<div>kalyani Rathtala</div>
													<div>+91 97488 50860</div>
													<div>bapistea.in</div>
												</div>
											</div>
										</header>
										<main>
											<div class="row contacts">
												<div class="col invoice-to">
													<div class="text-gray-light">INVOICE TO:</div>
													<h2 class="to">Argha Protim Chakraborty</h2>
													<div class="address">Phone Number : 7449962787</div>
													<div>
													</div>
												</div>
												<div class="col invoice-details">
													<h1 class="invoice-id">INVOICE: BP-001</h1>
													<div class="date">Date of Invoice: 01/10/2018</div>
													<!-- <div class="date">Due Date: 30/10/2018</div> -->
												</div>
											</div>
											<table>
												<thead>
													<tr>
														<th>Sl no.</th>
														<th class="text-left">Product Name</th>
														<th class="text-right">Tea Price Per Kg</th>
														<th class="text-right">Tea Weight</th>
														<th class="text-right">TOTAL</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="no">01</td>
														<td class="text-left">
															<h3>
													<a target="_blank" href="javascript:;">
													Darjelling Tea
													</a></td>
														<td class="unit">Rs.200/Kg</td>
														<td class="qty">50 Kg</td>
														<td class="total">Rs.10000</td>
													</tr>
													
													
													
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td colspan="2">Total Amount</td>
														<td>$10000.00</td>
													</tr>
													<tr>
														<td colspan="2"></td>
														<td colspan="2">Discount Price</td>
														<td>$900</td>
													</tr>
                                                    <tr>
														<td colspan="2"></td>
														<td colspan="2">Paid Amount</td>
														<td>$90</td>
													</tr>
                                                    <tr>
														<td colspan="2"></td>
														<td colspan="2">Due Amount</td>
														<td>$810</td>
													</tr>
													<tr>
														<td colspan="2"></td>
														<td colspan="2">Net Total Amount</td>
														<td>$6,500.00</td>
													</tr>
												</tfoot>
											</table>
											<div class="thanks">Thank you!</div><br><br>
											<div class="thanks">With Bapis Tea</div><br><br>
											<div class="thanks" style="color:green">Paymeent Status : Full Payment</div>
                                            

											<div class="notices">
												<div>NOTICE:</div>
												<div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
											</div>
										</main>
										<footer>Invoice was created on a computer and is valid without the signature and seal.</footer>
									</div>
									<div></div>
								</div>
                                </div>
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
	<!-- App JS -->
	<script src="backend/assets/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
    document.getElementById('example21').addEventListener('click', function () {
        var element = document.getElementById('invoiceContent1'); // the part you want to export
        html2pdf().from(element).save('invoice.pdf'); // 'invoice.pdf' is the download filename
    });
</script>

</body>


</html>