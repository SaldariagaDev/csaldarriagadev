<?php while (have_posts()) : the_post(); ?>

    <?php if(has_post_thumbnail()) : ?>
    	<div class="row">
    		<?php cs_get_image(null, ['class' => 'col-sm-3']); ?>
			<div class="col-sm-9">
				<?php the_content(); ?>
			</div>
	<?php else : 
		the_content(); 
	endif; ?>



    <!-- <?php // comments_template('/templates/comments.php'); ?> -->


<?php endwhile; ?>
