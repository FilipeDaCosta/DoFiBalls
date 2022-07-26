<?php

define('URI_HOME', '/home');
define('URI_SHOP', '/shop');
define('URI_CONTACT', '/contact');
define('URI_CART', '/cart');


/**
 * @return array containing all menu items in format [base href] => [title]
 */
function getMenu()
{
    return array(
        URI_HOME => 'Home',
        URI_SHOP => 'Shop',
        URI_CONTACT => 'Contact',
        URI_CART => 'Cart'
    );
}

/**
 * @return string the requested menu item URI
 */
function getCurrentURI()
{
    $menu = getMenu();
    if (array_key_exists($_SERVER['REQUEST_URI'], $menu)) {
        return $_SERVER['REQUEST_URI'];
    } else {
        foreach (array_keys(getMenu()) as $href) {
            if (preg_match("@^$href@", $_SERVER['REQUEST_URI'])) {
                return $href;
            }
        }
    }
    return key($menu);
}