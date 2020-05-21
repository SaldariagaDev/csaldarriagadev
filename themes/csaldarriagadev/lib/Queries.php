<?php 

namespace CS;

use Tightenco\Collect\Support\Collection;

class Queries
{

	public static function getVideosByCategory($meta_query = '')
	{
		$args = array(
			'post_type'			=>		'video',
			'posts_per_page'	=>		-1,
		);

        $custom_loop = new \WP_Query($args);
        $videos = collect(get_posts_from_query($custom_loop));


        $videos_sorted = $videos->sortBy(function($item, $key){
            return $item->terms('video_type')[0]->term_order;
        });

        $videos_by_category = $videos_sorted->groupBy(function($item, $key){
            return $item->terms('video_type')[0]->term_taxonomy_id;
        });

        return $videos_by_category->toArray();
    }

}


