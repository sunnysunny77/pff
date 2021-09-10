<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
 	<meta name="description" content="Findability Blog - Findability" />
	<meta name="keywords" content="Findability, SEO, Search Engine Optimization, Findability Blog" />
    <meta name="author" content="D.C" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_title('', false); ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header>

    <nav class="navbar navbar-expand-md navbar-light" role="navigation">

      <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
          
          <span class="navbar-toggler-icon"></span>
        
        </button>

        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_bloginfo('name'); ?></a>

        <?php wp_nav_menu(

          array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-end mr-5',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          )
        ); 
        ?>

      </div>

    </nav>

  </header>

  <main class="clearfix">