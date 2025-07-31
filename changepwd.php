<?php

 session_start();
 require './class/atclass.php';

  if(!isset($_SESSION['admin_id'])) // condition check that login is done or not
  {
     header("location:admin_login.php");
  }

  // if login is done then value shuld be gone post
  if($_POST)
  {
     $opass=$_POST['opass'];
     $npass=$_POST['npass'];
     $cpass=$_POST['cpass'];

       // old passwd fetch in the database
     $oldpasswordqurey= mysqli_query($connection, "select password from admin_login where admin_id='{$_SESSION['admin_id']}'") or die(mysqli_error($connection));
      //
     $oldpasswordfromdb=mysqli_fetch_array($oldpasswordqurey);
     
      // old passwd condition
     if( $oldpasswordfromdb['password'] == $opass)
     {
        // new and confirm passwd condition
       if($npass==$cpass)
       {
            // old and new password must be diffrent
           if ($opass==$npass)
           {
            echo "<script>alert('old and new password must be diffrent');</script>";
           }
           else {
            
             $updateq=mysqli_query($connection, "update admin_login set password='{$npass}' where admin_id='{$_SESSION['admin_id']}'") or die(mysqli_error($connection));
             if($updateq)
             {
                 echo "<script>alert('password changed successfully'); </script>";
             }
           }
       }  
       else
        {
        echo "<script>alert('New password and confirm password is not matched');</script>";
          
       } 
     }
     else {
        echo "<script>alert('old password not matched');</script>";
        
     }
  }




?>
<html>

  <body>
       
       <form method="post" style="text-align:center; margin:50px; padding:50px;" >
            Old password : <input type="text" name="opass" placeholder="Enter the old password" style="width:200px;" Required >
            <br/>    
            <br/>        
            New password : <input type="text" name="npass" placeholder="Enter the new password" Required >
            <br/>
            <br/>
            Confirm password : <input type="text" name="cpass" placeholder="Enter the confirm password" Required >
            <br/>

            <br/>
            <br/>
            <input type="submit">
        </form>
</body>




</html>