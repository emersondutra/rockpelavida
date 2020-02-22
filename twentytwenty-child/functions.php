<?php
/* enqueue script for parent theme stylesheeet */        
function childtheme_parent_styles() {
 
 // enqueue style
 wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );                       
}
add_action( 'wp_enqueue_scripts', 'childtheme_parent_styles');


function my_sidebar() {
 register_sidebar(
  array (
      'name' => __( 'Sidebar', 'twentytwenty'),
      'id' => 'my_sidebar',
      'description' => __( 'Widgets here will appear in your sidebar', 'twentytwenty' ),
      'before_widget' => '<div class="widget-content">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
  )
 );
}
add_action( 'widgets_init', 'my_sidebar' );
