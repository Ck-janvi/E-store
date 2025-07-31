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
        <div class="row px-xl-5" style="display: flex; justify-content:center;">
            
            <div class="col-lg-6">
                <h5 class="position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Debit Card/Credit Card Payment</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-10 form-group text-black">
                            <label>Card Number</label>
                            <input class="form-control" type="text" placeholder="Enter Card Number">
                        </div>
                        <div class="col-md-4 form-group text-black">
                            <label>Expiry</label>
                            <input class="form-control" type="text" placeholder="MM/YY">
                        </div>
                        <div class="col-md-4 form-group text-black">
                            <label>CVV</label>
                            <input class="form-control" type="text" placeholder="Enter CVV">
                        </div>
                        <div class="col-md-10 form-group text-black">
                            <label>Name on Card</label>
                            <input class="form-control" type="text" placeholder="Enter name as on card">
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold py-3" onclick="myFunction()">PROCEED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        function myFunction(){
            window.location="order.php";
        }
        </script>

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