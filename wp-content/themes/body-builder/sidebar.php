<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package body-builder
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 col-sm-12 col-xs-12">
            <div class="sidebar-item">
              <form>
                <input type="text" name="search" placeholder="Search">
                <button><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div><!-- sidebar-item -->

            <div class="sidebar-item">
              <h3 class="sidebar-title">Categories</h3>

              <ul class="categories">
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Web Design<span>07</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Graphic Design<span>03</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>E-Commerce<span>02</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Flesh Animation<span>01</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>WordPress Theme<span>11</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>HTML5/CSS3<span>02</span></a></li>
                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Coding<span>03</span></a></li>
              </ul><!-- Categories -->
            </div><!-- sidebar-item -->

            <div class="sidebar-item">
              <h3 class="sidebar-title">Recent Posts</h3><!-- sidebar title -->

              <div class="posts">
                <div class="post_item">
                  <div class="image">
                    <a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sidebar_image_01.jpg" alt="post thumb" class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="single.html">Seamlessly Ubiquitous Mindshare Principle Centered.</a></p>
                    <ul class="post-meta">
                      <li>Jan 02, 2017</li>
                    </ul>
                  </div>
                </div><!-- post item -->
                <div class="post_item">
                  <div class="image">
                    <a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sidebar_image_02.jpg" alt="post thumb" class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="single.html">Seamlessly Ubiquitous Mindshare Principle Centered.</a></p>
                    <ul class="post-meta">
                      <li>Jan 02, 2017</li>
                    </ul>
                  </div>
                </div><!-- post item -->
                <div class="post_item">
                  <div class="image">
                    <a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sidebar_image_03.jpg" alt="post thumb" class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="single.html">Seamlessly Ubiquitous Mindshare Principle Centered.</a></p>
                    <ul class="post-meta">
                      <li>Jan 02, 2017</li>
                    </ul>
                  </div>
                </div><!-- post item -->
                <div class="post_item">
                  <div class="image">
                    <a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sidebar_image_04.jpg" alt="post thumb" class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="single.html">Seamlessly Ubiquitous Mindshare Principle Centered.</a></p>
                    <ul class="post-meta">
                      <li>Jan 02, 2017</li>
                    </ul>
                  </div>
                </div><!-- post item -->
                <div class="post_item">
                  <div class="image">
                    <a href="single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/sidebar_image_05.jpg" alt="post thumb" class="img-responsive"></a>
                  </div>
                  <div class="content">
                    <p><a href="single.html">Seamlessly Ubiquitous Mindshare Principle Centered.</a></p>
                    <ul class="post-meta">
                      <li>Jan 02, 2017</li>
                    </ul>
                  </div>
                </div><!-- post item -->
                
                
               
              </div><!-- posts -->
            </div><!--sidebar item -->

            <div class="sidebar-item">
              <h3 class="sidebar-title">Tags</h3>

              <ul class="tags">
                <li><a href="#">design</a></li>
                <li><a href="#">html5</a></li>
                <li><a href="#">css3</a></li>
                <li><a href="#">webdesign</a></li>
                <li><a href="#">illustrator</a></li>
                <li><a href="#">photoshop</a></li>
                <li><a href="#">ui/ux</a></li>
                <li><a href="#">css3</a></li>
                <li><a href="#">design</a></li>
                <li><a href="#">html5</a></li>
                <li><a href="#">css3</a></li>
                <li><a href="#">webdesign</a></li>
              </ul><!-- tags -->
            </div><!-- sidebar-item -->
          </div>
