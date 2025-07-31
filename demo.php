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
    <link href="css/loginstyle.css" rel="stylesheet">
</head>

<body>

<div class="div">
  <div class="container bg-secondary" >
    <span class="error animated tada" id="msg"></span>
    <form id="myform" class="box" onsubmit="return formvalidate()">
      <img src="./img/Logo1.jpg" alt="" style="height: 80px; width : 50%; padding: top 50px; margin-top: 20px;">
      <h5 style="margin-top: 30px;"><br>Sign in to your account.</h5>
        <input type="text" name="user_mobile" id="user_mobile" placeholder="Phone no." autocomplete="off" onchange="phonenumber(this)" style="margin-top: 30px;">
        <p id="validnum" class="message"></p>
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="user_password" placeholder="Passsword" id="user_password" autocomplete="off">
        <p class="message" id="validpass"></p>
        <a href="forget.php" class="forgetpass">Forgot Password?</a>
        <input type="submit" value="Sign in" class="btn1">
      </form>
      <script>
      function formvalidate(){

        var user_mobile = document.forms["myform"]["user_mobile"];
        var user_password = document.forms['myform']["user_password"];
        
        if (user_mobile.value == "" || user_password == "") { 
          document.getElementById("validnum").innerHTML = "!Enter your mobile phone number"; 
          document.getElementById("validpass").innerHTML = "!Enter your password";
  
            user_mobile.focus();
            user_password.focus(); 
            return false; 
        }
        // if (user_password.value == "") { 
        //   document.getElementById("validpass").innerHTML = "!Enter your password"; 
        //     user_password.focus(); 
        //     return false; 
        // } 
      } 
function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if((inputtxt.value.match(phoneno)))
        {
          document.getElementById("validnum").innerHTML = "";
      return true;
        }
      else
        {
        document.getElementById("validnum").innerHTML = "Please enter a valid phone number"; 
        document.forms["myform"]["user_mobile"].focus();
        return false;
        }
}
      </script>
        <a href="signup.php" class="dnthave" style="text-align: center; color:green;">Don’t have an account? Click here to Register!</a>
  </div> 
</div>
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