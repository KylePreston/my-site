<?php
/**
 * Creates a meta box for the theme settings page, which holds textareas for custom scripts within 
 * the theme. 
 *
 */

add_action( 'admin_menu', 'omega_theme_admin_options' );

function omega_theme_admin_options() {

	global $theme_settings_page;
	
	/* Get the theme settings page name */
	$theme_settings_page = 'appearance_page_theme-settings';

	/* Enqueue styles */
	add_action( 'admin_enqueue_scripts', 'omega_admin_scripts' );

	/* Adds my_help_tab when my_admin_page loads */
    add_action('load-'.$theme_settings_page, 'omega_theme_settings_help');
}

/* Enqueue scripts (and related stylesheets) */
function omega_admin_scripts( $hook_suffix ) {
    
    
}

/**
 * Contextual help content.
 */
function omega_theme_settings_help() {

	$screen = get_current_screen();

	$theme_settings_help =
		'<h3>' . __( 'Theme Settings', 'omega' ) . '</h3>' .
		'<p>'  . __( 'Your Theme Settings provides control over how the theme works. You will be able to control a lot of common and even advanced features from this menu. Some child themes may add additional menu items to this list. Each of the boxes can be collapsed by clicking the box header and expanded by doing the same. They can also be dragged into any order you desire or even hidden by clicking on "Screen Options" in the top right of the screen and "unchecking" the boxes you do not want to see.', 'omega' ) . '</p>';
	
	$customize_help =
		'<h3>' . __( 'Customize', 'omega' ) . '</h3>' .
		'<p>'  . __( 'The theme customizer is available for a real time editing environment where theme options can be tried before being applied to the live site. Click \'Customize\' button below to personalize your theme', 'omega' ) . '</p>';

	$screen->add_help_tab( array(
		'id'      => 'omega-settings' . '-theme-settings',
		'title'   => __( 'Theme Settings', 'omega' ),
		'content' => $theme_settings_help,
	) );
	$screen->add_help_tab( array(
		'id'      => 'omega-settings' . '-customize',
		'title'   => __( 'Customize', 'omega' ),
		'content' => $customize_help,
	) );

	//* Add help sidebar
	$screen->set_help_sidebar(
		'<p><strong>' . __( 'For more information:', 'omega' ) . '</strong></p>' .
		'<p><a href="http://themehall.com/contact" target="_blank" title="' . __( 'Get Support', 'omega' ) . '">' . __( 'Get Support', 'omega' ) . '</a></p>'
	);

}

?>