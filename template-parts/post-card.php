<div class="post-card">
    <a class="post-card__link" href=" <?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        <img class="post-card__link__image landscape" alt="image for <?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(null, 'thumbnail') ?>" />
        <div class="post-card__link__content">
            <h4 class="post-card__link__title"><?php the_title(); ?></h4>
            <p class="post-card__link__summary"><?php echo get_the_excerpt(); ?></p>
        </div>
    </a>
</div>