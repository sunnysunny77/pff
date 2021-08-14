<?php get_header() ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <article class="content-area col-sm-12 col-lg-8 mx-auto" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h1>

      <?php echo get_the_date(); ?>

      <?php the_time(); ?>

      <?php the_author(); ?>

      <?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

      <?php the_content() ?>

      <?php the_category(', ') ?>

      <?php the_tags(', ') ?>

      <?php comments_popup_link(); ?>.

      <?php edit_post_link(); ?>
         
    </article>

  <?php endwhile; ?>

<?php endif; ?>

<?php dynamic_sidebar("widget1"); ?>

<?php get_footer(); ?>