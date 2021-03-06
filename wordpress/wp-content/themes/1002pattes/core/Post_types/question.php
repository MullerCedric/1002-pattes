<?php

add_action('init', 'mmp_register_question');
function mmp_register_question() {
    register_post_type( 'question', [
            'labels' => [
                'name' => __( 'Questions' ),
                'singular_name' => __( 'Question' ),
                'add_new_item' => 'Ajouter une nouvelle question/réponse',
                'edit_item' => 'Modifier la question/réponse'
            ],
            'description' => 'Questions/Réponses apparaissants dans la FAQ',
            'public' => true,
            'menu_position' => 20,
            'menu_icon' => 'data:image/svg+xml;base64,' . base64_encode('<svg width="20" height="20" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path fill="#9CA1A6" d="M1024 1376v-192q0-14-9-23t-23-9h-192q-14 0-23 9t-9 23v192q0 14 9 23t23 9h192q14 0 23-9t9-23zm256-672q0-88-55.5-163t-138.5-116-170-41q-243 0-371 213-15 24 8 42l132 100q7 6 19 6 16 0 25-12 53-68 86-92 34-24 86-24 48 0 85.5 26t37.5 59q0 38-20 61t-68 45q-63 28-115.5 86.5t-52.5 125.5v36q0 14 9 23t23 9h192q14 0 23-9t9-23q0-19 21.5-49.5t54.5-49.5q32-18 49-28.5t46-35 44.5-48 28-60.5 12.5-81zm384 192q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"/></svg>'),
            'supports' => [],
            'rewrite' => ['slug' => 'questions'],
        ]
    );
}

add_action('init', 'mmp_remove_question_fields');
function mmp_remove_question_fields() {
	remove_post_type_support( 'question', 'title' );
	remove_post_type_support( 'question', 'editor' );
}

add_filter('acf/update_value/name=question_entitled', 'mmp_acf_question_title', 10, 3);
function mmp_acf_question_title( $value, $post_id, $field ) {
	$new_title = $value;
	$new_slug = sanitize_title( $new_title );

	wp_update_post( [
		'ID'          => $post_id,
		'post_title'  => $new_title,
		'post_type'   => 'question',
		'post_name'   => $new_slug
	] );

	return $value;
}
