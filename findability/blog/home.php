<?php get_header() ?>

<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <?php
    $classes = [
      'content-area',
      'col-sm-12 ',
      'col-lg-8',
      'mx-auto'
    ];
    ?>

    <article <?php post_class($classes); ?> id="post-<?php the_ID(); ?>">

      <h1> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h1>

      <p>
        By:&nbsp;
        <?php the_author(); ?>
        ,
        <?php echo get_the_date(); ?>
      </p>

      <?php if (has_post_thumbnail()) {  ?> <div> <?php the_post_thumbnail(); ?> </div> <?php } ?>

      <?php the_content() ?>

      <?php the_category();  ?>

      <p>

        <?php the_tags(); ?>

      </p>

      <p>

        Comments:

        <?php comments_popup_link(); ?>

      </p>


      <?php edit_post_link(); ?>

    </article>

    <br>
    <br>
    <br>

  <?php endwhile; ?>

<?php endif; ?>

<?php dynamic_sidebar("widget"); ?>

<?php dynamic_sidebar("widget1"); ?>

<?php get_footer(); ?>