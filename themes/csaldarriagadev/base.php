    <?php get_template_part( 'templates/head' ); ?>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
        <div class="alert alert-warning">
            <?php _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'csaldarriagadev' ); ?>
        </div>
        <![endif]-->
        <?php do_action( 'get_header' );
        // Choose the correct header
        // pick which one in config.php
        if ( current_theme_supports( 'header-two-navs' ) ) {
            get_template_part( 'templates/header-two-navs' );
        } elseif ( current_theme_supports( 'header-nav-bottom' ) ) {
            get_template_part( 'templates/header-nav-bottom' );
        } else {
            get_template_part( 'templates/header' );
        }
        if ( ! is_front_page() ) {
            get_template_part( 'templates/page', 'header' );
        } ?>
        <div class="container">
            <div class="row">
                <main class="main py-3 <?php echo roots_main_class(); ?>" role="main">
			        <?php include roots_template_path(); ?>
                </main>
		        <?php if ( roots_display_sidebar() ) : ?>
                    <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
				        <?php include roots_sidebar_path(); ?>
                    </aside>
		        <?php endif; ?>
            </div>
        </div>
        <?php get_template_part( 'templates/footer' ); ?>
    </body>
</html>
