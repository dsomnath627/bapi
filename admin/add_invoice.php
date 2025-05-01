<!DOCTYPE html>
<html lang="en">


<?php include "header.php"?>

<style>
    .red-text {
        color: red;
    }
</style>

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
                        <div class="breadcrumb-title pe-3">Saless</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Sales Entry</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="ms-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href='list_invoice.php';">
                                    All Invoice
                                </button>


                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-10 mx-auto">
                            <h6 class="mb-0 text-uppercase">Create Customer Invoice</h6>
                            <hr>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">


                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">Invoice Management</h5>
                                    </div>
                                    <hr>
                                    <form class="row g-3">
                             

                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Invoice Number</label>
                                            <input type="text" class="form-control" name="invoiceno" value="BP-001">

                                        </div>

                                        <div class="col-md-6">
                                            <label for="teaprice" class="form-label">Invoice Date</label>
                                            <input type="datetime-local" class="form-control" name="invoicedate">

                                        </div>


                                        <div class="col-md-6">
                                            <label for="bags" class="form-label">Customer Name</label>

                                            <input type="text" class="form-control" name="customername" step="any">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="bags" class="form-label">Customer Phone Number</label>

                                            <input type="text" class="form-control" name="customerphone" step="any">
                                        </div>


                                        <div class="col-md-12">
                                            <table class="table table-bordered" id="teaTable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tea Name</th>
                                                        <th>Price per Kg</th>
                                                        <th>Stock</th>

                                                        <th>Quantity</th>
                                                        <th>Total Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="teaTableBody">
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <select class="form-select teaname">
                                                                <option value="darjeeling" data-price="0">Select Tea
                                                                    Name</option>

                                                                <option value="darjeeling" data-price="200">Darjeeling
                                                                    Tea</option>
                                                                <option value="green" data-price="250">Green Tea
                                                                </option>
                                                                <option value="white" data-price="300">White Tea
                                                                </option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" class="form-control priceperkg" readonly>
                                                        </td>
                                                        <td>80 kg</td>

                                                        <td><input type="number" class="form-control teaquantity"></td>
                                                        <td><input type="text" class="form-control totalprice" readonly>
                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-success m-1 addRow">+</button>
                                                            <button type="button"
                                                                class="btn btn-danger m-1 deleteRow">-</button>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>







                                        </div>
                                        <div class="col-md-6">
                                            <label for="bags" class="form-label">Total Amount Of Product</label>
                                            <input type="text" id="grandtotal" class="form-control" name="totalprice"
                                                readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bags" class="form-label">Discount Percentage</label>
                                            <input type="number" class="form-control" id="discountpercentage"
                                                name="discountprice" oninput="calculateGrandTotal()">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="bags" class="form-label">Grand Total (Paid Amount)</label>
                                            <input type="text" class="form-control" id="totalpriceamount"
                                                name="grandtotal" readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="paidAmount" class="form-label">Paid Amount</label>
                                            <input type="number" class="form-control" id="paidAmount"
                                                oninput="calculateDueAmount()">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="dueAmount" class="form-label">Due Amount</label>
                                            <input type="text" class="form-control" id="dueAmount" readonly>
                                        </div>
                                        <div class="col-md-6">
        <label for="inputEmail" class="form-label">Payment Status</label>
        <select class="form-select" id="paymentStatus" name="payment_type" onchange="updateHeadline()">
            <option value="fullpayment">Full Payment</option>
            <option value="advancepayment">Advance Payment</option>
            <option value="nopayment">No Payment</option>
        </select>
    </div>
  
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Payment type</label>
                                            <select class="form-select" id="inputGroupSelect01" name="payment_type">

                                                <option value="personalcompany">UPI</option>
                                                <option value="personalcompany">CASH</option>
                                                <option value="personalcompany">Net Banking</option>



                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail" class="form-label">Order Place</label>
                                            <select class="form-select" id="inputGroupSelect01" name="orderpalce">
                                                <option value="personalcompany" data-price="100">In West Bengal</option>
                                                <option value="personalcompany" data-price="200">Out Of the West Bengal
                                                </option>

                                            </select>
                                        </div>
                                        <div id="invoiceStatusHeadline"></div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-5">Entry Data</button>
                                        </div>
                                       
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--end row-->
                    <script>
    function updateHeadline() {
        var paymentStatus = document.getElementById('paymentStatus').value;
        var headline = document.getElementById('invoiceStatusHeadline');

        if (paymentStatus === 'nopayment') {
    headline.innerHTML = "<h5 class='red-text'>No Payment Invoice Bill</h5>";
} 

       
        
        else {
            headline.innerHTML = "";
        }
    }
