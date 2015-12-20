<?php
/**
 * Template Name: Board Of Directors Template
 */

get_header(); ?>

<!-- MAIN CONTENT
================================================== -->
<div id="page-board-of-directors">
  <div class="container">

    <div class="main-content">

      <?php the_title( '<h2>', '</h2>' );

        while ( have_posts() ) : the_post();
          the_content();
        endwhile;

        $loop = new WP_Query( array(
          'post_type' => 'director',
          'order' => 'ASC'
        ));

      ?>

      <div class="row">

        <?php

          while( $loop->have_posts() ) : $loop->the_post();
            get_template_part( 'template-parts/content', 'member' );
          endwhile; wp_reset_query();

        ?>

      </div>

    </div>

  </div>
</div><!-- container -->

<?php get_footer(); ?>
