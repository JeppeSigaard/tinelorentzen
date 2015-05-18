<?php
add_action( 'init', 'smamo_add_cool' );

function smamo_add_cool() {
	register_post_type( 'cool', array(

        'menu_icon' 		 => 'dashicons-star-filled',
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'cool' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array( 'title','editor'),
        'labels'             => array(

            'name'               => _x( 'Cool stuff', 'post type general name', 'smamo' ),
            'singular_name'      => _x( 'Cool stuff', 'post type singular name', 'smamo' ),
            'menu_name'          => _x( 'Cool stuff', 'admin menu', 'smamo' ),
            'name_admin_bar'     => _x( 'Cool stuff', 'add new on admin bar', 'smamo' ),
            'add_new'            => _x( 'Tilføj ny ', 'cool artikel', 'smamo' ),
            'add_new_item'       => __( 'Tilføj ny', 'smamo' ),
            'new_item'           => __( 'Ny cool artikel', 'smamo' ),
            'edit_item'          => __( 'Rediger', 'smamo' ),
            'view_item'          => __( 'Se cool artikel', 'smamo' ),
            'all_items'          => __( 'Se alle', 'smamo' ),
            'search_items'       => __( 'Find cool artikel', 'smamo' ),
            'parent_item_colon'  => __( 'Forældre:', 'smamo' ),
            'not_found'          => __( 'Start med at oprette en ny cool artikel.', 'smamo' ),
            'not_found_in_trash' => __( 'Papirkurven er tom.', 'smamo' ),
            ),
	   )
    );
}


?>
