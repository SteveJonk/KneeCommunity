<?php
add_filter('woocommerce_account_menu_items', 'wptips_customize_account_menu_items');
function wptips_customize_account_menu_items($menu_items)
{
    unset($menu_items['downloads']);
    unset($menu_items['payment-methods']);

    return $menu_items;
}