<?php

 session_start();

 echo "Hi"  . $_SESSION['admin_name'];
// echo "<script>alert('welcome Admin')</script>;"

  if(!isset($_SESSION['admin_id']))
  {
     header("location:admin_login.php");
  }
   
   echo "<br/>";
   echo "<br/>";

   echo "<a href='changepwd.php'>Change password</a>";
    echo "<br/>";  
    echo "<br/>";
   echo " <a href='logout.php'>Logout</a>" ;
?>