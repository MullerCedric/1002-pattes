<?php

add_action('init', 'mmp_register_disease');
function mmp_register_disease() {
    register_post_type( 'disease', [
            'labels' => [
                'name' => __( 'Pathologies' ),
                'singular_name' => __( 'Pathologie' ),
                'add_new_item' => 'Ajouter une nouvelle pathologie',
	            'edit_item' => 'Modifier les informations de cette pathologie'
            ],
            'description' => 'Les maladies que 1002 pattes traite fréquemment',
            'public' => true,
            'menu_position' => 20,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg"><path fill="#9CA1A6" d="M704 1408q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm-384-512h384v-256h-158q-14 2-22 9l-195 195q-7 12-9 22v30zm1280 512q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm128-672v-192q0-14-9-23t-23-9h-224v-224q0-14-9-23t-23-9h-192q-14 0-23 9t-9 23v224h-224q-14 0-23 9t-9 23v192q0 14 9 23t23 9h224v224q0 14 9 23t23 9h192q14 0 23-9t9-23v-224h224q14 0 23-9t9-23zm256-544v1152q0 26-19 45t-45 19h-192q0 106-75 181t-181 75-181-75-75-181h-384q0 106-75 181t-181 75-181-75-75-181h-128q-26 0-45-19t-19-45 19-45 45-19v-416q0-26 13-58t32-51l198-198q19-19 51-32t58-13h160v-320q0-26 19-45t45-19h1152q26 0 45 19t19 45z"/></svg>'),
            'supports' => ['title', 'editor'],
            'rewrite' => ['slug' => 'diseases'],
        ]
    );
}

add_action('init', 'mmp_remove_disease_fields');
function mmp_remove_disease_fields() {
	remove_post_type_support( 'disease', 'title' );
	remove_post_type_support( 'disease', 'editor' );
}

add_filter('acf/update_value/name=disease_name', 'mmp_acf_disease_title', 10, 3);
function mmp_acf_disease_title( $value, $post_id, $field ) {
	$new_title = $value;
	$new_slug = sanitize_title( $new_title );

	wp_update_post( [
		'ID'          => $post_id,
		'post_title'  => $new_title,
		'post_type'   => 'disease',
		'post_name'   => $new_slug
	] );

	return $value;
}
