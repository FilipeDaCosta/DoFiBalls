<?php

/**
 * The controller gets called everytime the customer clicks a link in the Nav Bar.
 */

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
}