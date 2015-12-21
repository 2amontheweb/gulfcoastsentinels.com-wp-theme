<?php
/**
 * Template Name: Contact Template
 */

get_header(); ?>

<!-- MAIN CONTENT
================================================== -->
<div id="page-contact" class="custom-page">
  <div class="container">

    <div class="main-content">

      <?php the_title( '<h2>', '</h2>' );

        while ( have_posts() ) : the_post();
          the_content();
        endwhile;

        $board_of_directors = new WP_Query( array(
          'post_type' => 'director',
          'order' => 'ASC'
        ));

        $executive_team = new WP_Query( array(
          'post_type' => 'executive',
          'order' => 'ASC'
        ));

      ?>

      <div class="row">
        <h3>Board of Directors</h3>

        <?php

          while( $board_of_directors->have_posts() ) : $board_of_directors->the_post();

            $email   = get_field('email');
            $title   = get_field('title');

          ?>

            <h5><?php echo the_title(); ?></h5>

            <?php if ( $title ) : ?>
              <p><?php echo $title; ?></p>
            <?php endif; ?>

            <?php if ( $email ) : ?>
              Email: <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <?php endif; ?>

        <?php

          endwhile; wp_reset_query();

        ?>

      </div>

      <div class="row">
        <h3>Executive Team</h3>

        <?php

          while( $executive_team->have_posts() ) : $executive_team->the_post();

            $email   = get_field('email');
            $title   = get_field('title');

          ?>

            <h5><?php echo the_title(); ?></h5>

            <?php if ( $title ) : ?>
              <p><?php echo $title; ?></p>
            <?php endif; ?>

            <?php if ( $email ) : ?>
              Email: <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <?php endif; ?>

        <?php

          endwhile; wp_reset_query();

        ?>

      </div>

    </div>

  </div>
</div><!-- container -->

<?php get_footer(); ?>
