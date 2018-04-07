<?php

add_image_size( 'archive', 400, 400, true );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails');

function custom_excerpt_length( $length ) {
  return 12;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
    'id' => 'mainsidebar',
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}
function ww_add_styles(){ 
wp_register_style('webwise', get_template_directory_uri() . '/css/thimble.min.css', false, '1.0', 'all');
wp_enqueue_style('webwise'); // Enqueue it!
 }
add_action( 'wp_enqueue_scripts', 'ww_add_styles'); 
if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
  wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
  wp_enqueue_script('livereload');
}  

//add svg support
function add_file_types_to_uploads($file_types){
  $new_filetypes = array();
  $new_filetypes['svg'] = 'image/svg+xml';
  $file_types = array_merge($file_types, $new_filetypes );
  return $file_types;
  }
  add_action('upload_mimes', 'add_file_types_to_uploads');

  //remove embeds
  function my_deregister_scripts(){
    wp_dequeue_script( 'wp-embed' );
   }
   add_action( 'wp_footer', 'my_deregister_scripts' );


  //remove emoticons
// Disable the emoji's
function disable_wp_emojicons() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }
  add_action( 'init', 'disable_wp_emojicons' );
  function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
  return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
  return array();
  }
  }
  

/*if ( ! current_user_can( 'manage_options' ) ) {
  show_admin_bar( false );
}*/
add_filter( 'wp_default_scripts', 'change_default_jquery' );

function change_default_jquery(&$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        
    }
}