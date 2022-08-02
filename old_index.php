<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DoFi Balls | Automatic Order</title>
    <!--Style-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
    <!--JS-->
    <!--JQuery-->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet"/>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="#">
</head>
<body>
<div class="container">
    <div class="header">
        <nav class="navbar">
            <div>
                <a href="#"><img src="img/DoFi_Balls_Logo.png" alt="DoFi Balls"/></a>
            </div>
            <ul class="nav-list">
                <li><a href="#">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li id="cart"><i class="fa fa-shopping-cart"></i> Cart</li>
                <div id="modal-container">
                    <div class="modal">
                        <ul id="buyItems"></ul>
                        <button id="close">Close</button>
                        <button id="order">Order</button>
                    </div>
                </div>
            </ul>
        </nav>
    </div>
    <div class="display-text">Display-Text</div>
    <div class="display-img">Display-Img</div>
    <div class="products" id="products">
        <!--Slider-->
        <ul id="autoWidth" class="cs-hidden">
            <?php
            include_once 'controller/shopcontroller.php';
            ?>
        </ul>
    </div>
    <div class="about-img">
        <div class="image">
            <img src="img/BeavisAndButtHead.png" alt="" class="about"/>
        </div>
    </div>
    <div class="about-info" id="about">
        <div class="titel">
            <h1>About Us</h1>
        </div>
        <div class="text">
            <h2>Hi! We are Dominik and Filipe.</h2>
            <p>
                At DoFi Balls, we want to bring our balls to all of you. We have a
                selected range of coloured balls which we have been using since the
                beginning. In 2022, we had the idea to make them available for
                everyone.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                erat, sed diam voluptua. At vero eos et accusam et justo duo dolores
                et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua.
            </p>
            <p>
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit
                amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <div class="contact-map" id="contact">
        <div class="map">
            <iframe id="map-google"
                    src="https://maps.google.com/maps?q=5452%20oberrohrdorf&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="650"
                    height="650"
                    style="border-radius: 10px"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
    <div class="contact-form">
        <h1>Contact Us</h1>
        <form class="form" action="contactform.php" method="post">
            <input type="text" class="input-field" placeholder="Full Name">
            <input type="text" class="input-field" placeholder="Email">
            <input type="text" class="input-field" placeholder="Subject">
            <textarea type="text" class="input-field textarea-field" placeholder="Message"></textarea>
            <button type="button" class="btn">Send Message</button>
        </form>
    </div>
    <div class="footer">
        <p>© 2022 DoFi Balls. All rights reserved.</p>
    </div>
</div>
<script src="js/cart.js" type="text/javascript"></script>
<script src="js/shoppingCart.js"></script>
</body>
</html>