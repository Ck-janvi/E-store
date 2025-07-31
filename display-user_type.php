
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
        include './theampart1/sidebar.php';
        include './theampart1/header.php';
        ?>        
        <div class="page-container">
            

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                        <div class="row m-t-30">
                            <div class="col-md-12">
                            <a href="add-user_type.php">  <h4> Add details </h4> </a>
                                <!-- DATA TABLE-->

                                <div class="table-responsive m-b-40">
                                    <table class="table" style="background-color: white !important; border-radius:10px;">
                                        <thead style="border-radius:10px;">
                                            <tr style="background-color: black;">                                             
                                               
                                                <th>User_type_name </th>
                                                <th>Action </th>                                                
                                            </tr>
<?php
    error_reporting(0);
   require './class/atclass.php';
   if(isset($_GET['did']))
   {
    $did=$_GET['did'];
    $deleteq=mysqli_query($connection,"delete  from user_type_tbl where user_type_id='{$did}'") or die(mysqli_error($connection));
    if($deleteq)
    {
        echo "<script>alert('record deleted');</script>";
    }  
}

$selectq=mysqli_query($connection,"select * from user_type_tbl") or die(mysqli_error($connection));
$count=mysqli_num_rows($selectq);
echo $count . " Records found";
while($userrow=mysqli_fetch_array($selectq))
{
    echo "<tr>";
    echo "<td>{$userrow['User_type_name']}</td>";
    echo "<td> <a href=''>Edit </a> | <a href='display-user_type.php?did={$userrow['user_type_id']}'> Delete </a> </td>";
    echo "</tr>";
    //echo "<td> <a href=''>Edit</a> | <a href='display-user_type.php?did={$userrow['user_type_id']}'>Delete </a></td>";
  
}




?>


                                        </thead>

                                        <tbody>
                                                       
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            </div>
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
<!-- end document-->
