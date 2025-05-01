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
                        <div class="breadcrumb-title pe-3">saless</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">sales Entry</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href='list_purchase_product.php';">
                                    saless Product Details List
                                </button>


                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <h6 class="mb-0 text-uppercase">Create saless Product Entry</h6>
                            <hr>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">


                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">sales Product Entry</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">Purchase Type</label>

                                            <select class="form-select" id="inputGroupSelect01" name="tea_purchasetype">

                                                <option value="personalcompany">Personal Company</option>
                                                <option value="teaboard_auction">TeaBoard Auction</option>
                                                <option value="mjunction_auction">M-Junction Auction</option>

                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputFirstName" class="form-label">Company Name</label>
                                            <select class="form-select" id="inputGroupSelect01" name="tea_companyname">
                                                <!-- company name is take from database -->
                                                <option value="personalcompany">Company Name</option>


                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Garden Name</label>
                                            <select class="form-select" id="inputGroupSelect01" name="tea_gardenname">

                                                <option value="personalcompany">Garden NAme</option>

                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Garden Invoive Number</label>
                                            <select class="form-select" id="inputGroupSelect01"
                                                name="tea_grdninvoiceno">

                                                <option value="personalcompany">Garden Invoice No</option>

                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Tea Category</label>
                                            <select class="form-select" id="inputGroupSelect01" name="tea_category">
                                                <!-- company name is take from database -->
                                                <option value="personalcompany">CTC</option>
                                                <option value="personalcompany">LEAF</option>



                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Tea Grade</label>
                                            <select class="form-select" id="inputGroupSelect01" name="tea_grade">
                                                <!-- company name is take from database -->
                                                <option value="personalcompany">FOP-12</option>



                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="teaprice" class="form-label">Tea Price Per Kg</label>
                                            <input type="number" class="form-control" id="teaprice" name="teaprice"
                                                step="any">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="weight" class="form-label">Weight of Tea Per Bag</label>
                                            <input type="number" class="form-control" id="weight" name="tea_weight"
                                                step="any">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="bags" class="form-label">sales the Number of bags</label>
                                            <input type="number" class="form-control" id="bags" name="tea_bagno"
                                                step="any">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="gst" class="form-label">GST Price (%)</label>
                                            <input type="number" class="form-control" id="gst" name="tea_gst"
                                                step="any">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="total" class="form-label">Total Price Of Tea</label>
                                            <input type="text" class="form-control" id="total" name="totalprice"
                                                readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="datetime" class="form-label">sales Entry Date & Time</label>
                                            <input type="datetime-local" class="form-control" id="datetime" name="date">
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


    <script>
    const teaPriceInput = document.getElementById('teaprice');
    const weightInput = document.getElementById('weight');
    const bagsInput = document.getElementById('bags');
    const gstInput = document.getElementById('gst');
    const totalInput = document.getElementById('total');

    function calculateTotal() {
        const pricePerKg = parseFloat(teaPriceInput.value) || 0;
        const weightPerBag = parseFloat(weightInput.value) || 0;
        const bags = parseInt(bagsInput.value) || 0;
        const gst = parseFloat(gstInput.value) || 0;

        const subtotal = pricePerKg * weightPerBag * bags;
        const gstAmount = (gst / 100) * subtotal;
        const total = subtotal + gstAmount;

        totalInput.value = total.toFixed(2);
    }

    // Trigger calculation when any relevant input changes
    teaPriceInput.addEventListener('input', calculateTotal);
    weightInput.addEventListener('input', calculateTotal);
    bagsInput.addEventListener('input', calculateTotal);
    gstInput.addEventListener('input', calculateTotal);
    </script>
</body>


</html>