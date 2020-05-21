<?php
use WPDev\Models\Image;
$slides = get_field('slides');
if($slides) : ?>
    <div class="full-width bg-dark-600 px-xs-0">
        <section class="slider jumbotron rounded-0 text-center mt-n3 mb-3">
            <?php foreach($slides as $slide) :
                $image = $slide['image'];
                $heading = $slide['heading'];
                $caption = $slide['caption'];
                $link = $slide['link']; ?>
                <div class="slide">
                    <div class="caption container">
	                    <?php if($heading) : ?>
                            <h2 class="text-shadow"><?= $heading; ?></h2>
	                    <?php endif; ?>

                        <?php if($caption) : ?>
                            <div class="lead text-shadow">
                                <?= $caption; ?>
                            </div>
                        <?php endif; ?>

	                    <?php if($link != false) : ?>
                            <a href="<?= $link['url']; ?>"
                               class="btn btn-primary btn-lg"
                               target="<?= $link['target']; ?>">
			                    <?= isset($link['title']) ? $link['title'] : 'Learn more'; ?>
                            </a>
	                    <?php endif; ?>
                    </div>

                    <?php if($image != false) : ?>
                        <?php echo Image::create($image['id'], 'large')
                            ->setAttribute('class', 'jumbotron--objfit-image'); ?>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
<?php endif; ?>