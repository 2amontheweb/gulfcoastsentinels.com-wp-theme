<?php
/**
 * Template Name: Main Page
 */

get_header(); ?>

  <!-- MAIN CONTENT
================================================== -->
<div id="page-main" class="page">
  <div class="container">
    <div id="primary">

      <div id="content">

        <section class="main-content">

          <?php while ( have_posts() ) : the_post();  ?>

          <?php the_content(); ?>

          <?php endwhile; ?>

        </section>

      </div><!-- content -->

    </div><!-- primary -->
  </div>
</div><!-- container -->

<?php get_footer(); ?>
