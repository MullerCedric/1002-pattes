<?php

add_action( 'admin_menu', 'maison1002pattes_remove_menu_pages' );
function maison1002pattes_remove_menu_pages() {
	remove_menu_page( 'edit.php' );                   //Posts
	remove_menu_page( 'upload.php' );                 //Media
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'users.php' );                  //Users
}
