<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>

  <!-- MAIN CONTENT
================================================== -->
<div id="page-home" class="custom-page">

  <div class="main-content">
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile;
    ?>

    <div class="our-mission">
      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h2>Our Mission</h2>
            <p>To provide life-changing opportunities for men and women of the U.S. Armed Forces who have suffered severe injuries post 9/11 and need the support of grateful communities to realize their goals and dreams.</p>
          </div>
          <div class="col-sm-5">
            <div class="donate-button">
              <a href="/want-to-donate" class="button-link">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/donate.jpg" class="button-image">
              </a>
            </div>
            <div class="get-involved">
              <button type="button" class="btn">
                <a href="/volunteer" class="button-link">GET INVOLVED</a>
              </button>
            </div>
            <div class="apply">
              <button type="button" class="btn">
                <a href="/form" class="button-link">APPLY</a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="upcoming-events">
      <div class="header-container">
        <div class="container">
          <h2>Upcoming Events</h2>
        </div>
      </div>

      <?php

        $upcoming_events = new WP_Query( array(
          'post_type' => 'event',
          'order' => 'ASC'
        ));

        while( $upcoming_events->have_posts() ) : $upcoming_events->the_post();

          $on_home_page   = get_field('on_home_page');
          $start_date   = get_field('start_date');
          $end_date   = get_field('end_date');
          $home_page_title   = get_field('home_page_title');
          $home_page_excerpt   = get_field('home_page_excerpt');
          $home_page_image   = get_field('home_page_image');
          $page_link = get_field('page_link');

      ?>
      <?php if ( $on_home_page ) : ?>
        <a href="<?php echo $page_link; ?>">
          <div class="upcoming-event">
            <div class="container">
              <div class="row">

                <div class="col-sm-8">
                  <h4><?php echo the_title(); ?></h4>
                  <h6>
                    <?php echo date("M d, Y", strtotime( $start_date )); ?>
                    <?php if ( $end_date ) : ?>
                      - <?php echo date("M d, Y", strtotime( $end_date )); ?>
                    <?php endif; ?>
                  </h6>
                  <p><?php echo $home_page_excerpt; ?></p>
                </div>

                <div class="col-sm-4">
                  <img class="image" src="<?php echo $home_page_image[url]; ?>" alt="<?php echo $home_page_image[alt]; ?>">
                </div>

              </div>
            </div>
          </div>
        </a>
      <?php endif; ?>

      <?php
        endwhile;  wp_reset_query();
      ?>
    </div>





    <div class="container">
      <div class="sentinels">
        <h2>Meet Our Sentinels</h2>
        <?php

          $sentinels = new WP_Query( array(
            'post_type' => 'sentinel',
            'order' => 'ASC'
          ));

          while( $sentinels->have_posts() ) : $sentinels->the_post();

            $military_branch   = get_field('military_branch');
            $retired   = get_field('retired');
            $summary_of_service   = get_field('summary_of_service');
            $profile_photo   = get_field('profile_photo');

        ?>
          <div class="sentinel">
            <div class="row">
              <div class="col-sm-4">
                <?php if ( $profile_photo ) : ?>
                  <img class="block-center" src="<?php echo $profile_photo[url]; ?>" alt="<?php echo $profile_photo[alt]; ?>">
                <?php endif; ?>
              </div>
              <div class="col-sm-8">

                <h5><?php echo the_title(); ?> <?php echo $military_branch; ?>,
                  <?php if ( $retired ) : ?>
                    Retired
                  <?php endif; ?>
                </h5>

                <?php if ( $summary_of_service ) : ?>
                  <div class="summary">
                    <p><?php echo $summary_of_service; ?></p>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php

          endwhile; wp_reset_query();

        ?>
      </div>
    </div>

    <div class="our-sponsors">
      <div class="container">
        <h2>Our Sponsors</h2>
      </div>
      <div class="our-sponsors-carousel-wrapper">
        <div class="our-sponsors-carousel">

          <?php

            $sponsors = new WP_Query( array(
              'post_type' => 'sponsor',
              'order' => 'ASC'
            ));

            while( $sponsors->have_posts() ) : $sponsors->the_post();

              $home_carousel_image   = get_field('home_carousel_image');

          ?>
            <?#php if ( $home_carousel_image ) : ?>
              <img class="sponsor-image" src="<?php echo $home_carousel_image[url]; ?>" alt="<?php echo $home_carousel_image[alt]; ?>">
            <?#php endif; ?>

          <?php

            endwhile;  wp_reset_query();

          ?>
        </div>
      </div>
    </div>

  </div>

</div>

<?php get_footer(); ?>
