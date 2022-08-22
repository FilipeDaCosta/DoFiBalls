<?php

/**
 * This controller creates the Navbar
 */

$currentUri = getCurrentURI();
foreach (getMenu() as $href => $title) {
    echo "<li><a href=\"$href\" ".(($href == $currentUri) ? "class=\"selected\" ": "").">$title</a></li>\n";
}