<?php

session_start();
$pid = $_GET['pid'];
$qty = $_GET['qty'];

if(isset($_SESSION['productcart'])){

    $currno = $_SESSION['counter']+1;

    $_SESSION['productcart'][$currno] = $pid;
    $_SESSION['qtycart'][$currno] = $qty;

    $_SESSION['counter'] = $currno;


}
else {
    $cart = array();
    // $qty = array();

    $_SESSION['productcart']['0'] = $pid;
    $_SESSION['qtycart']['0'] = $qty;
    $_SESSION['counter'] = 0;
}

header("location:cart_view.php");

?>