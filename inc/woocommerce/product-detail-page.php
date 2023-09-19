<?php
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 10);

function remove_all_quantity_fields()
{
    return true;
}

add_filter('woocommerce_is_sold_individually', 'remove_all_quantity_fields', 10, 2);

function remove_product_image_link($html)
{
    return strip_tags($html, '<div><img>');
}

add_filter('woocommerce_single_product_image_thumbnail_html', 'remove_product_image_link');

function webinar_intro_text()
{
    echo '<div class="woocommerce_single_product_intro">' . get_field('when_who') . '</div>';
}

add_action('woocommerce_single_product_summary', 'webinar_intro_text', 8);

function custom_single_add_to_cart_text()
{
    return __('Koop deze webinar', 'woocommerce');
}

add_filter('woocommerce_product_single_add_to_cart_text', 'custom_single_add_to_cart_text');


function product_info()
{
    echo get_the_content();
}

add_action('woocommerce_after_single_product_summary', 'product_info', 10);

function show_paid_content()
{
    if (Woocommerce_Pay_Per_Post_Helper::has_access()) {
        echo '<div id="video-content" class="video-content">' . get_field('video') . '</div>';
    }
}

add_action('woocommerce_after_single_product_summary', 'show_paid_content', 20);

function scroll_to_content()
{
    echo '<a href="#video-content" class="button">Ga Naar Webinar</a>';
}

add_action('woocommerce_single_product_summary_access', 'scroll_to_content', 10);
add_action('woocommerce_single_product_summary_access', 'webinar_intro_text', 8);
add_action('woocommerce_single_product_summary_access', 'woocommerce_template_single_title', 5);