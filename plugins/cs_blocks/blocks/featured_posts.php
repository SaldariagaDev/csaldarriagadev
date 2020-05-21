<?php
use WPDev\Models\Image;
$quick_link_items = get_field('quick_link_items');

if($quick_link_items) : ?>
	<section class="cta-links full-width bg-gray-200 pt-6 pb-3 mb-n9">
		<div class="row">

			<?php foreach($quick_link_items as $quick_link_item) :
				$image = $quick_link_item['cta_link_image'];
				$title = $quick_link_item['cta_link_title'];
				$description = $quick_link_item['cta_link_description'];
				$link = $quick_link_item['cta_link_link']; ?>
				<div class="col-12 col-md-6 col-lg-3 mb-3"> <!--TODO: Dynamic Column Classes based on # of items -->
					<div class="card border-0 ">
						<?php if($image != false) : ?>
							<?php echo Image::create($image['id'], 'large')
                                ->setAttribute('class', 'card-image-top'); ?>
						<?php endif; ?>
						<div class="card-footer bg-white">
                            <?php if($title != false) : ?>
                                <h2 class="h3"><?= $title; ?></h2>
                            <?php endif; ?>
                            <?= $description != false ? $description : null; ?>
                            <?php if($link != false) : ?>
                                <a href="<?= $link['url']; ?>"
                                    class="stretched-link btn btn-primary"
                                    target="<?= $link['target']; ?>">
                                    <?= isset($link['title']) ? $link['title'] : 'Learn more'; ?>
                                </a>
                            <?php endif; ?>
						</div>
					</div>
				</div>
            <?php endforeach; ?>
		</div>
	</section>
<?php endif;

?>