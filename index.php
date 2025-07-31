<?php
include './class/atclass.php';

$user_q = "SELECT COUNT(*) AS COUNT FROM `user_type`";
$trek_q = "SELECT COUNT(*) AS COUNT1 FROM `product_tbl`;";
$book_q = "SELECT COUNT(*) AS COUNT2 FROM `orders_tbl`;";
$payment_q = "SELECT SUM(order_amount) AS Total FROM `orders_tbl`;";



$result_user = mysqli_query($connection,$user_q);
$num = mysqli_num_rows($result_user);
if ($num == 1) {

    while ($row = $result_user->fetch_assoc()) {
        $p = $row['COUNT'];
        //echo ($_SERVER[$username]);
        // echo($p);
    }
}

$result_user1 = mysqli_query($connection,$trek_q);
$num1 = mysqli_num_rows($result_user1);
if ($num1 == 1) {

    while ($row = $result_user1->fetch_assoc()) {
        $t = $row['COUNT1'];
        //echo ($_SERVER[$username]);
        // echo($p);
    }
}

$result_user2 = mysqli_query($connection,$book_q);
$num2 = mysqli_num_rows($result_user2);
if ($num2 == 1) {

    while ($row = $result_user2->fetch_assoc()) {
        $s = $row['COUNT2'];
        //echo ($_SERVER[$username]);
        // echo($s);
    }
}

$result_user3 = mysqli_query($connection,$payment_q);
$num3 = mysqli_num_rows($result_user3);
if ($num3 == 1) {

    while ($row = $result_user3->fetch_assoc()) {
        $n = $row['Total'];
        //echo ($_SERVER[$username]);
        // echo($s);
    }
}

// $result_user4 = mysqli_query($connection,$volunteer_q);
// $num4 = mysqli_num_rows($result_user4);
// if ($num4 == 1) {

//     while ($row = $result_user4->fetch_assoc()) {
//         $l = $row['COUNT4'];
//         //echo ($_SERVER[$username]);
//         // echo($s);
//     }
// }

?>
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <?php

        include 'theampart1/header.php';
        ?>
        <?php
        include './theampart1/sidebar.php';      
        ?>
        <div class="page-container">
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo($p) ?></h2>
                                    <span class="desc" style="color:black;">USERS</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o" style="color:red"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo($t) ?></h2>
                                    <span class="desc" style="color:black;">Total Prtoduct</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart" style="color:blue"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number"><?php echo($s) ?></h2>
                                    <span class="desc" style="color:black;">Total Order</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note" style="color:yellow"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number" >Rs. <?php echo($n) ?></h2>
                                    <span class="desc" style="color:black;">Total Earning</span>
                                    <div class="icon">
                                        <i class="fa fa-rupee" style="color: green"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>