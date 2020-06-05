<?php use WPDe\Models\Post;
/** @var \WPDev\Models\Posts $Posts */
/** @var \WPDev\Models\Post $post */

if (!$Posts) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'csaldarriagadev'); ?>
    </div>
    <?php get_search_form(); ?>
<?php else : ?>
    <?php foreach($Posts as $post) : ?>
        <div class="row">
            <div class="<?= $post->hasFeaturedImage() ? 'col-sm-3 col-md-4' : 'd-none' ?>">
                <?= $post->featuredImage('thumbnail'); ?>
            </div>
            <div class="<?= $post->hasFeaturedImage() ? 'col-sm-9 col-md-8' : 'col-12' ?>">
                <h3><?= $post->title(); ?></h3>
                <div class="mt-1">
                    <?= $post->excerpt(); ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>


<?php $args = [
    'prev_text'   =>  '<i class="fa fa-angle-left"></i>',
    'next_text'   =>  '<i class="fa fa-angle-right"></i>',
    'type'      =>  'list',
];
echo paginate_links($args); ?>