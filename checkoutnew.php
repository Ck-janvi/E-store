<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php

include './theme/header.php';

?>

<?php

include './theme/navbar.php';

?>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shopping cart</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <h5 class="position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Delivery Details</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group text-black">
                            <label>First Name *</label>
                            <input class="form-control" type="text" placeholder="Enter First Name">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>Last Name *</label>
                            <input class="form-control" type="text" placeholder="Enter Last Name">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>E-mail *</label>
                            <input class="form-control" type="text" placeholder="Enter Email Id">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>Mobile No *</label>
                            <input class="form-control" type="text" placeholder="Enter Mobile Number">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>House No., Building Name. *</label>
                            <input class="form-control" type="text" placeholder="Enter House number or Building name">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>Area, Colony, Road Name *</label>
                            <input class="form-control" type="text" placeholder="Enter Full Address">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>City *</label>
                            <input class="form-control" type="text" placeholder="Enter City">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>State *</label>
                            <input class="form-control" type="text" placeholder="Enter State">
                        </div>
                        <div class="col-md-6 form-group text-black">
                            <label>PIN Code *</label>
                            <input class="form-control" type="text" placeholder="Enter PIN Code">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row px-xl-5" style="display: flex; justify-content:center;">
            <div class="col-lg-6">
                <!-- <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        <div class="d-flex justify-content-between">
                            <p>Bose QuietComfort II</p>
                            <p> x 1</p>
                            <p>Rs. 25,990</p>

                        </div>
                        <div class="d-flex justify-content-between">
                            <p>OnePlus 10R 5G</p>
                            <p>   x 1</p>
                            <p>Rs. 33,990</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>OPPO K10 5G</p>
                            <p> x 1</p>
                            <p>Rs. 20,999</p>
                        </div>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>Rs. 80,979</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping Charges</h6>
                            <h6 class="font-weight-medium">0</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>Rs. 80,979</h5>
                        </div>
                    </div>
                </div> -->
                <div class="mb-5">
                    <h5 class="position-relative text-uppercase mb-3" style="text-align: center;"><span class="bg-secondary pr-3">Payment mode</span></h5>
                    <form method="get">
                    <div class="bg-light p-30">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal" value="1">
                                <label class="custom-control-label text-black" for="paypal">UPI</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="directcheck" value="2">
                                <label class="custom-control-label text-black" for="directcheck">Debit Card/Credit Card</label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="banktransfer" value="3">
                                <label class="custom-control-label text-black" for="banktransfer">Cash On Delivery</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
error_reporting(0);
$value = $_GET['payment'];
if ($value == 1){
    echo '<script>window.location="upi.php"</script>';
}
elseif ($value == 2){
    // header("location:card.php");
    echo '<script>window.location="card.php"</script>';

}

?>
    <!-- Checkout End -->


    <!-- Footer Start -->
   <?php
include './theme/footer.php';
   ?>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>