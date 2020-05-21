<?php

namespace CS;

use WPDev\Controller\ControllerInterface;

class VideosArchive implements ControllerInterface
{
    /**
     * The default data set by wpdev before calling build()
     * @var  array
     */
    public $defaultData = [];

    public function build()
    {
        $args = array(
            'post_type'			=>		'video',
            'posts_per_page'	=>		-1,
        );

        $custom_loop = new \WP_Query($args);
        $videos = get_posts_from_query($custom_loop);

        return [
            'videos'    =>      $videos,
        ];
    }
}