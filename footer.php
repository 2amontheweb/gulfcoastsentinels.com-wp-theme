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

      <footer id="footer-main" role="contentinfo">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <h4>Get Involved</h4>
              <h6>Interested in getting involved?</h6>
              <p>If you would like to volunteer for the Gulf Coast Sentinels Scholarship Foundation, we would love to talk to you. Email us at <a href="mailto:lorena@sentinelsoffreedomgulfcoast.org">Lorena@sentinelsoffreedomgulfcoast.org</a>.</p>
              <p>Website created by <a href="http://jimmypocock.com">Jimmy Pocock</a> with <a href="https://wordpress.org">WordPress</a></p>
            </div>
            <div class="col-sm-4">
              <h4>Connect With Us</h4>
              <ul>
                <li><a href="https://www.facebook.com/Gulf-Coast-Sentinels-349914720144/" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
                <li><a href="https://www.youtube.com/channel/UCvI6rqUomw6lhF4hEKp2EaQ" target="_blank"><i class="fa fa-youtube"></i>YouTube</a></li>
                <li><a href="mailto:lorena@sentinelsoffreedomgulfcoast.org"><i class="fa fa-envelope"></i>Email</a></li>
              </ul>
            </div>
          </div>
          <div class="copyright">
            <p>© <?php echo date("Y"); ?> Gulf Coast Sentinels</p>
          </div>
        </div>
      </footer><!-- #footer-main -->

      <?php wp_footer(); ?>

    </div><!-- #page -->


    <script src="<?php bloginfo('template_directory') ?>/js/bundled.js"></script>

  </body>
</html>
