


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
                        <div class="breadcrumb-title pe-3">Forms</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
							<button type="button" class="btn btn-primary" onclick="window.location.href='list_company_details.php';">
   Added Company Details
</button>
                                
                               
                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-7 mx-auto">
                            <h6 class="mb-0 text-uppercase">Create Company Name </h6>
                            <hr>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">Company Name Entry</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">Customer Name</label>
                                            <input  type="email" class="form-control" id="inputFirstName" name = "c_name">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Phone Number</label>
                                            <input   type="email" class="form-control" id="inputEmail" name = "c_ph">
                                        </div>

                                        <div class="col-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <textarea class="form-control" id="inputAddress" placeholder="Address..."
                                                rows="3" name = "c_address"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">GSTIN NUMBER</label>
                                            <input type="email" class="form-control" id="inputFirstName" name = "c_gst">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">Company Id Number</label>
                                            <input type="email" class="form-control" id="inputFirstName" name = "c_gst">
                                        </div>
										
                                       

										
                                        





                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-5">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--end row-->

                    <!--end row-->
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>
        <!--end page-wrapper-->
        <!--start overlay-->
        <div class="overlay toggle-btn-mobile"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--footer -->
		<?php include "footer.php"?>

        <!-- end footer -->
    </div>
    <!-- end wrapper -->
    <!--start switcher-->
    <div class="switcher-body">
        <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                class="bx bx-cog bx-spin"></i></button>
        <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
            tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <h6 class="mb-0">Theme Variation</h6>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="lightmode"
                        value="option1" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darkmode"
                        value="option2">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="darksidebar"
                        value="option3">
                    <label class="form-check-label" for="darksidebar">Semi Dark</label>
                </div>
                <hr>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="ColorLessIcons"
                        value="option3">
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
</body>


</html>