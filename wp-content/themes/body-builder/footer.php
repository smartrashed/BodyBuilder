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

?>
 <!--Footer start here -->
    <footer>
      <div class="footer-top">
        <div class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-about">
                  <h3 class="widget-title">About Us</h3><!-- widget title -->
                  <p>Holisticly leverage functionalized infrastructures with one-to-one product. Rapidious whiteboard granular web-readiness.</p>
                  <ul>
                    <li>
                      <span><i class="fa fa-home" aria-hidden="true"></i></span>
                      <p>Rodney Square, 1100 North Market Street,
Wilmington, United States</p>
                    </li>
                    <li>
                      <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                      <p>+880 1234 567890, +880 9876 543210</p>
                    </li>
                    <li>
                      <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                      <p>contact@yourmail.com</p>
                    </li>
                  </ul>
                </div><!-- footer-about -->
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-post">
                  <h3 class="widget-title">Recent Posts</h3><!-- widget title -->
                  <ul>
                    <li class="post-item">
                      <div class="post-image"><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/footer-post-01.jpg" alt="blog image" class="img-responsive"></a></div><!-- post image -->
                      <div class="post-content">
                        <h5><a href="single.html">Seamlessly ubiquitous mindshare principle-centered.</a></h5>
                        <span>04 days ago</span>
                      </div><!-- post-content -->
                    </li><!-- post-item -->
                    <li class="post-item">
                      <div class="post-image"><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/footer-post-02.jpg" alt="blog image" class="img-responsive"></a></div><!-- post image -->
                      <div class="post-content">
                        <h5><a href="single.html">Credibly cultivate mission benefits with high-quality users.</a></h5>
                        <span>04 days ago</span>
                      </div><!-- post-content -->
                    </li><!-- post-item -->
                    <li class="post-item">
                      <div class="post-image"><a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/footer-post-03.jpg" alt="blog image" class="img-responsive"></a></div><!-- post image -->
                      <div class="post-content">
                        <h5><a href="single.html">Global supply web-enabled ROI whereas multimedia based process.</a></h5>
                        <span>04 days ago</span>
                      </div><!-- post-content -->
                    </li><!-- post-item -->
                  </ul>
                </div><!-- footer-post -->
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-newsletter">
                  <h3 class="widget-title">Subscribe for Newsletter</h3><!-- widget title -->
                  <p>Holisticly leverage functionalized infrastructures with one-to-one product.</p>
                  <form>
                    <input type="text" name="name" placeholder="Enter Your Name" class="news-input" />
                    <input type="text" name="email" placeholder="Enter Your E-mail Address:" class="news-input" />
                    <input type="submit" name="submit" value="submit" class="news-submit" />
                  </form>
                </div><!-- footer-newsletter -->
              </div>
            </div><!-- row -->
          </div><!-- container -->
        </div><!-- overlay -->
      </div><!-- footer top -->
      <div class="footer-bottom">
        <div class="container">
          <p>&#169; copyright <span>Body Builder</span> 2017. All Right Reserved by <a href="#">Labartisan.</a></p>
        </div><!-- container -->
      </div><!-- footer-bottom -->
    </footer>
    <!--Footer end here -->

<?php wp_footer(); ?>

</body>
</html>
