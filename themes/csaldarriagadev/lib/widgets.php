<?php
/**
 * Register sidebars and widgets
 */
function roots_widgets_init() {
    register_sidebar(array(
        'name' => __('Top Body', 'csaldarriagadev'),
        'id' => 'top-body',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget' => '</div></section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
  /*===========================
      # Header Areas
   ===========================*/
  if ( current_theme_supports( 'header-top-bar' ) ) {
    register_sidebar( array (
        'name'          => __( 'Header Top Bar Left', 'csaldarriagadev' ),
        'id'            => 'header-top-bar-left',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array (
        'name'          => __( 'Header Top Bar Right', 'csaldarriagadev' ),
        'id'            => 'header-top-bar-right',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
  }

  if ( current_theme_supports( 'header-two-navs' ) ) {
    register_sidebar( array (
        'name'          => __( 'Header Above Nav', 'csaldarriagadev' ),
        'id'            => 'header-above-nav',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
  }

  if ( current_theme_supports( 'header-nav-bottom' ) ) {
    register_sidebar( array (
        'name'          => __( 'Header Right', 'csaldarriagadev' ),
        'id'            => 'header-right',
        'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
        'after_widget'  => '</div></section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
  }

  /*===========================
      # Slideshow Area
   ===========================*/
  register_sidebar( array (
      'name'          => __( 'Slideshow', 'csaldarriagadev' ),
      'id'            => 'slider',
      'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
      'after_widget'  => '</div></section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );

  /*===========================
      # Preface Areas
   ===========================*/
  register_sidebar( array (
      'name'          => __( 'Preface A', 'csaldarriagadev' ),
      'id'            => 'preface-a',
      'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
      'after_widget'  => '</div></section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );
  register_sidebar( array (
      'name'          => __( 'Preface B', 'csaldarriagadev' ),
      'id'            => 'preface-b',
      'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
      'after_widget'  => '</div></section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );
  register_sidebar( array (
      'name'          => __( 'Preface C', 'csaldarriagadev' ),
      'id'            => 'preface-c',
      'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
      'after_widget'  => '</div></section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );

  /*===========================
      # Sidebar Areas
   ===========================*/
  register_sidebar( array (
      'name'          => __( 'Sidebar', 'csaldarriagadev' ),
      'id'            => 'sidebar',
      'before_widget' => '<section class="widget %1$s %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );

  /*===========================
      # Postscript Areas
   ===========================*/
  register_sidebar( array (
      'name'          => __( 'Postscript A', 'csaldarriagadev' ),
      'id'            => 'postscript-a',
      'before_widget' => '<section id="%1$s %2$s" class="widget %1$s %2$s"><div class="widget-inner">',
      'after_widget'  => '</div></section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );

  /*===========================
      # Footer Areas
   ===========================*/
  register_sidebar( array (
      'name'          => __( 'Footer', 'csaldarriagadev' ),
      'id'            => 'footer',
      'before_widget' => '<section class="widget %1$s %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
  ) );

//  register_sidebar( array (
//      'name'          => __( 'Footer A', 'csaldarriagadev' ),
//      'id'            => 'footer-a',
//      'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
//      'after_widget'  => '</div></section>',
//      'before_title'  => '<h3>',
//      'after_title'   => '</h3>',
//  ) );
//
//  register_sidebar( array (
//      'name'          => __( 'Footer B', 'csaldarriagadev' ),
//      'id'            => 'footer-b',
//      'before_widget' => '<section class="widget %1$s %2$s"><div class="widget-inner">',
//      'after_widget'  => '</div></section>',
//      'before_title'  => '<h3>',
//      'after_title'   => '</h3>',
//  ) );
//

  if (current_theme_supports('footer-credits')) {
    register_sidebar( array (
        'name'          => __( 'Footer Credits', 'csaldarriagadev' ),
        'id'            => 'footer-credits',
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
  }

}

add_action( 'widgets_init', 'roots_widgets_init' );


