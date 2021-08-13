<?php get_header() ?>


<div id="single" class="content-area col-sm-12 col-lg-8">
  
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- http://codex.wordpress.org/Template_Tags/post_class -->


        <header>

          <nav>
            <!-- Post navigation -->

            <div id="prevpost"><?php previous_post_link(); ?></div>
            <div id="nextpost"><?php next_post_link(); ?> </div>

          </nav>

          <h1>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h1> <!-- Title of the post -->

          <?php echo get_the_date(); ?>
          <!-- Date published -->
          <?php the_time(); ?>
          <!-- Time published -->
          <?php the_author(); ?><br /> <!-- Author of the post -->



        </header>

        <?php
        if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it. 
        ?>
          <aside>
            <?php the_post_thumbnail(); ?>
          </aside>
        <?php } ?>


        <?php the_content(); ?>
        <!-- Contents of a post -->

        <footer>

          <?php the_category(', ') ?>
          <!-- Post category -->
          <?php the_tags(', ') ?>
          <!-- Post tags -->

          <?php comments_popup_link(); ?>.
          <!-- comments_number -->
          <?php edit_post_link(); ?>

          <?php comments_template(); ?>


        </footer>


      </div>



    <?php endwhile; ?>


  <?php endif; ?>


</div>

<?php get_footer(); ?>