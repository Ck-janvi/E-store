
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>E-Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/style2.css">
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        include './theme/header.php';
    ?>
    <?php
        include './theme/navbar.php';
    ?>
        <section>
            <div class = "image">
               <img src="./img/about.jpg">
            </div>

            <div class = "content">
                <h2 class="text-white">About Us</h2>
                <span><!-- line here --></span>
                <p style="color: white;">OUR PLATFORM HERE IS AN ONLINE WEB-BASED APPLICATION WITH AN AIM TO SELL ELECTRONIC GADGETS/PRODUCTS ONLINE.<br>
            ARE ALWAYS HERE TO PROVIDE QUALITY PRODUCT AND SERVICE TO OUR CUSTOMER<br></p>
                <ul class = "links">
                    <li><a href = "#">quality products</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">fast delivery</a></li>
                    <div class = "vertical-line"></div>
                    <li><a href = "#">best service</a></li>
                </ul>
            </div>
        </section><br><br>
      <?php
        include './theme/footer.php';
      ?>
    </body>
</html>
