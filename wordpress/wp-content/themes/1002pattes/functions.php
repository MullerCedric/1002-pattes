<?php
include( __DIR__ . '/core/Maison1002pattes.php' );
include( __DIR__ . '/core/Menus/Container.php' );
include( __DIR__ . '/core/Menus/Item.php' );

include( __DIR__ . '/core/Post_types/remove_undesirable.php' );
include( __DIR__ . '/core/Post_types/employee.php' );
include( __DIR__ . '/core/Post_types/job.php' );
include( __DIR__ . '/core/Post_types/disease.php' );
include( __DIR__ . '/core/Post_types/partner.php' );
include( __DIR__ . '/core/Post_types/question.php' );

include( __DIR__ . '/core/Fields.php' );
include( __DIR__ . '/template-parts/remove_template_fields.php' );

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
	include( __DIR__ . '/core/Options/footer.php' );
}


$Maison1002pattes = new Maison1002pattes();

/*
 * Handle site tab title
 */
add_filter( 'wp_title', 'mmp_tab_title' );
function mmp_tab_title( $title ) {
	if ( empty( $title ) ) {
		$title = 'Bienvenue';
	}
	$title .= ' - ' . get_bloginfo( 'name' );

	return trim( $title );
}

/*
 * Theme navigation menus
 */
add_action( 'init', 'register_my_menus' ); //TODO Update name
function register_my_menus() {
	register_nav_menus( [
		'header-menu' => __( 'Navigation affichée dans l\'en-tête du site' ),
		'footer-menu' => __( 'Navigation affichée dans le pied de page du site' )
	] );
}

if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
} else {
	show_admin_bar( true );
}

/*
 * Menus controllers
 */
function mmp_get_menu( $location ) {
	global $Maison1002pattes;
	if ( ! isset( $Maison1002pattes->menus ) ) {
		$Maison1002pattes->menus = [];
	}
	if ( ! isset( $Maison1002pattes->menus[ $location ] ) ) {
		$Maison1002pattes->menus[ $location ] = new Container( $location );
	}

	return $Maison1002pattes->menus[ $location ];
}

/*
 * Retrieves the absolute URI for given asset in this theme
 */
function mmp_get_theme_asset( $src = '' ) {
	return get_template_directory_uri() . '/assets/' . trim( $src, '/' );
}

/*
 * Displays the absolute URI for given asset in this theme. (Used to get the stylesheet link)
 */
function mmp_theme_asset( $src = '' ) {
	echo mmp_get_theme_asset( $src );
}

/*
 * Add the page type as a modifier to a given class
 */
function mmp_get_page_modifier( $base ) {
	$modifier = get_field( 'page_type' );

	return $base . ' ' . $base . '--' . $modifier;
}

/*
 * Return "hidden" if the page type matches the arg
 */
function mmp_hide_if( $type ) {
	if ( get_field( 'page_type' ) === $type ) return 'hidden';
	return '';
}

/*
 * Creates needed images sizes
 */
add_action( 'after_setup_theme', 'mmp_register_image_sizes' );
function mmp_register_image_sizes() {
	add_image_size( 'mmp-landing', 670, 440, true );
}

/*
 * Registering Google API Key (for Maps)
 */
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyC_SlvxALyXFopCB1_SwkEVBZvVPOlMl0k');
}
