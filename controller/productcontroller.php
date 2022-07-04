<?php

include 'controller/cartcontroller.php';

$balls=array(
    "ballRed" => "img/DoFi_Ball_Singel_Rot.png",
    "ballGreen" => "img/DoFi_Ball_Singel_Grün.png",
    "ballBlue" => "img/DoFi_Ball_Singel_Blau.png",
    "ballBlack" => "img/DoFi_Ball_Singel_Schwarz.png",
    "ballYellow" => "img/DoFi_Ball_Singel_Gelb.png"
);

foreach ($balls as $key => $value) {
    $name = substr($key, 4, strlen($key) -4);
    echo "<li class='item-a'>";
    echo    "<div class='box'>";
    echo        "<p class='ball'>Ball $name</p>";
    echo        "<img src=$value class='model' />";
    echo        "<div class='details'>";
    echo            "<button class='item-button' onclick='addToCart()'>ADD TO CART</button>";
    echo        "</div>";
    echo    "</div>";
    echo "</li>";
}