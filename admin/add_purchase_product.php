
<?php
// Database connection
$host = "localhost";
$username = "root";   // your database username
$password = "";       // your database password
$database = "your_database";  // your database name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the posted arrays
$gardenlotno = $_POST['tea_gardenlotno'];
$chestno = $_POST['tea_chestno'];
$grdninvoiceno = $_POST['tea_grdninvoiceno'];
$category = $_POST['tea_category'];
$grade = $_POST['tea_grade'];
$teaname = $_POST['tea_name'];
$teaprice = $_POST['teaprice'];
$weight = $_POST['tea_weight'];
$bagno = $_POST['tea_bagno'];
$gst = $_POST['tea_gst'];
$totalprice = $_POST['totalprice'];

// Loop through each row
for($i = 0; $i < count($gardenlotno); $i++) {
    $sql = "INSERT INTO tea_details (
        tea_gardenlotno,
        tea_chestno,
        tea_grdninvoiceno,
        tea_category,
        tea_grade,
        tea_name,
        teaprice,
        tea_weight,
        tea_bagno,
        tea_gst,
        totalprice
    ) VALUES (
        '".mysqli_real_escape_string($conn, $gardenlotno[$i])."',
        '".mysqli_real_escape_string($conn, $chestno[$i])."',
        '".mysqli_real_escape_string($conn, $grdninvoiceno[$i])."',
        '".mysqli_real_escape_string($conn, $category[$i])."',
        '".mysqli_real_escape_string($conn, $grade[$i])."',
        '".mysqli_real_escape_string($conn, $teaname[$i])."',
        '".mysqli_real_escape_string($conn, $teaprice[$i])."',
        '".mysqli_real_escape_string($conn, $weight[$i])."',
        '".mysqli_real_escape_string($conn, $bagno[$i])."',
        '".mysqli_real_escape_string($conn, $gst[$i])."',
        '".mysqli_real_escape_string($conn, $totalprice[$i])."'
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Row $i inserted successfully.<br>";
    } else {
        echo "Error inserting row $i: " . mysqli_error($conn) . "<br>";
    }
}

mysqli_close($conn);
?>

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
                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href='list_purchase_products.php';">
                                    Purchase Product Details List
                                </button>


                            </div>
                        </div>
                    </div>
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-12 mx-auto">
                            <h6 class="mb-0 text-uppercase">Create Purchase Product</h6>
                            <hr>
                            <div class="card border-top border-0 border-4 border-primary">
                                <div class="card-body p-5">


                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                                        </div>
                                        <h5 class="mb-0 text-primary">Purchase Product Entry</h5>
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
                                            <label for="inputFirstName" class="form-label">Company name</label>

                                            <select class="form-select" id="inputGroupSelect01" name="tea_purchasetype">

                                                <option value="personalcompany">Company Name 1</option>
                                                <option value="mjunction_auction">Comapny NAme 2</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="datetime" class="form-label">Garden name</label>
                                            <input type="text" class="form-control" name="tea_gardenname">
                                        </div>
                                        <div class="col-md-12">
                                            <button id="addRowBtn" class="btn btn-success mb-12">Add New Row</button>

                                        </div>
                                        <table class="table table-bordered" id="teaTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Garden Lot No.</th>
            <th>Chest No</th>
            <th>Garden Invoice Number</th>
            <th>Tea Category</th>
            <th>Tea Grade</th>
            <th>Tea Name</th>
            <th>Tea Price Per Kg</th>
            <th>Weight of Tea Per Bag</th>
            <th>Tea Bag Numbers</th>
            <th>GST Price (%)</th>
            <th>Total Price Of Tea</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="teaTableBody">
    <tr>
            <td>1</td>
            <td><input type="text" class="form-control" name="tea_gardenlotno[]"></td>
            <td><input type="text" class="form-control" name="tea_chestno[]"></td>
            <td><input type="text" class="form-control" name="tea_grdninvoiceno[]"></td>
            <td>
                <select class="form-select" name="tea_category[]">
                    <option value="CTC">CTC</option>
                    <option value="LEAF">LEAF</option>
                </select>
            </td>
            <td><input type="text" class="form-control" name="tea_grade[]"></td>
            <td><input type="text" class="form-control" name="tea_name[]"></td>
            <td><input type="number" class="form-control teaprice" name="teaprice[]" step="any"></td>
            <td><input type="number" class="form-control tea_weight" name="tea_weight[]" step="any"></td>
            <td><input type="number" class="form-control tea_bagno" name="tea_bagno[]" step="any"></td>
            <td><input type="number" class="form-control tea_gst" name="tea_gst[]" step="any"></td>
            <td><input type="text" class="form-control totalprice" name="totalprice[]" readonly></td>
            <td>
                <button type="button" class="btn btn-success m-1 addRow">+</button>
                <button type="button" class="btn btn-danger m-1 deleteRow">-</button>
            </td>
        </tr>
    </tbody>
</table>


                                        <div class="col-md-6">
                                            <label for="datetime" class="form-label">Purchase Entry Date & Time</label>
                                            <input type="datetime-local" class="form-control" name="date" id="datetime">
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
document.addEventListener('DOMContentLoaded', function() {
    attachEventListeners();
});

function attachEventListeners() {
    const tableBody = document.getElementById('teaTableBody');

    tableBody.querySelectorAll('.teaprice, .tea_weight, .tea_bagno, .tea_gst').forEach(function(input) {
        input.oninput = function() {
            var row = this.closest('tr');
            calculateRowTotal(row);
        };
    });

    tableBody.querySelectorAll('.addRow').forEach(function(button) {
        button.onclick = function() {
            addRow();
        };
    });

    tableBody.querySelectorAll('.deleteRow').forEach(function(button) {
        button.onclick = function() {
            deleteRow(this);
        };
    });
}

function calculateRowTotal(row) {
    var priceperKg = parseFloat(row.querySelector('.teaprice').value) || 0;
    var weightperbag = parseFloat(row.querySelector('.tea_weight').value) || 0;
    var numberOfbag = parseFloat(row.querySelector('.tea_bagno').value) || 0;
    var gstpercent = parseFloat(row.querySelector('.tea_gst').value) || 0;

    var subtotal = priceperKg * weightperbag * numberOfbag;
    var gstamount = (subtotal * gstpercent) / 100;
    var total = subtotal + gstamount;

    row.querySelector('.totalprice').value = total.toFixed(2);
}

function addRow() {
    const tableBody = document.getElementById('teaTableBody');
    var newRow = tableBody.rows[0].cloneNode(true);

    // Reset input values
    newRow.querySelectorAll('input').forEach(function(input) {
        if (input.type !== 'button') {
            input.value = '';
        }
    });
    newRow.querySelector('select').selectedIndex = 0;
    
    tableBody.appendChild(newRow);
    updateRowNumbers();
    attachEventListeners(); // Reattach event listeners for new row
}

function deleteRow(button) {
    const tableBody = document.getElementById('teaTableBody');
    if (tableBody.rows.length > 1) {
        button.closest('tr').remove();
        updateRowNumbers();
    } else {
        alert("At least one row must remain!");
    }
}

function updateRowNumbers() {
    const tableBody = document.getElementById('teaTableBody');
    for (let i = 0; i < tableBody.rows.length; i++) {
        tableBody.rows[i].cells[0].innerHTML = i + 1;
    }
}
</script>

</body>


</html>