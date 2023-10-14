<?php
function show_widget_after_thankyou()
{
    if (is_active_sidebar('After Purchase')) {
        dynamic_sidebar('After Purchase');
    }
}

add_action('woocommerce_thankyou', 'show_widget_after_thankyou', 5);
