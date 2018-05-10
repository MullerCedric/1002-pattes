<?php

add_action('init', 'maison1002pattes_register_employee');
function maison1002pattes_register_employee() {
    register_post_type( 'employee', [
            'labels' => [
                'name' => __( 'Employés' ),
                'singular_name' => __( 'Employé' ),
                'add_new_item' => 'Ajouter un nouvel employé'
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

add_action('init', 'maison1002pattes_remove_employee_fields');
function maison1002pattes_remove_employee_fields() {
	remove_post_type_support( 'employee', 'title' );
	remove_post_type_support( 'employee', 'editor' );
}
