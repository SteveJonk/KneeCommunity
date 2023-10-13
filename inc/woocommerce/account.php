<?php
add_filter('woocommerce_account_menu_items', 'wptips_customize_account_menu_items');
function wptips_customize_account_menu_items($menu_items)
{
    unset($menu_items['downloads']);
    unset($menu_items['payment-methods']);

    return $menu_items;
}

/**
 * @snippet       WooCommerce Add New Tab @ My Account
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 5.0
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

// ------------------
// 1. Register new endpoint (URL) for My Account page
// Note: Re-save Permalinks or it will give 404 error

function add_my_webinar_endpoint()
{
    add_rewrite_endpoint('my-webinars', EP_ROOT | EP_PAGES);
}

add_action('init', 'add_my_webinar_endpoint');

// ------------------
// 2. Add new query var

function my_webinar_query_vars($vars)
{
    $vars[] = 'my-webinars';
    return $vars;
}

add_filter('query_vars', 'my_webinar_query_vars', 0);

function add_my_webinar_link_my_account($items)
{
    $items['my-webinars'] = __('Mijn Webinars');
    return $items;
}

add_filter('woocommerce_account_menu_items', 'add_my_webinar_link_my_account');

function my_webinars_content()
{
    echo get_template_part('template-parts/account-my-webinars');
}

add_action('woocommerce_account_my-webinars_endpoint', 'my_webinars_content');


function change_my_webinars_title($title, $endpoint)
{
    $title = __("Mijn Webinars", "woocommerce");

    return $title;
}

add_filter('woocommerce_endpoint_my-webinars_title', 'change_my_webinars_title', 10, 2);

function move_webinar_tab($items)
{
    $save_for_later = array('my-webinars' => __('Mijn Webinars')); // SAVE TAB
    unset($items['my-webinars']); // REMOVE TAB
    $items = array_merge(array_slice($items, 0, 2), $save_for_later, array_slice($items, 2)); // PLACE TAB AFTER POSITION 2
    return $items;
}

add_filter('woocommerce_account_menu_items', 'move_webinar_tab');

/**
 * Change page titles
 */
add_filter('the_title', 'custom_account_endpoint_titles');
function custom_account_endpoint_titles($title)
{
    global $wp_query;

    if (isset($wp_query->query_vars['my-webinars']) && in_the_loop()) {
        return __('Mijn Webinars');
    }

    return $title;
}
