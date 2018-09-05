<?php
add_action( 'init', 'mmp_remove_page_fields' );
function mmp_remove_page_fields() {
	remove_post_type_support( 'page', 'editor' );
	remove_post_type_support( 'page', 'comments' );
	remove_post_type_support( 'page', 'revisions' );
	remove_post_type_support( 'page', 'page-attributes' );
}
