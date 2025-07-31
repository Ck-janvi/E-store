<?php
include './class/atclass.php';
// include 'connection.php';
if ([isset($_POST)])
{
    $cid =(isset($_POST['catid']) ? $_POST['catid']:'');
    $categoryname = (isset($_POST['CategoryName']) ? $_POST['CategoryName']:'');
    $query = "UPDATE `category_tbl` SET `category_name`='$categoryname' WHERE `category_id`='$cid'";  
    $result= mysqli_query($connection,$query);
    $sql = "Select * from categories_mst where category_name='$categoryname';";
    // $result = mysqli_query($connection, $sql);
    // $num = mysqli_num_rows($result);
    // if ($num == 1){
       
    //     header("location: display-category.php");
        
    // } 
    // else{
    //     $showError = "Invalid Credentials";
    // }
   
}
    if(isset($_GET['cid'])){
        $cat_id = $_GET['cid'];
        
        $sql = "SELECT * FROM category_tbl where category_id='$cat_id'";
        $res= mysqli_query($connection,$sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $category_name = $row['category_name'];
                $Cid = $row['category_id'];
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
                                        <strong>Update Category</strong>
                                    </div>
                                     <div class="card-body card-block">
                                         <form  method="POST" id="myform" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="row form-group">
                                                <div class="col col-md-5">
                                                    <label for="hf-email" class="form-control-label" style="margin-left: 15px;">Category Name*</label>
                                             </div>
                                             <div class="col-12 col-md-9" style="margin:10px;">
                                                    <input type="text" id="hf-email" name="CategoryName" placeholder="" value="<?php echo $category_name; ?>"  Required class="form-control" >
                                                    <input type="hidden" name="catid" value="<?php echo $Cid; ?>">
                                            </div>
                                    </div>
                                    <div class="card-footer" style="display:flex; justify-content:center;">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> Update
                                        </button>
                                       
                                    </div>
                                    <?php
                                    if(!$result){

                                    }
                                    else{
                                        include './alert/update.php';
                                    }
                                    ?>
                                                                   
                                    </form>

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
<?php
        }
    }
    ?>