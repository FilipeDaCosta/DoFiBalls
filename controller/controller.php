<?php
switch (getCurrentURI()) {
    case URI_HOME:
        include_once 'controller/homecontroller.php';
        break;
    case URI_SHOP:
        include_once 'controller/datacontroller.php';
        include_once 'controller/shopcontroller.php';
        break;
    case URI_CONTACT:
        include_once 'controller/contactcontroller.php';
        break;
    case URI_CART:
        echo "Cart";
        break;
}