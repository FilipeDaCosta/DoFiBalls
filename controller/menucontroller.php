<?php
$currentUri = getCurrentURI();
foreach (getMenu() as $href => $title) {
    echo "<li><a href=\"$href\" ".(($href == $currentUri) ? "class=\"selected\" ": "").">$title</a></li>\n";
}
echo '<li><input id="cart-button" type="image" src="img/cart.png" /></li>';