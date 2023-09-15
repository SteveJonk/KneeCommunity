<?php get_header() ?>
<div class="container">
    <?php while (have_posts()) {
        the_post(); ?>

    <div class="post-header">
        <?php if (get_the_post_thumbnail_url(null, 'header')) { ?>
        <img class="post-header__image" alt="header for <?php the_title(); ?>"
            src="<?php echo get_the_post_thumbnail_url(null, 'header'); ?>" />
        <?php } ?>
        <h1 class="post-header__title"><?php the_title(); ?></h1>

    </div>

    <?php the_content();
    } ?>
</div>

<?php get_footer(); ?>