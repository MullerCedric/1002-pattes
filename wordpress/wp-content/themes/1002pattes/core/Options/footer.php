<?php
	acf_add_options_sub_page([
		'page_title'    => 'Pied de page',
		'menu_title'    => 'Pied de page',
		'menu_slug'     => 'footer',
		'capability'    => 'edit_posts',
		'parent_slug'   => 'themes.php',
		'position'      => false,
		'icon_url'      => false,
	]);
