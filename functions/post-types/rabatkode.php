<?php

add_action( 'init', 'smamo_add_rabatkode' );

function smamo_add_rabatkode() {
	register_post_type( 'rabatkode', array(
		
        'menu_icon' 		 => 'dashicons-post-status',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php?post_type=kursus',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'rabatkode' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title'),
        'labels'             => array(
            
            'name'               => _x( 'Rabatkoder', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Rabatkode', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Rabatkoder', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Rabatkoder', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'rabatkode', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny rabatkode', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se rabatkode', 'smamo' ),
            'all_items'          => __( 'Rabatkoder', 'smamo' ),
            'search_items'       => __( 'Find rabatkode', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny rabatkode.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}