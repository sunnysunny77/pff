<?php

function boot_scripts()
{
	wp_register_script( 'jquery', get_template_directory_uri() . '/lib/jquery/jquery.js' );
	wp_enqueue_script('jquery');
	wp_register_script( 'popper', get_template_directory_uri() . '/lib/popperjs/popperjs.js' );
	wp_enqueue_script('popper');
  wp_register_script( 'bootstrap_js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js' );
	wp_enqueue_script('bootstrap_js');
  wp_register_style( 'bootstrap_css', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap_css');
  wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', '', false, true);
  wp_enqueue_script('scripts');
  wp_register_style('screen', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('screen');
}
add_action('wp_enqueue_scripts', 'boot_scripts');

function themes_setup() {
	add_theme_support('menus');
	add_theme_support('widget-customizer');
	add_theme_support( 'title-tag' );
	register_nav_menus(array('primary' => __('Primary Menu', 'THEMENAME'),));
  }
add_action( 'after_setup_theme', 'themes_setup');

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
      'before_widget' => '<div class = "widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );

  register_sidebar(
    array(
      'name' => 'widget1',
      'id' => 'sidebar-2',
      'before_widget' => '<div class = "widget1">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    )
  );
}
add_action('widgets_init', 'register_my_custom_sidebars');

function load_dashicons_front_end() {
  wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );