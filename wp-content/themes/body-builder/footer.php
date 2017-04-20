<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package body-builder
 */
$footer_text = fw_get_db_settings_option('footer_copy_right');

?>
 <!--Footer start here -->
    <footer>
      <div class="footer-top">
        <div class="overlay">
          <div class="container">
            <div class="row">
              <?php dynamic_sidebar( 'body-builder-footer-widget' ); ?> 
              <?php dynamic_sidebar( 'body-builder-footer-newsletter' ); ?> 
            </div><!-- row -->
          </div><!-- container -->
        </div><!-- overlay -->
      </div><!-- footer top -->
      <div class="footer-bottom">
        <div class="container">
          <p><?php echo $footer_text; ?> <a href="#">Labartisan.</a></p>
        </div><!-- container -->
      </div><!-- footer-bottom -->
    </footer>
    <!--Footer end here -->

<?php wp_footer(); ?>

</body>
</html>
