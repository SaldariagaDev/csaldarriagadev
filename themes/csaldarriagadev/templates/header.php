<header>
	<?php $site_logo = get_option( 'options_site_logo' );
	if ( current_theme_supports( 'header-top-bar' ) ) {
		get_template_part( 'templates/header-top-bar' );
	} ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary-700 shadow z-index-1 pb-0 pb-md-1">
        <div class="container">
            <div class="d-flex w-100 justify-content-between align-items-center mb-1 mb-md-0">
                <a class="navbar-brand" href="<?php echo home_url(); ?>/">
			        <?php if ( ! $site_logo ) {
				        echo bloginfo( 'name' );
			        } else {
				        $args = [
					        'class' => 'logo__img',
				        ];
				        cs_get_image( $site_logo, $args );
			        } ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse
            w-100 pt-1 pb-1 mr-md-0 ml-md-0 pt-md-0 pb-md-0 pl-md-0 pr-md-0
            flex-wrap full-width" id="primary-menu">
<!--                <ul class="navbar--contact w-100 border-bottom border-dark-300 mt-1 mb-1 pb-2 mt-md-0 mb-md-1 pb-md-1-->
<!--                 d-flex justify-content-around justify-content-md-end text-light">-->
<!--                    <li class="ml-md-3">-->
<!--                        <a href="tel:+18057911003" class="font-weight-light">-->
<!--                            <i class="fa-2x fas fa-phone mr-1"></i>-->
<!--                            <span class="d-none d-md-inline">805 791-1003</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="ml-md-3">-->
<!--                        <a href="mailto:saldarriagadev@gmail.com" class="font-weight-light">-->
<!--                            <i class="fa-2x fas fa-envelope mr-1"></i>-->
<!--                            <span class="d-none d-md-inline">saldarriagadev@gmail.com</span>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
                <div class="d-flex flex-column flex-md-row w-100">
	                <?php wp_nav_menu( array(
		                'theme_location' => 'primary_navigation',
		                'depth'          => 2, // 1 = no dropdowns, 2 = with dropdowns.
		                'menu_class'     => 'navbar-nav w-100 justify-content-end',
		                'menu_item_class'=> 'border-bottom border-dark-400',
		                'container'      => false,
		                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
		                'walker'         => new WP_Bootstrap_Navwalker(),
	                ) ); ?>
                </div>
            </div>
        </div>
    </nav>
</header>