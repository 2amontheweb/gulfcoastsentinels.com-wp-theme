<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Default_Bootstrap_Theme
 */

?>

      <footer id="footer-main" class="site-footer" role="contentinfo">
        <div class="site-info">
          <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'default-bootstrap-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'default-bootstrap-theme' ), 'WordPress' ); ?></a>
          <span class="sep"> | </span>
          <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'default-bootstrap-theme' ), 'default-bootstrap-theme', '<a href="http://jimmypocock.com" rel="designer">Jimmy Pocock</a>' ); ?>
        </div><!-- .site-info -->
      </footer><!-- #colophon -->
    </div><!-- #page -->

    <?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory') ?>/js/bundled.js"></script>

  </body>
</html>
