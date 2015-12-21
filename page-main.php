<?php
/**
 * Template Name: Main Template
 */

get_header(); ?>

<!-- MAIN CONTENT
================================================== -->
<div id="page-main" class="custom-page">
  <div class="container">

    <div class="main-content">

      <?php

        the_title( '<h2>', '</h2>' );

        while ( have_posts() ) : the_post();

        the_content();

        endwhile;

      ?>

    </div>

  </div>
</div><!-- container -->

<?php get_footer(); ?>
