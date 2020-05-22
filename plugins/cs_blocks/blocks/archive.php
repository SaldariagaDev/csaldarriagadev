<?php
use WPDev\Models\Post;
$heading = get_field('heading');
$caption = get_field('caption');
$posts = get_field('posts');
$button = get_field('button');

if($posts) : ?>
    <div class="row justify-content-center">
        <?php foreach($posts as $post) :
            $post = Post::create($post->ID);
            $features = $post->terms('project_feature');
            /** @var \WPDev\Models\Post $post */ ?>
            <div class="col-12 col-md-6 col-lg-3 mb-3">
                <?php include('post-card.php'); ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>