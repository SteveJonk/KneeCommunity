<?php get_header() ?>
<div class="container">
    <?php while (have_posts()) {
        the_post();
        get_template_part('template-parts/post-header');
        the_content();
    } ?>
</div>

<?php get_footer(); ?>