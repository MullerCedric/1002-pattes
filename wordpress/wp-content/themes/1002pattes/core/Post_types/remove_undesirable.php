<?php
// Removes unwanted tabs in the admin panel
add_action( 'admin_menu', 'mmp_remove_menu_pages' );
function mmp_remove_menu_pages() {
	remove_menu_page( 'edit.php' );                   //Posts
	remove_menu_page( 'upload.php' );                 //Media
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'users.php' );                  //Users
}

// Removes unwanted post_types (aka pages posts and media) in the post_type selector
add_filter( 'post_type_selector_post_types', function( $post_types, $field ) {
	unset( $post_types['post'] );
	unset( $post_types['page'] );
	unset( $post_types['attachment'] );
	return $post_types;
}, 10, 2 );
