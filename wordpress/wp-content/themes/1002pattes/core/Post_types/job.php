<?php

add_action('init', 'mmp_register_job');
function mmp_register_job() {
    register_post_type( 'job', [
            'labels' => [
                'name' => __( 'Métiers' ),
                'singular_name' => __( 'Métier' ),
                'add_new_item' => 'Ajouter un nouveau métier',
	            'edit_item' => 'Modifier les informations concernant ce métier'
            ],
            'description' => 'L\'ensemble des métiers qui sont exercés à 1002 pattes',
            'public' => true,
            'menu_position' => 20,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="#9CA1A6" d="M576 1344q0 26-19 45t-45 19-45-19-19-45 19-45 45-19 45 19 19 45zm1024 61q0 121-73 190t-194 69h-874q-121 0-194-69t-73-190q0-68 5.5-131t24-138 47.5-132.5 81-103 120-60.5q-22 52-22 120v203q-58 20-93 70t-35 111q0 80 56 136t136 56 136-56 56-136q0-61-35.5-111t-92.5-70v-203q0-62 25-93 132 104 295 104t295-104q25 31 25 93v64q-106 0-181 75t-75 181v89q-32 29-32 71 0 40 28 68t68 28 68-28 28-68q0-42-32-71v-89q0-52 38-90t90-38 90 38 38 90v89q-32 29-32 71 0 40 28 68t68 28 68-28 28-68q0-42-32-71v-89q0-68-34.5-127.5t-93.5-93.5q0-10 .5-42.5t0-48-2.5-41.5-7-47-13-40q68 15 120 60.5t81 103 47.5 132.5 24 138 5.5 131zm-320-893q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"/></svg>'),
            'supports' => [],
            'rewrite' => ['slug' => 'jobs'],
        ]
    );
}

add_action('init', 'mmp_remove_job_fields');
function mmp_remove_job_fields() {
	remove_post_type_support( 'job', 'title' );
	remove_post_type_support( 'job', 'editor' );
}

add_filter('acf/update_value/name=job_name', 'mmp_acf_job_title', 10, 3);
function mmp_acf_job_title( $value, $post_id, $field ) {
	$new_title = $value;
	$new_slug = sanitize_title( $new_title );

	wp_update_post( [
		'ID'          => $post_id,
		'post_title'  => $new_title,
		'post_type'   => 'job',
		'post_name'   => $new_slug
	] );

	return $value;
}
