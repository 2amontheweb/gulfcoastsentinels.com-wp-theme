<?php
/**
 * Template Name: Executive Team Template
 */

get_header(); ?>

<!-- MAIN CONTENT
================================================== -->
<div id="page-executive-team" class="custom-page">
  <div class="container">

    <div class="main-content">

      <?php the_title( '<h2>', '</h2>' );

        while ( have_posts() ) : the_post();
          the_content();
        endwhile;

        $loop = new WP_Query( array(
          'post_type' => 'executive',
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
