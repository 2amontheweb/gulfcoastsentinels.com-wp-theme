<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Default_Bootstrap_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- <link rel="shortcut icon" href="<?#php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript & jQuery
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

    <?php wp_head(); ?>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'default-bootstrap-theme' ); ?></a>

      <header id="header-main" class="site-header">
        <div class="header-top">
          <a href="/">
            <img class="nav-logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logos/nav-logo.png" alt="Navigation Logo">
          </a>
          <h1><a href="/"><span class="strong">Gulf Coast Sentinels</span> <span class="subtitle italic">Scholarship Foundation</span></a></h1>
        </div><!-- //SITE HEADER TOP -->

        <!-- RESPONSIVE MENU BUTTON -->
        <div class="navbar-button">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sentinels-navbar-collapse">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/down-arrow-blue.png" class="navbar-button-arrow">
            Click for Navigation
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/down-arrow-blue.png" class="navbar-button-arrow">
          </button>
        </div><!-- //NAVBAR HEADER -->

        <?php
          // Found at: https://github.com/twittem/wp-bootstrap-navwalker
          require_once('wp_bootstrap_navwalker.php');

          $args = array(
            'theme_location'  => 'header',
            // 'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'navbar-list navbar-collapse collapse',
            'container_id'    => 'sentinels-navbar-collapse',
            'menu_class'      => 'nav navbar-nav',
            // 'menu_id'         => '',
            'echo'            => true,
            // 'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => new wp_bootstrap_navwalker()
          );

          wp_nav_menu( $args );
        ?>
      </header><!-- #header-main -->
