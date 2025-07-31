<?php
$servername="localhost:3307";
$username="root";
$password="";
$database="db_admin";
$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Sorry! Database not Connected".mysqli_connect_error());
}
else{
    echo "Connected";
}
?>
