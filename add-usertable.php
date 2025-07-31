<!-- 
<?php
   require './class/atclass.php';
   if($_POST) 
   {

    print_r($_POST); 
     $user_type_id=$_POST['user_type_id'];
     $u_type_name=$_POST['u_type_name'];
     $user_fname=$_POST['user_fname	'];
     $user_lname=$_POST['user_lname'];
     $gender=$_POST['gender'];
     $phone_no=$_POST['phone_no'];
     $email_id=$_POST['email_id'];
     $password=$_POST['password'];
     $address=$_POST['address'];


    $qurey=mysqli_query($connection, "insert into  user_type(user_type_id,user_fname,user_lname,gender,phone_no,email_id,password,address) values('{$user_type_id}','{$user_fname}','{$user_lname}','{$gender  }','{$phone_no}','{$email_id}','{$password}','{$address}')") ;

   if($qurey)
   {
      echo "<script>alert('record insertd');</script>";
   }

   }
?> -->


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
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                
                            </div>   
                            </div>
                           
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong> user Form</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form  method="post" class="form-horizontal" enctype="multipart/form-data">

                                   

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">user_type_id</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="user_type_id" placeholder="Enter the user_type_id"Required class="form-control" >                  
                                                </div>
                                            </div> 

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class="form-control-label">u_type_name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="u_type_name" placeholder="Enter the name" Required class="form-control" >                  
                                                </div>
                                            </div>

                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">user_fname</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="user_fname" placeholder="Enter user fname" Required class="form-control">
                                                   
                                                </div>
                                            </div>
                                          
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">user_lname</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="user_lname" placeholder="Enter user fname"  Required class="form-control">                   
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">gender</label>
                                                </div>
                                                <!-- <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="gender" placeholder="Enter gender " Required class="form-control" >                  
                                                </div> -->
                                                <div class="col-12 col-md-9">
                                                     <select>
                                                        <option>male </option>
                                                        <option>female </option>
                                                        <option>other </option>
                                                     </select>   
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">phone_no</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="phone_no" placeholder="Enter phone_no " Required class="form-control" >                  
                                                </div>
                                            </div>

                                           
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">email_id</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="email_id" placeholder="Enter email_id " Required class="form-control" >                  
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="password" placeholder="Enter password " Required class="form-control" >                  
                                                </div>
                                            </div>

                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-email" class=" form-control-label">address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-email" name="address" placeholder="Enter address " Required class="form-control" >                  
                                                </div>
                                            </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                        <button type="butoon" onclick="window.location='display-user.php'; " class="btn btn-info btn-sm">
                                            <i class="fa fa-ban"></i> view
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
