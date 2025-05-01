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
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-voilet">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">649 <i
                                                    class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="bx bx-cart-alt"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Amount Of Purchase</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">+23.4%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-primary-blue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">114 <i
                                                    class='bx bxs-down-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="bx bx-support"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Total Amount Of Sales</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">+14.7%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-rose">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">98 <i
                                                    class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="bx bx-tachometer"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Cancelled Orders</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">-12.9%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="card radius-15 bg-sunset">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h2 class="mb-0 text-white">208 <i
                                                    class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
                                        </div>
                                        <div class="ms-auto font-35 text-white"><i class="bx bx-user"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-white">Running Date</p>
                                        </div>
                                        <div class="ms-auto font-14 text-white">+13.6%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                    
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
    <!-- Vector map JavaScript -->
    <script src="backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="backend/assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
    <script src="backend/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="backend/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="backend/assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
    <script src="backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="backend/assets/js/index2.js"></script>
    <!-- App JS -->
    <script src="backend/assets/js/app.js"></script>
</body>


<!-- Mirrored from codervent.com/syndash/demo/vertical/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2024 16:21:56 GMT -->

</html>