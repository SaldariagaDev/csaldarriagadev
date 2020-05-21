<article <?php post_class(' mb-3'); ?>>
    <a class="panel box-shadow-soft" href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="image"><?php cs_get_image(); ?></div>
        <?php endif; ?>

        <div class="caption">
            <h2 class="entry-title"><?php the_title(); ?></h2>
            <?php get_template_part('templates/entry-meta'); ?>
            <?php the_excerpt(); ?>
        </div>
    </a>
</article>
