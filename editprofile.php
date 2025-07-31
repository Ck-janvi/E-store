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
                    <a class="breadcrumb-item text-dark" href="#">My Account</a>
                    <span class="breadcrumb-item active">Edit Profile</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-7">
            <h5 class="position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Profile Detail</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="">
                        <form id="myform">
                        <div class="col-lg-7 text-black">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="Abhishek"   value="">
                        </div>
                        
                        <div class="col-lg-7 text-black" style="margin-top:20px">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Kumar"  value="">
                        </div>
                        
                        <div class="col-lg-7 text-black" style="margin-top:20px">
                            <label>Gender</label>
                            <input class="form-control" type="" type="password" placeholder="" style="color:black;" value="Male">
                        </div>
                        <div class="col-lg-7 text-black" style="margin-top:20px">
                            <label>Address</label>
                            <input class="form-control" type="" type="password" placeholder="A2, Dipti Society, Gulbai Tekra, Navrangpura Ahmedabad"  value="">
                        </div>
                        <div class="col-lg-7 text-black" style="margin-top:20px">
                            <label>Phone Number</label>
                            <input class="form-control" type="" type="password" placeholder="6202127812"  value="">
                        </div>
                        <div style="margin-top: 30px; display:flex;justify-content:center;">
                        <button class="btn btn-block btn-primary font-weight-bold py-3" style="height: 50px; width:150px; padding: bottom 16px;">Update</button>
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
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