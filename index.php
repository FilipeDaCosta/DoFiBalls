<!DOCTYPE html>
<?php
include_once 'config/config.php';
?>
<html lang="de">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>DoFi Balls | Automatic Order</title>
        <!--Style-->
        <link rel="stylesheet" type="text/css" href="/css/modern-normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
<!--        <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>-->
        <link rel="stylesheet" type="text/css" href="css/slider.css"/>
        <!--JS-->
        <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<!--        <script type="text/javascript" src="js/lightslider.js"></script>-->
        <script type="text/javascript" src="js/slider.js"></script>
        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet"/>
        <!--Icon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="shortcut icon" href="img/DoFi_Balls_Logo_icon.png">
    </head>
    <body>
        <div id="container">
            <div id="header">
                <div id="logo">
                    <a href="/home">
                        <img src="img/DoFi_Balls_Logo.png" alt="DoFi Balls Logo" width="295" height="100" />
                    </a>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <?php
                    $currentUri = getCurrentURI();
                    foreach (getMenu() as $href => $title) {
                        echo "<li><a href=\"$href\" ".(($href == $currentUri) ? "class=\"selected\" ": "").">$title</a></li>\n";
                    }
                    ?>
                </ul>
            </div>
            <div id="content">
                <?php
                switch (getCurrentURI()) {
                    case URI_HOME:
                        include_once 'controller/homecontroller.php';
                        break;
                    case URI_SHOP:
                        include_once 'controller/shopcontroller.php';
                        break;
                    case URI_CONTACT:
                        echo "Contact";
                        break;
                    case URI_CART:
                        echo "Cart";
                        break;
                }
                ?>
            </div>

<!--            <section class="product">-->
<!--                <h2 class="product-category">best selling</h2>-->
<!--                <button class="pre-btn"><img src="img/arrow.png" alt=""></button>-->
<!--                <button class="nxt-btn"><img src="img/arrow.png" alt=""></button>-->
<!--                <div class="product-container">-->
<!--                    <div class="product-card">-->
<!--                        <div class="product-image">-->
<!--                            <span class="discount-tag">50% off</span>-->
<!--                            <img src="img/DoFi_Ball_Singel_Rot.png" class="product-thumb" alt="">-->
<!--                            <button class="card-btn">add to wishlist</button>-->
<!--                        </div>-->
<!--                        <div class="product-info">-->
<!--                            <h2 class="product-brand">brand</h2>-->
<!--                            <p class="product-short-description">a short line about the cloth..</p>-->
<!--                            <span class="price">$20</span><span class="actual-price">$40</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </section>-->

            <div id="footer">
                <p>Copyright &copy; 2017 TicSys, <?php echo date("d.m.Y H:i:s"); ?></p>
            </div>
        </div>
        <script type="text/javascript" src="js/slider.js"></script>
    </body>
</html>