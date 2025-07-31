<?php
require 'connection.php';
session_start();

// echo "<pre";
// print_r($_SESSION);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    unset($_SESSION['productcart'][$id]);
    unset($_SESSION['qtycart'][$id]);

}
// foreach ($_SESSION[''])
?>

    
     
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

    include './theme/header.php'

    ?>


<?php

include './theme/navbar.php'

?>
<br>
<br>




    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        if(isset($_SESSION['productcart']) && !empty($_SESSION['productcart']))
                        {
                            // $prod_total = array();
                            $total = array() ;
                            foreach ($_SESSION['productcart'] as $key => $value)
                            {
                                $query = "SELECT * FROM product_tbl A left join product_detail_tbl B on A.product_id=B.product_id WHERE A.product_id='{$value}'";
                                $result  = mysqli_query($connection,$query);
                                $product = mysqli_fetch_array($result);
                                $qty = $_SESSION['qtycart'][$key];
                        
                                ?>
                        <tr>
                            <td class="align-middle"><img src="./img/<?php echo $product['image_part']?>" alt="" style="width: 50px;"><?php echo $product['product_name']  ?></td>
                            <td class="align-middle">Rs. <?php echo $product['price']  ?></td>
                            <td class="align-middle"><?php echo($qty) ?>
                                <!-- <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div> -->
                            </td>
                            <?php $prod_total = ($qty)*$product['price'];
                            $total[] = $prod_total; 
                            ?>

                            <td class="align-middle">Rs. <?php echo($prod_total) ?></td>
                            <td class="align-middle"><a href="?id=<?php echo $key ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></a></td>
                        </tr>
                        <?php
                        }

                    }
                    else
                    {
                        ?>
                        <tr>
                            <td class="align-middle">Your Cart Is Empty!</td>
                            <!-- <td class="align-middle">Rs.</td>
                            <td class="align-middle">-->
                                <!-- <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div> -->
                            </td>
                        </tr>
                        <?php
                    }
                    
                    ?>
                        <!-- <tr>
                            <td class="align-middle"><img src="img/product-4.jpg" alt="" style="width: 50px;"> OnePlus 10R 5G</td>
                            <td class="align-middle">Rs. 33,990</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rs. 33,990</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr>
                        <tr>
                            <td class="align-middle"><img src="img/myproduct7.jpeg" alt="" style="width: 50px;"> OPPO K10 5G</td>
                            <td class="align-middle">Rs. 20,999</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">Rs. 20,999</td>
                            <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <h5 class="position-relative text-uppercase mb-3 text-black"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <br>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <?php
                            $finalsum = array_sum($total);

                            ?>
                            <h6>Rs. <?php echo $finalsum ?> </h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Rs. 0</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>Rs.  <?php echo $finalsum ?></h5>
                        </div>
                        <button onclick="document.location='checkoutnew.php'" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

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