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
        <div class="container bg-secondary">
            <span class="error animated tada" id="msg"></span>
            <form id="myform" class="box" onsubmit="return formvalidate()">
                <img src="./img/Logo1.jpg" alt="" style="height: 80px; width : 200px; padding: top 50px; margin-top: 20px;">
                <h5 style="margin-top: 10px; text-align:left; margin-left:30px; font-size:22px;"><br>Enter Details to sign up!</h5>
                <div style="display: flex;">
                    <input type="text" name="first_name" id="first_name" placeholder="First Name." autocomplete="off" style="margin-top: 30px; display:flex;">
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name" autocomplete="off" style="margin-top: 30px;">
                </div>
                <div style="display: flex; width:100% ">
                <p id="name" class="message" style="display:flex;"></p>
                <p id="lname" class="message" style="margin-left:245px"></p>
                </div>
                <input type="text" name="user_mobile" id="user_mobile" placeholder="Phone no." autocomplete="off" onchange="phonenumber(this)" style="margin-top: 10px;">
                <p id="number" class="message"></p>
                <input type="text" name="user_email" id="user_email" placeholder="E-mail" autocomplete="off" style="margin-top: 30px;">
                <p id="email" class="message"></p>
                <div style="display: flex; justify-content:left; margin-left:30px;">
                    <p style="font-size: 20px;">Male:</p><input type="radio" name="gender" value="Male" onclick="radiovalidation()" style="height:20px; width:20px; margin-top: 25px;margin-left: 10px; ">
                    <p style="font-size: 20px; margin-left: 30px;">Female:</p> <input type="radio" name="gender" value="Female" style="height:20px; width:20px; margin-top: 25px;margin-left: 10px; ">
                </div>
                <p id="" class="message"></p>
                <input type="text" name="address" id="address" placeholder="Address" autocomplete="off" style="width:680px">
                <p id="add" class="message"></p>
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="user_pass" placeholder="Create Password" id="user_password" autocomplete="off" style="margin-top: 30px;">
                <p id="id3" class="message"></p>
                <i class="typcn typcn-eye" id="eye"></i>
                <input type="password" name="user_pass1" placeholder="Re-enter Password" id="user_password" autocomplete="off" onchange="checkPassword(this);" style="margin-top: 30px;">
                <p id="id4" class="message"></p>
                <div style=" justify-content:center; margin-top:30px; margin-bottom:30px;">

                I Agree Terms & Coditions<input type="checkbox" id="agree" name="agree" style="margin-left: 10px;">
        <br><br>
                    <input type="submit" value="Register" class="btn1">
                </div>
            </form>
            <script>
                function formvalidate() {
                    var first_name = document.forms["myform"]["first_name"];
                    var last_sem = document.forms["myform"]["last_name"];
                    var user_mobile = document.forms["myform"]["user_mobile"];
                    var user_email = document.forms["myform"]["user_email"];
                    var address = document.forms["myform"]["address"];
                    var user_pass = document.forms["myform"]["user_pass"];
                    var user_pass1 = document.forms["myform"]["user_pass1"];


                    if (first_name.value == "" || last_sem.value == "" || user_email.value == "" ||address.value == "" || user_mobile.value == "" || user_pass.value == "") {
                        document.getElementById("name").innerHTML = "Enter the First Name field";
                        document.getElementById("lname").innerHTML = "Enter the Last Name field";
                        document.getElementById("email").innerHTML = "Enter the Email Id field";
                        document.getElementById("number").innerHTML = "Enter the Phone Number field";
                        document.getElementById("add").innerHTML = "Enter the Address field";
                        document.getElementById("id3").innerHTML = "Enter the Password field";
                        document.getElementById("id4").innerHTML = "Enter the Password field";
                        first_name.focus();
                        last_sem.focus();
                        user_email.focus();
                        user_mobile.focus();
                        user_pass.focus();
                        return false;
                    }
                }
function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if((inputtxt.value.match(phoneno)))
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
    function checkPassword(form) { 
    user_password = document.forms["myform"]["user_pass"]; 
    confirm_password    = document.forms["myform"]["user_pass1"]; 
  
                password1=user_password.value;
                password2=confirm_password.value;
                // If password not entered 
                if (password1 == '') 
                document.getElementById("id3").innerHTML = "Enter the Password"; 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                document.getElementById("id4").innerHTML = "Re-Enter the Password";

                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    document.getElementById("id4").innerHTML = "Password did not match";
                    document.getElementById("id3").innerHTML = "Password did not match";


                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    // alert("Password Match.") 
                    return true; 
                } 
            } 

                // function Validate(no) {
                //     no.value = no.value.replace(/[^ 0-9\n\r]+/g, '');
                // }

                // function Validatestring(no) {
                //     no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
                //     var myuser_name = document.forms["myform"]["user_name"];
                //     user_name = myuser_name.value;
                //     if (user_name.length < 3) {
                //         document.getElementById("id1").innerHTML = "First Name must greater than 3 characters!";
                //         user_name.focus();
                //         return false;
                //     }
                // }

                // function Validatestring1(no)
                // {
                //     no.value = no.value.replace(/[^ a-z A-Z\n\r]+/g, '');
                //     var myuser_name = document.forms["myform"]["user"];
                //     user_name = myuser_name.value;
                //     if (user_name.length < 3) {
                //         document.getElementById("id2").innerHTML = "Last Name must greater than 3 characters!";
                //         user_name.focus();
                //         return false;
                //     }
                // }
                // function validateEmail(emailField) {
                //     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

                //     if (reg.test(emailField.value) == false) {
                //         document.getElementById("iid").innerHTML = "Invalid Email!";
                //         emailField.focus();
                //         return false;

                //     }

                //     return true;

                // }

                // function phonenumber(inputtxt) {
                //     var phoneno = /^\d{10}$/;
                //     if ((inputtxt.value.match(phoneno))) {
                //         return true;
                //     } else {
                //         document.getElementById("id3").innerHTML = "Phone Number Should be Equals to 10 digits!";
                //         inputtxt.focus();
                //         return false;
                //     }
                // }
                // function checkPassword1(form) {
                //     user_password = document.forms['myform']["signup-password"];
                //     confirm_password = document.forms['myform']["signup-password1"];

                //     password1 = user_password.value;
                //     password2 = confirm_password.value;

                //      if (password2 == '')
                //     {
                //     document.getElementById("id5").innerHTML = "Confirm Password Should Not Be Null";
                //     user_password.focus();
                //         return false;
                //     }
                //     // If Not same return False.     
                //     else if (password1 != password2) {
                //         document.getElementById("id5").innerHTML = "Password and Confirm Password Does Not Match";
                //         confirm_password.focus();
                //         return false;
                //     }

                //     // If same return True. 
                //     else {
                //         // alert("Password Match.") 
                //         return true;
                //     }
                // }
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