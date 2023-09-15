<?php

// Removal of standard actions
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

// Add new actions
function add_opening_div()
{
    echo '<div class="container">';
}

add_action('woocommerce_before_shop_loop', 'add_opening_div', 5);

function add_closing_div()
{
    echo '</div">';
}

add_action('woocommerce_after_main_content', 'add_closing_div', 5);

function override_pagination_text($args)
{
    $args['prev_text'] = __('Vorige');
    $args['next_text'] = __('Volgende');
    return $args;
}

add_filter('woocommerce_pagination_args', 'override_pagination_text');

function shop_item_text_opening_tag()
{
    echo '<div class="shop-item-text">';
}

add_action('woocommerce_shop_loop_item_title', 'shop_item_text_opening_tag', 5);

function shop_item_text_closing_tag()
{
    echo '</div>';
}

add_action('woocommerce_after_shop_loop_item', 'shop_item_text_closing_tag', 15);

function product_short_description()
{
    echo '<p class="woocommerce-loop-product__short-description">' . get_the_excerpt() . '</p>';
}

add_action('woocommerce_after_shop_loop_item_title', 'product_short_description', 10);

function add_button()
{
    echo '<button class="woocommerce-loop-product__button">Bekijk Webinar</button>';
}

add_action('woocommerce_after_shop_loop_item_title', 'add_button', 20);