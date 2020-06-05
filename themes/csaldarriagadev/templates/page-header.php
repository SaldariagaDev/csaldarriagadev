<?php $Post = $data['Post'];
$terms = $Post->terms('project_feature');
/** @var \WPDev\Models\Post $Post */ ?>
<div class="page-header text-gray-600 container mb-6">
    <div class="border border-left-0 border-top-0 border-right-0 px-1_5 py-4 d-flex flex-column align-items-center flex-md-row justify-content-md-between">
        <div>
            <h1 class="mb-0 font-weight-light ">
		        <?php if(get_field('banner_image')) {
			        cs_get_image(get_field('banner_image'));
		        } else {
			        echo roots_title();
		        } ?>
            </h1>

	        <?php if($terms) :
                $count = count($terms);
	            $i = 0; ?>
                <p class="mb-0 text-gray-500">
			        <?php foreach($terms as $term) : ?>
				        <?= $term->name; ?>
                        <?= ++$i != $count ? ' | ' : ''; ?>
			        <?php endforeach; ?>
                </p>
	        <?php endif; ?>
        </div>

        <?php if($Post->postType() === 'project' && $Post->acfField('link')) : ?>
            <a href="<?= $Post->acfField('link') ?>" class="btn btn-secondary mt-3 mt-md-0" target="_blank" rel="noreferrer noopener">View Demo</a>
        <?php endif; ?>
    </div>
</div>
