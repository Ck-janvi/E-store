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
    <link href="css/orderstyle.css" rel="stylesheet">

</head>

<body>
    <?php
        include './theme/header.php';
    ?>

    <?php
        include './theme/navbar.php';
    ?>

<div class="container">
    <article class="card">
        <header class="card-header"> My Orders</header>
        <div class="card-body">
            <h6>Order Amount: Rs. 5494.00</h6>
            <h6>Order ID: 05</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Estimated Delivery by:</strong> <br>2 FEB 2023 </div>
                    <div class="col"> <strong>Shipping BY:</strong> <br> E-store, | <i class="fa fa-phone"></i> +91 978 972 6831 </div>
                    <div class="col"> <strong>Status:</strong> <br> Out For Delivery </div>
                    <div class="col"> <strong>Tracking ID:</strong> <br> BD045903594059 </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Shipped</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> Out for Delivery </span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Delivered</span> </div>
            </div>
            <hr>
            <ul class="row">
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="./img/earphone1.jpg" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">boAt BassHeads 122  x 1</p> <span class="text-muted">Rs. 499 </span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="./img/earphone3.jpg" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">boAt Airdopes 141  x 5</p> <span class="text-muted">Rs. 4995 </span>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <hr>
            <a href="index.php" class="btn btn-primary" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to Home</a>
        </div>
    </article>
</div>

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