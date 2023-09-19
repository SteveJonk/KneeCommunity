<?php
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

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

function custom_single_add_to_cart_text()
{
    return __('Koop Deze Webinar', 'woocommerce');
}

add_filter('woocommerce_product_single_add_to_cart_text', 'custom_single_add_to_cart_text');

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 10);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 10);

function show_content()
{
    if (Woocommerce_Pay_Per_Post_Helper::has_access()) {
        echo '<div class="video-content">' . get_field('video') . '</div>';
    }
}

add_action('woocommerce_after_single_product_summary', 'show_content', 20);