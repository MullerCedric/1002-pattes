<?php

add_action('init', 'mmp_register_employee');
function mmp_register_employee() {
    register_post_type( 'employee', [
            'labels' => [
                'name' => __( 'Employés' ),
                'singular_name' => __( 'Employé' ),
                'add_new_item' => 'Ajouter un nouvel employé',
	            'edit_item' => 'Modifier les informations de cet employé'
            ],
            'description' => 'L\'ensemble des personnes travaillant à 1002 pattes',
            'public' => true,
            'menu_position' => 20,
            'menu_icon' => 'dashicons-nametag',
            'supports' => [],
            'rewrite' => ['slug' => 'employees'],
        ]
    );
}

add_action('init', 'mmp_remove_employee_fields');
function mmp_remove_employee_fields() {
	remove_post_type_support( 'employee', 'title' );
	remove_post_type_support( 'employee', 'editor' );
}

add_filter('acf/update_value/name=employee_first_name', 'mmp_acf_employee_title', 10, 3);
function mmp_acf_employee_title( $value, $post_id, $field ) {
	$new_title = get_field('employee_last_name', $post_id) . ' ' . $value;
	$new_slug = sanitize_title( $new_title );

	wp_update_post( [
		'ID'          => $post_id,
		'post_title'  => $new_title,
		'post_type'   => 'employee',
		'post_name'   => $new_slug
	] );

	return $value;
}
