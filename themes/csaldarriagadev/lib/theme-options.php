<?php

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false,
      'autoload'    => true // all options saved on this page are autoloaded. Use get_option() instead of get_field() for these fields. *Note - prefix the field name with 'options_' ex. (options_site_logo)
  ));

}

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array (
      'key' => 'group_58bc6d178c3c3',
      'title' => 'Theme Settings',
      'fields' => array (
          array (
              'key' => 'field_58bc6d1c20ddb',
              'label' => 'Logo',
              'name' => 'site_logo',
              'type' => 'image',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                  'width' => '',
                  'class' => '',
                  'id' => '',
              ),
              'return_format' => 'id',
              'preview_size' => 'medium',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
          ),
      ),
      'location' => array (
          array (
              array (
                  'param' => 'options_page',
                  'operator' => '==',
                  'value' => 'theme-general-settings',
              ),
          ),
      ),
      'menu_order' => 0,
      'position' => 'normal',
      'style' => 'default',
      'label_placement' => 'top',
      'instruction_placement' => 'label',
      'hide_on_screen' => '',
      'active' => 1,
      'description' => '',
  ));

endif;