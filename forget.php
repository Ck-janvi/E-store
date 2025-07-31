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
    <link href="css/signup.css" rel="stylesheet">
</head>


<body>
    <div class="div">
        <div class="container bg-secondary" style="width: 380px; height: 400px; margin-top:50px;">
            <span class="error animated tada" id="msg"></span>
            <form id="myform" class="box" onsubmit="return formvalidate()">
                <img src="./img/Logo1.jpg" alt="" style="height: 80px; width : 200px; padding: top 50px; margin-top: 20px;">
                <h5 style="margin-top: 30px; text-align:left; margin-left:30px; font-size:22px;"><br>Retrieve Password</h5>
               
                <input type="text" name="user_mobile" id="user_mobile" placeholder="Phone no." autocomplete="off" onchange="phonenumber(this)" style="margin-top: 10px;">
                <p id="number" class="message"></p>
                
                    <input type="submit" value="Submit" class="btn1" style="width: 300px; margin-top:30px;">
                </div>
            </form>
            <script>
                function formvalidate() {
                    
                    var user_mobile = document.forms["myform"]["user_mobile"];
                   


                    if (user_mobile.value == "") {
                       
                        document.getElementById("number").innerHTML = "Enter the Phone Number";
                        
                        user_mobile.focus();
                        return false;
                    }
                    
                    var phoneno = /^\d{10}$/;
                    if((user_mobile.value.match(phoneno)))
        {
          document.getElementById("number").innerHTML = "";
      return true;
        }
      else
        {
        document.getElementById("number").innerHTML = "Please enter a valid phone number"; 
        document.forms["myform"]["user_mobile"].focus();
        return false;
        }

    }



            </script>
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