<?php
use WPDev\Models\Image;
use WPDev\Models\Post;
$heading = get_field('heading');
$caption = get_field('caption');
$featured_posts = get_field('posts');
$button = get_field('button'); ?>

<div class="full-width bg-light py-6">
    <?php if($heading) : ?>
        <h2 class="font-weight-light text-center mb-1-5"><?= $heading; ?></h2>
    <?php endif; ?>

    <?php if($caption) : ?>
        <p class="lead text-center mb-6 text-gray-500 mxw-600 mx-auto"><?= $caption; ?></p>
    <?php endif; ?>

    <?php if($featured_posts) : ?>
        <div class="row justify-content-center">
            <?php foreach($featured_posts as $post) :
                $post = Post::create($post->ID);
                $features = $post->terms('project_feature'); ?>
                <div class="col-12 col-md-6 col-lg-5 mb-3">
                    <?php include('post-card.php'); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if($button) : ?>
        <div class="text-center">
            <a href="<?= $button['url']; ?>" class="btn btn-secondary shadow">
                <?= $button['title'] ? $button['title'] : 'View All' ?>
            </a>
        </div>
    <?php endif; ?>
</div>
<!--<div class="full-width px-0 border-triangle border-triangle-bottom-right-light mb-n9"></div>-->
