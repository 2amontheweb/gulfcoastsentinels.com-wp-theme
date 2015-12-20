<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>

  <!-- MAIN CONTENT
================================================== -->
<div id="page-main" class="page">
  <div class="container">

    <div class="main-content">
      <h1>Home Page</h1>

      <?php while ( have_posts() ) : the_post();  ?>

      <?php the_content(); ?>

      <?php endwhile; ?>

    </div>

  </div>
</div><!-- container -->

<?php get_footer(); ?>
