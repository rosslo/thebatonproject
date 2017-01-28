<?php
 function add_taxonomies_to_pages() {
      register_taxonomy_for_object_type( 'post_tag', 'page' );
      register_taxonomy_for_object_type( 'category', 'page' );
  }

 add_action( 'init', 'add_taxonomies_to_pages' );


 if ( ! is_admin() ) {
 add_action( 'pre_get_posts', 'category_and_tag_archives' );

   }

// Add Page as a post_type in the archive.php and tag.php

function category_and_tag_archives( $wp_query ) {

  $my_post_array = array('post','page');

  if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
      $wp_query->set( 'post_type', $my_post_array );

    if ( $wp_query->get( 'tag' ) )
      $wp_query->set( 'post_type', $my_post_array );

  }
function wpcodex_add_excerpt_support_for_pages() {
  add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'wpcodex_add_excerpt_support_for_pages' );

if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}
/* Theme setup */
register_nav_menus(
  array(
    'primary-menu'=>_( '主選單')
  )
);
// Register custom navigation walker
//登入頁的logo圖片及大小設定
function custom_login_logo() {
  echo '<style type="text/css">
      .login h1 a { margin-top:-80px;
              background-image:url(http://thebatonproject.org/wp-content/uploads/2016/02/logoFlat.png) !important;
              background-size: 480px 200px; width:480px; height:200px;}
    </style>';
}
add_action('login_head', 'custom_login_logo');
//登入頁的logo圖片的點擊連結
function custom_loginlogo_url($url) {
    return get_bloginfo('url');
}
add_filter( 'login_headerurl', 'custom_loginlogo_url' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
?>