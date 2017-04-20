<?php
/**
 * The sidebar containing the main widget area
 *
 * @package body-builder
 * @author CodexCoder
 */

/**
 * Add Body Builder Recent Post
 */

class Body_Builder_sidebar_Recent_Posts extends WP_Widget {

    public function __construct() {
		parent::__construct(
			'body_builder_sidebar_recent_posts',	// Base ID
			esc_html__( 'Body Builder:: Sidebar Recent Posts', 'body-builder' ),	// Name
			array( 'description' => esc_html__( 'Recent Posts widget to display your logo content and social profiles.', 'body-builder' ) )	// Args
		);
	}

  public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		$recent_posts = new WP_Query( array(
			'posts_type'		=> 'post',
			'posts_per_page'	=> $instance['number']
		) );
		if( $recent_posts->have_posts() ) : ?>

		<div class="posts">

			<?php while( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>

			<div class="post-item">
							<?php 

							if( ! empty( $instance['showimage'] ) ) :

								if( has_post_thumbnail() ) : ?>

									<div class="image"><a href="<?php esc_attr(the_permalink()); ?>"><?php esc_attr(the_post_thumbnail('body-builder-all-thumb')); ?></a></div>
								<?php	endif;

							endif; ?>
				<div class="content">
					<?php the_title( '<p><a href="'. esc_url( get_permalink() ) .'">', '</a></p>' ); ?>
					<ul class="post-meta">
                      <li><?php the_date(); ?></li>
                    </ul>
				</div>
			</div>

			<?php
			endwhile;

			wp_reset_postdata();

			?>

		</div>
		
		<?php 
		
		endif;
		echo $args['after_widget'];
	}


   function update($new_instance, $old_instance) {
       $new_instance['b'] = isset($new_instance['b']);
       return $new_instance;
   }

   function form($instance) {
        $instance = wp_parse_args( (array) $instance, array(  'title' => '', 'number' => '','showimage'=>'') );
        $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
        $number = esc_attr($instance['number']);
        $showimage = esc_attr($instance['showimage']);
        ?>

       <p>
       <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:','body-builder'); ?></label>
       <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
   	   </p>

        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts','body-builder'); ?>:</label>
            <input type="number" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $number; ?>" class="widefat" id="<?php echo $this->get_field_id('number'); ?>" />
        </p>
         
        <p>
        	<input class="checkbox" id="<?php echo esc_attr( $this->get_field_id( 'showimage' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'showimage' ) ); ?>" type="checkbox"<?php if(!empty($instance['showimage'])){echo "checked='checked'";} ?>>

 			 <label for="<?php echo esc_attr( $this->get_field_id( 'showimage' ) ); ?>">Display post image?</label>
		</p>
       
    <?php
    }
}


register_widget('Body_Builder_sidebar_Recent_Posts');
