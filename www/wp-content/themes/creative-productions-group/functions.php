<?php

//Register Custom Post Types
require_once STYLESHEETPATH . '/includes/post-types.php';

//Register Advanced Custom Fields
require_once STYLESHEETPATH . '/includes/acf.php';

/**
 * Load scripts and styles for the theme
 *
 * @action wp_enqueue_scripts
 *
 * @return void
 */
function cpg_enqueue_scripts() {
	// Theme CSS
	wp_enqueue_style( 'grid', get_stylesheet_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'cpg-main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'cpg-social', get_stylesheet_directory_uri() . '/ss_icon_fonts/ss-social.css' );
	wp_register_style( 'flexslider' , get_template_directory_uri() . '/css/flexslider.css');


	// Theme JS
	wp_enqueue_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '' , true);
	wp_enqueue_script( 'cpg-theme-js', get_stylesheet_directory_uri() . '/js/theme.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'fittext' , get_template_directory_uri() . '/js/jquery.fittext.js"', array('jquery'), '' , true);

	wp_enqueue_script('cpg_script', plugin_dir_url( __FILE__ ) . 'js/theme.js');
	wp_localize_script('cpg_script', 'cpg_script_vars', array(
			'iframe' => __( the_field( 'watch_video' ) )
		)
	);
}
add_action( 'wp_enqueue_scripts', 'cpg_enqueue_scripts' );

/**
 * Add an acf options page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/**
 * Set up our theme features and register sidebars
 *
 * @action after_setup_theme
 *
 * @return void
 */
function cpg_after_setup_theme() {
	// Custom menus
	add_theme_support( 'menus' );

	// Sidebar areas
	register_sidebar(
		array(
			'name'          => 'Sidebar Widgets',
			'id'            => 'mw_sidebar',
			'description'   => 'Displays in the right hand rail',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'CPG Widgets',
			'id'            => 'cpg_homepage_widget',
			'description'   => 'Displays in the body of the homepage',
			'before_widget' => '<div id="%1$s" class="widget %2$s grid-20 tablet-grid-20 mobile-grid-50">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => 'CPG Project Widgets',
			'id'            => 'cpg_project_widget',
			'description'   => 'Displays in the body of the Project Page',
			'before_widget' => '<div id="%1$s" class="single_pro_widget %2$s grid-33 tablet-grid-100 mobile-grid-50">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'after_setup_theme', 'cpg_after_setup_theme' );

/**
 * Register our custom widget
 *
 * @action widgets_init
 *
 * @return void
 */
function cpg_register_widgets() {
	register_widget( 'CPG_Widget' );
}
add_action( 'widgets_init', 'cpg_register_widgets' );

/**
 * Custom class for Homepage Action Widgets
 */
class CPG_Widget extends WP_Widget {

	function CPG_Widget() {
		parent::__construct( false, 'CPG Widgets' );
	}

	function widget( $args, $instance ) {
		extract( $args, EXTR_SKIP );

		$title     = ! empty( $instance['title'] )     ? $instance['title']     : null;
		$image_url = ! empty( $instance['image_url'] ) ? $instance['image_url'] : null;
		$link_url  = ! empty( $instance['link_url'] )  ? $instance['link_url']  : null;
		$text      = ! empty( $instance['text'] )      ? $instance['text']      : null;

		if ( ! $image_url ) {
			return;
		}

		echo $before_widget;

		printf( '<a href="%s"><img src="%s" alt="%s"></a>', esc_url( $link_url ), esc_url( $image_url ), esc_attr( $title ) );

		printf( '%s<a href="%s">%s</a>%s', $before_title, esc_url( $link_url ), esc_html( $title ), $after_title );

		printf( '<p class="single-widgets-text">%s</p>', $text );

		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title']     = strip_tags( $new_instance['title'] );
		$instance['image_url'] = esc_url_raw( $new_instance['image_url'] );
		$instance['link_url']  = esc_url_raw( $new_instance['link_url'] );
		$instance['text']      = wp_kses_post( $new_instance['text'] );

		return $instance;
	}

	function form( $instance ) {
		$args = array(
			'title'     => null,
			'image_url' => null,
			'link_url'  => null,
			'text'      => null
		);

		$instance = wp_parse_args( (array) $instance, $args );

		$title     = $instance['title'];
		$image_url = $instance['image_url'];
		$link_url  = $instance['link_url'];
		$text      = $instance['text'];
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				Title:
				<input type="text" name="<?php echo $this->get_field_name( 'title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" class="widefat" value="<?php echo esc_attr( $title ); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'image_url' ); ?>">
				Image URL:
				<input type="text" name="<?php echo $this->get_field_name( 'image_url' ); ?>" id="<?php echo $this->get_field_id( 'image_url' ); ?>" class="widefat" placeholder="http://" value="<?php echo esc_url( $image_url ); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link_url' ); ?>">
				Link URL:
				<input type="text" name="<?php echo $this->get_field_name( 'link_url' ); ?>" id="<?php echo $this->get_field_id( 'link_url' ); ?>" class="widefat" placeholder="http://" value="<?php echo esc_url( $link_url ); ?>" />
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">
				Text:
				<textarea name="<?php echo $this->get_field_name( 'text' ); ?>" id="<?php echo $this->get_field_id( 'text' ); ?>" class="widefat"><?php echo wp_kses_post( $text ); ?></textarea>
			</label>
		</p>
		<?php
	}
}