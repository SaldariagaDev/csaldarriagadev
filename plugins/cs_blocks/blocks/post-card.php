<?php use WPDev\Models\Image;
use WPDev\Models\Post;
/** @var \WPDev\Models\Post $post */ ?>
<a href="<?= $post->url(); ?>" class="card border-0 shadow shadow-lg text-decoration-none">
	<div class="card-body">
		<h3 class="h5 font-weight-light text-gray-600"><?= $post->title(); ?></h3>

		<?php if(!empty($features)) :
			$count = count($features);
			$i = 0; ?>
			<p class="font-weight-light small text-gray-500 mb-0">
				<?php foreach($features as $feature) :
					echo $feature->name;
					echo ++$i != $count ? ' | ' : '';
				endforeach; ?>
			</p>
		<?php endif; ?>
	</div>

	<?php if($post->hasFeaturedImage()) :
		$image = Image::create($post->featuredImageId()); ?>
		<div class="card-footer p-0 border-0">
			<div class="browser-border">
				<img src="<?= $image->url(); ?>" alt="<?= $image->alt(); ?>">
			</div>
		</div>
	<?php endif; ?>
</a>