</script>
                    <script>
                    function calculateGrandTotal() {
                        // Get the total amount and discount percentage from the inputs
                        var totalAmount = parseFloat(document.getElementById('grandtotal').value);
                        var discountPercentage = parseFloat(document.getElementById('discountpercentage').value);

                        // Calculate the discount amount
                        var discountAmount = (discountPercentage / 100) * totalAmount;

                        // Calculate the grand total after applying the discount
                        var grandTotal = totalAmount - discountAmount;

                        // Display the calculated grand total
                        document.getElementById('totalpriceamount').value = grandTotal.toFixed(4);

                        // Recalculate the due amount when the grand total changes
                        calculateDueAmount();
                    }

                    function calculateDueAmount() {
                        // Get the grand total and paid amount
                        var grandTotal = parseFloat(document.getElementById('totalpriceamount').value);
                        var paidAmount = parseFloat(document.getElementById('paidAmount').value);

                        // If paid amount is 0, set due amount to 00
                        if (paidAmount === 0) {
                            document.getElementById('dueAmount').value = "00";
                        } else {
                            // Calculate the due amount
                            var dueAmount = grandTotal - paidAmount;

                            // If the due amount is less than 0, set it to 0 (not allowing negative due)
                            dueAmount = dueAmount < 0 ? 0 : dueAmount;

                            // Display the calculated due amount
                            document.getElementById('dueAmount').value = dueAmount.toFixed(2);
                        }
                    }
                    </script>
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
    document.addEventListener('DOMContentLoaded', function() {
        const teaTableBody = document.getElementById('teaTableBody');
        const grandtotal = document.getElementById('grandtotal');

        // Function to update total price per row
        function updateRowTotal(row) {
            const pricePerKg = parseFloat(row.querySelector('.priceperkg').value) || 0;
            const quantity = parseFloat(row.querySelector('.teaquantity').value) || 0;
            const totalPrice = pricePerKg * quantity;
            row.querySelector('.totalprice').value = totalPrice.toFixed(2);
            updateGrandTotal();
        }

        // Function to update grand total
        function updateGrandTotal() {
            let grandTotal = 0;
            const rows = teaTableBody.querySelectorAll('tr');
            rows.forEach(row => {
                const totalPrice = parseFloat(row.querySelector('.totalprice').value) || 0;
                grandTotal += totalPrice;
            });
            grandtotal.value = grandTotal.toFixed(2);
        }

        // Event listener for selecting tea type
        teaTableBody.addEventListener('change', function(event) {
            if (event.target.classList.contains('teaname')) {
                const row = event.target.closest('tr');
                const selectedOption = event.target.selectedOptions[0];
                const pricePerKg = parseFloat(selectedOption.getAttribute('data-price')) || 0;
                row.querySelector('.priceperkg').value = pricePerKg;
                updateRowTotal(row);
            }
        });

        // Event listener for quantity input
        teaTableBody.addEventListener('input', function(event) {
            if (event.target.classList.contains('teaquantity')) {
                const row = event.target.closest('tr');
                updateRowTotal(row);
            }
        });

        // Event listener for adding a new row
        teaTableBody.addEventListener('click', function(event) {
            if (event.target.classList.contains('addRow')) {
                const newRow = teaTableBody.querySelector('tr').cloneNode(true);
                teaTableBody.appendChild(newRow);
                updateGrandTotal();
            }
        });

        // Event listener for deleting a row
        teaTableBody.addEventListener('click', function(event) {
            if (event.target.classList.contains('deleteRow')) {
                const row = event.target.closest('tr');
                if (teaTableBody.rows.length > 1) {
                    teaTableBody.removeChild(row);
                    updateGrandTotal();
                }
            }
        });
    });
    </script>

</body>


</html>