<?php

$balls = array(
    "ballRed" => "img/DoFi_Ball_Singel_Rot.png",
    "ballGreen" => "img/DoFi_Ball_Singel_Grün.png",
    "ballBlue" => "img/DoFi_Ball_Singel_Blau.png",
    "ballBlack" => "img/DoFi_Ball_Singel_Schwarz.png",
    "ballYellow" => "img/DoFi_Ball_Singel_Gelb.png"
);

$counter = 1;
echo '<section class="product">';
echo '<button class="pre-btn"><img src="img/arrow.png" alt=""></button>';
echo '<button class="nxt-btn"><img src="img/arrow.png" alt=""></button>';
echo '<div class="product-container">';
foreach ($balls as $key => $value) {
    $name = substr($key, 4, strlen($key) - 4);
    echo '<div class="product-card">';
    echo '<div class="product-image">';
    echo "<img src=$value class='product-thumb' alt=''>";
    echo '<button class="card-btn">Add To Cart</button>';
    echo '</div>';
    echo '<div class="product-info">';
    echo "<h2 class='product-brand'>$name Ball</h2>";
    echo '</div>';
    echo '</div>';
    $counter++;
}
echo '</div>';
echo '</section>';





//echo "<li class='item-a'>";
//echo "<div class='box'>";
//echo "<p class='ball'>Ball $name</p>";
//echo "<img src=$value class='model' />";
//echo "<div class='details'>";
//echo "<button class='item-button addToCart' data-product-id=$counter> ADD TO CART</button>";
//echo "</div>";
//echo "</div>";
//echo "</li>";