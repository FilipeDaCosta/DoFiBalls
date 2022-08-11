<!DOCTYPE html>
<?php
include_once 'config/config.php';
?>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>DoFi Balls</title>
    <!--Style-->
    <link rel="stylesheet" type="text/css" href="/css/modern-normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/slider.css"/>
    <!--JS-->
    <script type="text/javascript" src="js/getDataFromRest.js"></script>
    <script type="text/javascript" src="js/Box.js"></script>
    <script type="text/javascript" src="js/Article.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet"/>
    <!--Icon-->
    <link rel="shortcut icon" href="img/DoFi_Balls_Logo_icon.png">
</head>
<body>
<div id="cart-div">

</div>
<div id="container">
    <header id="header">
        <a id="icon-link" href="/home"><img id="dofi-logo" src="img/DoFi_Balls_Logo.png" alt="DoFi Balls Logo"/></a>
        <nav>
            <ul id="nav">
                <?php
                include_once 'controller/menucontroller.php'
                ?>
            </ul>
        </nav>
        <div id="header-cart-div">
            <img id="cart-logo" src="img/cart.png" alt="Cart Logo" onclick="showCart()"/>
            <p id="cart-counter">0</p>
        </div>
    </header>

    <div id="content">
        <?php
        include_once 'controller/controller.php'
        ?>
    </div>
    <div id="footer">
        <p>Copyright &copy; 2022 DoFi, <?php echo date("d.m.Y H:i:s"); ?></p>
    </div>
</div>
<script type="text/javascript" src="js/slider.js"></script>
</body>
</html>