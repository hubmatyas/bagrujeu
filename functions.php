<?php


function load_stylesheets()
{
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');
  wp_register_style('mobile', get_template_directory_uri() . '/css/mobile.css', array(), false, 'all');
  wp_enqueue_style('mobile');
}
  add_action('wp_enqueue_scripts', 'load_stylesheets');

  add_theme_support('post-thumbnails');



?>


