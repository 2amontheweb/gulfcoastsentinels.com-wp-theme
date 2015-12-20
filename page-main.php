<?php
/**
 * Template Name: Main Template
 */

get_header(); ?>

  <!-- MAIN CONTENT
================================================== -->
<div id="page-main" class="page">
  <div class="container">

    <div class="main-content">

      <?php the_title( '<h1>', '</h1>' ); ?>

      <?php while ( have_posts() ) : the_post();  ?>

      <?php the_content(); ?>

      <?php endwhile; ?>

    </div>

  </div>
</div><!-- container -->

<?php get_footer(); ?>
