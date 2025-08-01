
<!-- Title Page-->
<title>Forms</title>

<!-- Fontfaces CSS-->
<link href="css/font-face.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
    include './theampart1/sidebar.php';
    include './theampart1/header.php';
    ?>

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->

        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong> Edit Profile</strong>
                            </div>
                            <div class="card-body card-block">
                                <form method="post" class="form-horizontal" enctype="multipart/form-data">
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-email" name="Name" placeholder="Enter name" Required class="form-control">
                                        </div>
                                    </div>
                                  

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-email" name="email" placeholder="Enter the email" Required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="hf-email" class=" form-control-label">mobile</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="hf-email" name="mobile" placeholder="Enter the mobile" Required class="form-control">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                    <div class="col col-md-3">
                                    <label for="hf-email" class=" form-control-label">image</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input id="file" type="file" onchange="loadFile(event)" />

                                        
                                    </div>







                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> update
                                </button>

                            </div>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</div>
</div>

</div>

<!-- Jquery JS -->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS  -->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!--  Vendor JS  -->
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

<!-- Main JS  -->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
























