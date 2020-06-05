<?php use WPDev\Models\Image;
/** @var \WPDev\Models\Post $Post */
$highlights = $Post->acfField('highlights');

if($Post->acfField('overview')) : ?>
    <h2 class="text-gray-600 font-weight-light mb-1_5">Project Overview</h2>
    <?= $Post->acfField('overview'); ?>
<?php endif;

if($highlights) :
    $count = count($highlights);
	$lastElement = end($highlights);
	$i = 0; ?>
    <div class="mt-6">
        <?php foreach($highlights as $key => $highlight) :
            $i++;
            $image_id = $highlight['image'] ? $highlight['image']['id'] : null; ?>
            <div class="full-width bg-gradient-gray-200-gray-300 py-4
                            <?= $highlight == $lastElement ? 'mb-n6' : ''; ?>
                        ">
                <div class="row justify-content-around align-items-center <?= $i % 2 == 0 ? 'flex-md-row-reverse' : null; ?>">
                    <div class="col-md-5 mb-2 mb-md-0 text-center">
                        <?php if($highlight['title']) : ?>
                            <h3 class="text-gray-600 font-weight-light mb-2"><?= $highlight['title']; ?></h3>
                        <?php endif; ?>

                        <?php if($highlight['caption']) : ?>
                            <p class="lead"><?= $highlight['caption']; ?></p>
                        <?php endif; ?>

                        <?php if($highlight['link']) : ?>
                            <a href="<?= $highlight['link']['url']; ?>" class="btn btn-outline-dark-300" target="<?= $highlight['link']['target']; ?>">
                                <?= $highlight['link']['title'] ? $highlight['link']['title'] : 'Learn More'; ?>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-5">
                        <div class="browser-border card border-0 shadow shadow-lg">
                            <?= $image_id ? Image::create($image_id) : null; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>