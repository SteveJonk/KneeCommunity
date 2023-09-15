<?php

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

// Include needed functions
include "inc/inc.js.php";
include "inc/login-screen.php";
include "inc/navbar.php";
include "inc/sidebars.php";
include "inc/excerpt.php";
include "inc/custom-post-types.php";
include "inc/group-block-style.php";
include "inc/image-block-style.php";
include "inc/woocommerce/account.php";
include "inc/woocommerce/product-list-page.php";
include "inc/woocommerce/woocommerce-gutenberg.php";

// Include shortcodes
include "inc/shortcodes/blog-list-summary.php";
include "inc/shortcodes/testimonials.php";

function theme_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'theme_support');

function theme_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_post_type_support('post', 'page-attributes');
};


add_action('after_setup_theme', 'theme_features');