<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';


function wpdocs_theme_name_scripts() {
    wp_register_style('custom-style', get_stylesheet_directory_uri() . '/css/simple-line-icons.css',false,'1.1.1','all');
    wp_enqueue_style( 'custom-style' );
    wp_register_style('font-rale-style', 'https://fonts.googleapis.com/css?family=Raleway%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&subset=latin%2Clatin-ext&ver=1.0.0',false,'1.0.0','all');
    wp_enqueue_style( 'font-rale-style' );
    //wp_register_style('shake-style', get_stylesheet_directory_uri() . '/css/csshake.css',false,'1.1.1','all');
    //wp_enqueue_style( 'shake-style' );
    if(is_front_page()){
        wp_enqueue_script( 'script-particles', get_template_directory_uri() . '/js/particles.js', array(), '1.0.0', true );
        wp_enqueue_script( 'script-particles-show', get_template_directory_uri() . '/js/app.js', array(), '1.0.2', true );
    }    
    wp_enqueue_script( 'script-flip', get_template_directory_uri() . '/js/jquery.flip.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script-custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.14', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
if ( function_exists( 'register_sidebar' ) ){
			register_sidebar( array(
				'name' => __('Footer Column 1', 'understrap'),
				'id' => 'footer_1',
				'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside></div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			)
		);
              register_sidebar( array(
				'name' => __('Footer Column 2', 'understrap'),
				'id' => 'footer_2',
				'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside></div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			)
		);
        register_sidebar( array(
				'name' => __('Footer Column 3', 'understrap'),
				'id' => 'footer_3',
				'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside></div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			)
		);
        register_sidebar( array(
				'name' => __('Footer Column 4', 'understrap'),
				'id' => 'footer_4',
				'before_widget' => '<div class="footer-widget"><aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside></div>',
				'before_title' => '<h3>',
				'after_title' => '</h3>',
			)
		);
}        
