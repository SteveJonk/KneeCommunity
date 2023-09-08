<?php
function testimonials_function($atts)
{

    extract(shortcode_atts(array(
        'items' => -1
    ), $atts));

    $post = new WP_Query(array(
        'posts_per_page' => $items,
        'post_type' => 'testimonial',
        'orderby' => 'rand'
    ));

    ob_start(); ?>

    <div class="glide testimonials">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php while ($post->have_posts()) {
                    $post->the_post(); ?>
                    <li class="glide__slide">
                        <?php get_template_part('template-parts/testimonial-card'); ?> </li>
                <?php } ?>
            </ul>
        </div>
    </div>


    <!-- <div class="post-list">
        <?php while ($post->have_posts()) {
            $post->the_post();
            get_template_part('template-parts/testimonial-card');
        } ?>
    </div> -->

<?php return ob_get_clean();
}

add_shortcode('testimonials', 'testimonials_function');
?>