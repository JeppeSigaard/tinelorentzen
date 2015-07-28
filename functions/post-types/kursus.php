<?php 

add_action( 'init', 'smamo_add_kursus' );

function smamo_add_kursus() {
	register_post_type( 'kursus', array(
		
        'menu_icon' 		 => 'dashicons-calendar-alt',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'kursus' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 24,
		'supports'           => array( 'title', 'thumbnail','editor','excerpt'),
        'labels'             => array(
            
            'name'               => _x( 'Kurser', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Kursus', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Kurser', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Kurser', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj nyt', 'kursus', 'smamo' ),
            'add_new_item'       => __( 'Tilføj nyt', 'smamo' ),
            'new_item'           => __( 'Ny kursus', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se kursus', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find kursus', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt kursus.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
    
    

    register_post_type( 'sted', array(

        'menu_icon' 		 => 'dashicons-businessman',
        'public'             => false,
        'publicly_queryable' => false,
        'show_ui'            => true,
        'show_in_menu'       => 'edit.php?post_type=kursus',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sted' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'supports'           => array( 'title'),
        'labels'             => array(

            'name'               => _x( 'Steder', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Sted', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Steder', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Steder', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'sted', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny sted', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se sted', 'smamo' ),
            'all_items'          => __( 'Steder', 'smamo' ),
            'search_items'       => __( 'Find sted', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette et nyt sted.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
       )
    );
    
}
