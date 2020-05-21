<?php
/**
 * Plugin Name:     CS Videos
 * Description:     Custom post types for Videos
 * Author:          Christian Saldarriaga
 * Author URI:      https://github.com/SaldariagaDev
 * Text Domain:     cs_video
 * Domain Path:     /languages
 * Version:         0.1.0
 */

//include("inc/taxonomy.php");

use WPDev\Facades\PostType;

PostType::create('video')
    ->menuIcon('dashicons-video-alt3')
    ->supportsPageAttributes()
    ->supportsRevisions()
	->publiclyQueryable(false)
	->excludeFromSearch()
	->showInAdminBar(false)
	->showInNavMenus(false)
//    ->supportsExcerpt()
    ->register();