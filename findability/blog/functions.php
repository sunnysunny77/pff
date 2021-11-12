<?php

function boot_scripts()
{
  wp_register_script('ga', 'https://www.googletagmanager.com/gtag/js?id=UA-204247411-4');
  wp_enqueue_script('ga');
  wp_register_script('jquery', get_template_directory_uri() . '/lib/jquery/jquery.js');
  wp_enqueue_script('jquery');
  wp_register_script('popper', get_template_directory_uri() . '/lib/popperjs/popperjs.js');
  wp_enqueue_script('popper');
  wp_register_script('bootstrap_js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js');
  wp_enqueue_script('bootstrap_js');
  wp_register_style('bootstrap_css', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap_css');
  wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', '', false, true);
  wp_enqueue_script('scripts');
  wp_register_style('screen', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('screen');
}
add_action('wp_enqueue_scripts', 'boot_scripts');

function themes_setup()
{
  add_theme_support('menus');
  add_theme_support('widget-customizer');
  add_theme_support('title-tag');
  add_theme_support('html5', ['script', 'style', 'comment-form', 'search-form', 'gallery', 'caption']);
  register_nav_menus(array('primary' => __('Primary Menu', 'THEMENAME'),));
}
add_action('after_setup_theme', 'themes_setup');

function register_navwalker()
{

  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function register_my_custom_sidebars()
{
  register_sidebar(
    array(
      'name' => 'widget',
      'id' => 'sidebar-1',
      'before_widget' => '<section class = "widget content-area col-sm-12 col-lg-8 mx-auto">',
      'after_widget' => '</section>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name' => 'widget1',
      'id' => 'sidebar-2',
      'before_widget' => '<section class = "widget1">',
      'after_widget' => '</section>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );
}
add_action('widgets_init', 'register_my_custom_sidebars');

function load_dashicons_front_end()
{
  wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'load_dashicons_front_end');

function target_main_category_query_with_conditional_tags($query)
{

  if (!is_admin() && $query->is_main_query()) {

    if (is_home()) {
      $query->set('posts_type', 'post');
      $query->set('posts_per_page', '3');
    }

    if (is_archive()) {
      $query->set('posts_type', 'post');
      $query->set('posts_per_page', '-1');
    }
  }
}
add_action('pre_get_posts', 'target_main_category_query_with_conditional_tags');
