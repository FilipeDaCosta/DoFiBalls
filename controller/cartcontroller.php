<?php

$cartList = array();

function addToCart($name){
    echo "
            <script type=\"text/javascript\">
            console.log($name);
            </script>
        ";
    array_push($GLOBALS['cartList'],"name", $name );
}