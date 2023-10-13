<?php

function custom_autocomplete_order($order_id)
{
    if (!$order_id) {
        return;
    }
    $order = wc_get_order($order_id);
    $order->update_status('completed');
}

add_action('woocommerce_order_status_processing', 'custom_autocomplete_order');
