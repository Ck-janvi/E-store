<?php
include 'connection.php';
// include 'connection.php';
if ([isset($_POST)])
{
    $cid =(isset($_POST['catid']) ? $_POST['catid']:'');
    $categoryname = (isset($_POST['CategoryName']) ? $_POST['CategoryName']:'');
    $query = "UPDATE `categories_mst` SET `category_name`='$categoryname' WHERE `category_id`='$cid'";  
    $result= mysqli_query($conn,$query);
    $sql = "Select * from categories_mst where category_name='$categoryname';";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
       
        header("location: View-Categories.php");
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
   
}
    if(isset($_GET['cid'])){
        $cat_id = $_GET['cid'];
        
        $sql = "SELECT * FROM categories_mst where category_id='$cat_id'";
        $res= mysqli_query($conn,$sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $category_name = $row['category_name'];
                $Cid = $row['category_id'];
            }      
?>