<?php
/**
 * @package    Epic Saga
 * @author     Momekh Burki <mmk+epicsaga@momekh.com>
 * @copyright  Copyright (c) 2014, Momekh Burki
 * @link       http://themehybrid.com/themes/epic-saga
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Add the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'epic_saga_theme_setup' );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function epic_saga_theme_setup() {

	//* Disable the Admin Bar. */
	add_filter( 'show_admin_bar', '__return_false' );
	
	add_action( 'wp_enqueue_scripts', 'epic_saga_enqueue_scripts_for_sidebar', 10 );
	
	
	/*
	 * Registering Sidebar to be used in the flyout menu
	 * 
	 */
	
	 register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar-1',
		'description' => __('This is the main sidebar display on the right', 'saga'),
		'class' => '',
		'before_widget' => '<aside class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) ); 

   
	/*
	 * Registering Social Menu - used in sidebar and footer
	 */
	 
	 


}

/**
 * This function loads scripts used for sidebar only. Checks if sidebar-1 is active
 * and then loads the two js files. 
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */
function epic_saga_enqueue_scripts_for_sidebar () {
	//Loading custom scripts
	
		if (is_active_sidebar( 'sidebar-1' )) {
			
			wp_enqueue_script( 'sidr', get_stylesheet_directory_uri() . '/inc/sidr/jquery.sidr.min.js', array( 'jquery' ), '1.2.1', true );
			//wp_enqueue_style( 'sidr-styles', get_stylesheet_directory_uri() . '/inc/sidr/stylesheets/jquery.sidr.light.css' );
			wp_enqueue_script( 'epic_saga-flyout', get_stylesheet_directory_uri() . '/js/epic_saga-sidr.js', array( 'jquery' ), '1.0', true );
		
		}
		
		//Note: AS this is a CHILD Theme, cant really use get_template_directory_uri
		
}


/**
 * This function is called in header.php, right after menu is setup. 
 * 
 * @since  1.0.0
 * @access public
 * @return void
 */

function epic_saga_get_sidebar_toggle() {
	if (is_active_sidebar( 'sidebar-1' )) { //checks if the main sidebar has widgets
	
	
	?>
	<div id="or" class="header-handler">
		<button class="sidebar-toggle"></button>
		<?php get_sidebar(); ?>

	</div> <!-- button for the flyout menu --> 
	<?php	
	}
	
}

