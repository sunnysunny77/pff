<?php get_header() ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <div id="prevpost"><?php previous_post_link(); ?></div>
		
      <div id="nextpost"><?php next_post_link(); ?> </div>

      <h1>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>

      <?php echo get_the_date(); ?>

      <?php the_time(); ?>

      <?php the_author(); ?><br />

      <?php
      if (has_post_thumbnail()) {
      ?>
        <div>
          <?php the_post_thumbnail(); ?>
        </div>
      <?php } ?>

      <?php the_content(); ?>

      <?php the_category(', ') ?>

      <?php the_tags(', ') ?>

      <?php comments_popup_link(); ?>

      <?php edit_post_link(); ?>

      <?php comments_template(); ?>

    </section>

  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>