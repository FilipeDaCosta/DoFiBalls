<?php

//$balls = array (
//    array("ballRed", "img/DoFi_Ball_Singel_Rot.png", 1),
//    array("ballGreen", "img/DoFi_Ball_Singel_Grün.png", 2),
//    array("ballBlue", "img/DoFi_Ball_Singel_Blau.png", 3),
//    array("ballBlack", "img/DoFi_Ball_Singel_Schwarz.png", 4),
//    array("ballYellow", "img/DoFi_Ball_Singel_Gelb.png", 5)
//);

$balls=array(
    "ballRed" => "img/DoFi_Ball_Singel_Rot.png",
    "ballGreen" => "img/DoFi_Ball_Singel_Grün.png",
    "ballBlue" => "img/DoFi_Ball_Singel_Blau.png",
    "ballBlack" => "img/DoFi_Ball_Singel_Schwarz.png",
    "ballYellow" => "img/DoFi_Ball_Singel_Gelb.png"
);

$counter = 1;
foreach ($balls as $key => $value) {
    $name = substr($key, 4, strlen($key) -4);
    echo "<li class='item-a'>";
    echo    "<div class='box'>";
    echo        "<p class='ball'>Ball $name</p>";
    echo        "<h6>Quantity: </h6>";
    echo        "<img src=$value class='model' />";
    echo        "<div class='details'>";
    echo            "<button class='item-button addToCart' data-product-id=$counter> ADD TO CART</button>";
    echo        "</div>";
    echo    "</div>";
    echo "</li>";
    $counter++;
}