<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'csaldarriagadev'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
<?php endwhile; ?>

<?php $args = [
  'prev_text'   =>  '<i class="fa fa-angle-left"></i>',
  'next_text'   =>  '<i class="fa fa-angle-right"></i>',
  'type'      =>  'list',
];
echo paginate_links($args); ?>