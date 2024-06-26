<?php

function theme_sidebars()
{
    register_sidebar(array(
        'name' => 'Footer Top',
        'id' => 'footer-top',
        'description' => 'Deze sidebar zal worden getoond bovenop de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer 1',
        'id' => 'footer-1',
        'description' => 'Deze sidebar zal worden getoond in de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer 2',
        'id' => 'footer-2',
        'description' => 'Deze sidebar zal worden getoond in de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer 3',
        'id' => 'footer-3',
        'description' => 'Deze sidebar zal worden getoond in de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer Bottom',
        'id' => 'footer-bottom',
        'description' => 'Deze sidebar zal worden getoond onder de footer',
        'before_widget' => '',
        'after_widget' => '',
    ));

    register_sidebar(array(
        'name' => 'After Purhcase',
        'id' => 'after-purchase',
        'description' => 'Deze sidebar wordt getoond na een aankoop',
        'before_widget' => '',
        'after_widget' => '',
    ));
}

add_action('widgets_init', 'theme_sidebars');
