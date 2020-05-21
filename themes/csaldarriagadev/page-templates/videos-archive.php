<?php /*
Template Name: Videos Archive
*/
use WPDev\Models\Post;
/** @var \WPDev\Models\Post $video */

$aspect_ratio_21x9 = 21 / 9;
$aspect_ratio_16x9 = 16 / 9;
$aspect_ratio_4x3 = 4 / 3;

if($data['videos']) : ?>
    <div class="row">
        <?php foreach($data['videos'] as $video) :
            $iframe = $video->acfField('url');
            preg_match('/width="(.+?)"/', $iframe, $width);
            preg_match('/height="(.+?)"/', $iframe, $height);

            if(!empty($width) && !empty($height)) :
                if($width[1] / $height[1] === $aspect_ratio_21x9) :
                    $aspect_ratio_class = 'embed-responsive-21by9';
                endif;
                if($width[1] / $height[1] === $aspect_ratio_16x9) :
                    $aspect_ratio_class = 'embed-responsive-16by9';
                endif;
                if($width[1] / $height[1] === $aspect_ratio_4x3) :
                    $aspect_ratio_class = 'embed-responsive-4by3';
                endif;
            endif;

            if($video->acfField('url')) : ?>
                <div class="col-12 col-sm-6 col-md-4 mb-3">
                    <div class="embed-responsive <?= $aspect_ratio_class; ?>">
                        <?= $video->acfField('url'); ?>
                    </div>
                </div>
            <?php endif;
        endforeach; ?>
    </div>
<?php endif; ?>