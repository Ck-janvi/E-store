<?php   
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
                 <div class="section_content section_content--p30">
                     <div class="container-fluid">
                         <div class="row">
                             <div class="col-lg-8">
                                 <div class="card">
                                    <div class="card-header">
                                        <strong>Add Category</strong>
                                    </div>
                                     <div class="card-body card-block">
                                         <form  method="post" id="myform" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="hf-email" class="form-control-label" style="margin-left: 15px;">Category Name*</label>
                                             </div>
                                             <div class="col-12 col-md-9" style="margin:10px;">
                                                    <input type="text" id="hf-email" name="category_name" placeholder="Enter category name" Required class="form-control" >
                                            </div>
                                    </div>
                                    <div class="card-footer" style="display:flex; justify-content:center;">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> Add
                                        </button>
                                       
                                        <button type="butoon" onclick="window.location='display-category.php'; " class="btn btn-info btn-sm" style="background-color:green;margin-left: 10px;">
                                            <i class="fa fa-bars"></i> view
                                        </button>
                                    </div>                                
                                    </form>
                                    <?php
                                        // require './class/atclass.php';

                                        // if($_POST) // when u enter the product details that informtaion have to store at server side this code is for that
                                        // {
                                     
                                        //   print_r($_POST);
                                         
                                        //   $category_name=$_POST['category_name'];
                                         
                                        //  // $p_category=$_POST['p_category'];
                                     
                                        //  $qurey=mysqli_query($connection, "insert into  category_tbl(category_name) values('{$category_name}')") ;
                                     
                                        // }
                                        // if($qurey){
                                        //     include './alert/success.php';
                                        // }

                                        if($_SERVER["REQUEST_METHOD"] == "POST")
                                        {
                                            include './class/atclass.php';  
                                            $category_name = $_POST["category_name"];
                                    
                                            $query = "INSERT INTO `category_tbl`(`category_name`) VALUES ('$category_name')";
                                            $result = mysqli_query($connection, $query);
                                            if(!$result){
                                                echo "<script>alert('record ');</script>";
                                            }
                                            else{
                                                include './alert/success.php';
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
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
