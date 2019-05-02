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

    'labels' =>array(
      'name' =>'girls',
      'singular_name' =>'girl',    
    ),
    'add_new' =>'',
    'all_items' =>'All Items',
    'add_new_item' =>'add item',
    'edit_item' =>'edit item',
    'update_item' =>'update item',
    'new_item' =>'new item',
    'search_item' =>'',
    'not_found' => ' no items found',
    'not_found_in_trash' =>'No items found in trash',
    'parent_item_colon' =>'parent item',
    
    'public' =>true,
    'has_archive' =>true,
    'publicly_queryable' =>true,
    'query_var' =>true,
    'rewrite' =>true,
    'capability_type' =>'post',
    'hierachy' =>false,
    'supports' =>array(
      'title',
      'editor',
      'excerpts',
      'revisions',
      'thumbnail',
      'custom-fields'
    ),
  
    'taxonomies' =>array('category','post_tag'),
    'menu_position' =>5,
    'exclude_from_search' =>false
    );

  register_post_type('girls', $args);
}
add_action('init','girls_custom_post_type');


function boys_custom_post_type(){

  $args = array(
    'labels' =>array(
      'name' =>'boys',
      'singular_name' =>'boy',    
    ),
    'add_new' =>'',
    'all_items' =>'All Items',
    'add_new_item' =>'add item',
    'edit_item' =>'edit item',
    'update_item' =>'update item',
    'new_item' =>'new item',
    'search_item' =>'',
    'not_found' => ' no items found',
    'not_found_in_trash' =>'No items found in trash',
    'parent_item_colon' =>'parent item',
    
    'public' =>true,
    'has_archive' =>true,
    'publicly_queryable' =>true,
    'query_var' =>true,
    'rewrite' =>true,
    'capability_type' =>'post',
    'hierachy' =>false,
    'supports' =>array(
      'title',
      'editor',
      'excerpts',
      'revisions',
      'thumbnail',
      'custom-fields'
    ),
  
    'taxonomies' =>array('category','post_tag'),
    'menu_position' =>5,
    'exclude_from_search' =>false
    );

  register_post_type('boys', $args);
}
add_action('init','boys_custom_post_type');





















 function boys_custom_post_type(){


  $args = array( 

                'labels' => array(
                                'name' =>'Boys',
                                'sigular_name' =>'boy'
                                  ),

                'add_new' => _x('Add New', 'boy'),
                'add_new_item' =>'Add New Post',
                'edit_item' => 'Edit Post',
                'new_item' =>'New Post',
                'view_item' => 'View Post',
                'all_items' => 'All Posts',
=======
>>>>>>> e2e5b5599dbc734fc18ba1df1af5ced139912895

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

  
  register_post_type('boys', $args);
 }
 add_action('init', 'boys_custom_post_type');




// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

