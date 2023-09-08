<?php
function post_list_function($atts)
{

    extract(shortcode_atts(array(
        'items' => 3
    ), $atts));

    $post = new WP_Query(array(
        'posts_per_page' => $items,
        'post_type' => 'post',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));

    ob_start(); ?>
    <div class="container">
        <div class="post-list">
            <?php while ($post->have_posts()) {
                $post->the_post();
                get_template_part('template-parts/post-card');
            } ?>
        </div>
    </div>

<?php return ob_get_clean();
}

add_shortcode('post_list', 'post_list_function');
?>