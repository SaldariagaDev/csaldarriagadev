<!-- <div class="stats">
	<p><span><?php // echo get_the_date(); ?></span>&nbsp;
	<span><?php // echo __('By', 'csaldarriagadev'); ?> <?php // echo get_the_author(); ?></span></p>
</div> -->

<?php if(get_the_terms(get_the_ID(), 'category')) : ?>
	<div class="stats">
		<span><strong>Categories</strong></span>
		<?php foreach(get_the_terms(get_the_ID(), 'category') as $category) : ?>

			<span><?php echo $category->name; ?></span>

		<?php endforeach; ?>
	</div>
<?php endif; ?>

<?php if(get_the_terms(get_the_ID(), 'tag')) : ?>
	<div class="stats">
		<span><strong>Tags</strong></span>
		<?php foreach(get_the_terms(get_the_ID(), 'tag') as $tag) : ?>
			<span><?php echo $tag->name; ?></span>

		<?php endforeach; ?>
	</div>
<?php endif; ?>