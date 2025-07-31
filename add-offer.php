<?php
   require './class/atclass.php';
   if($_POST) // when u enter the product details that informtaion have to store at server side this code is for that
   {

    
    // $p_category=$_POST['p_category'];]
  
    
     $product_id=$_POST['Select'];
     $offer_type=$_POST['option'];
     $discount = $_POST['discount'];
     $offer_details=$_POST['offer_details'];
  

    // $p_category=$_POST['p_category'];

    $qurey=mysqli_query($connection, "insert into  offer_tbl(product_id,offer_type,discount,offer_details) values('{$product_id}','{$offer_type}','{$discount}','{$offer_details}')") ;

   if($qurey)
   {
      
   }

   }
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
                                        <strong> Add offer </strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="post" class="form-horizontal" enctype="multipart/form-data">

                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="hf-email" class=" form-control-label">Product Name</label>
                                                    <select name="Select">
                                                        <option>Select</option>
                                                       <?php
                                                       include './class/atclass.php';
                                                       $cat = "SELECT * FROM `product_tbl`;"; 
                                                       $productselect = mysqli_query($connection, $cat);
                                                        $count = 1;
                                                        while($categoryrow = mysqli_fetch_array($productselect))
                                                        {
                                                       ?>
                                                        <option value="<?php echo $categoryrow['product_id'] ?>"><?php  echo $categoryrow['product_name'] ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                        <!-- <option>Mobiles</option>
                                                        <option>computer Accessories</option>
                                                        <option>Gaming & Accessories</option>
                                                        <option>Home application</option> -->
                                                    </select> 
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="hf-email" class=" form-control-label">Offer Type</label>
                                                </div>
                                                
                                                <!-- <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="offer_type" placeholder="Enter offer_type" Required class="form-control">
                                                   
                                                </div> -->
                                            
                                                <div class="col-12 col-md-9">
                                                     <select name="option">
                                                       <option>Select</option>
                                                        <option value="Special">Special Offer </option>
                                                        <option value="Festive">Festive Offer </option>
                                                        <option value="General">General Offer </option>
                                                       
                                                     </select>   
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="hf-email" class=" form-control-label">Discount</label>
                                                </div>                          
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="discount" placeholder="Enter the product discount" Required class="form-control" >                                                             
                                                </div>
                                          

                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="hf-email" class=" form-control-label">Offer Detail</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="offer_details" placeholder="Enter offer_details " Required class="form-control">
                                                   
                                                </div>

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
                                    </div> 

                                    </form>
  
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
<!-- end document-->