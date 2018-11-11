<?php

// Load the main style sheet
function mathengetwo_add_theme_scripts(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'mathengetwo_add_theme_scripts' );

// register Nav Menus
	register_nav_menus( array(
		'header_menu' => 'Header Menu',
		'footer_menu' => 'Footer Menu',
		) 
	);



// register sidebars
// sidebars are any widget ready sections
// https://digwp.com/2010/02/how-to-widgetize-wordpress-theme/

if (function_exists('register_sidebar')) {

  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id'   => 'main_sidebar',
    'description'   => 'This is a widgetized area.'
 
  ));

}

// featured image setup
      add_theme_support('post-thumbnails');

//add image size
     add_image_size('banner_image', 600, 200, array('left','top'));
     // add_image_size('thumbnail', 200, 200, array('left','top'));





 // custom post type setup
 function girls_custom_post_type(){

  $args = array( 

                'labels' => array(
                                'name' =>'Girls',
                                'sigular_name' =>'girl'
                                  ),

                'add_new' => _x('Add New', 'girl'),
                'add_new_item' =>'Add New Post',
                'edit_item' => 'Edit Post',
                'new_item' =>'New Post',
                'view_item' => 'View Post',
                'all_items' => 'All Posts',
                'rewrite' => array( 'slug' => 'Girls' ),

                'taxonomies' =>array('category'),
                'supports' =>array(
                                    'title',
                                    'author',
                                    'thumbnail',
                                    'excerpt',                        
                                    'editor',
                                    'custom-fields',
                                    'revisions',
                                    'comments',
                                  ),

                'public' =>true,
                'has_archive' =>true,
                'exclude_from_search' =>true

                );

  
  register_post_type('girls', $args);
 }
 add_action('init', 'girls_custom_post_type');
