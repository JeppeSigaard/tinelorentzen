<?php 

$mb[] = array(
    'id' => 'place_address',
    'title' => __( 'Adresse', 'rwmb' ),
    'pages' => array('sted'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Adresse', 'rwmb' ),
            'id'    => "address",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Postnummer', 'rwmb' ),
            'id'    => "post",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'By', 'rwmb' ),
            'id'    => "by",
            'type' => 'text',
        ),
    ),
);

$mb[] = array(
    'id' => 'place_map_position',
    'title' => __( 'Kortposition', 'rwmb' ),
    'pages' => array('sted'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Latitude', 'rwmb' ),
            'id'    => "place_lat",
            'type' => 'text',
        ),
        
         array(
            'name'  => __( 'Longtitude', 'rwmb' ),
            'id'    => "place_long",
            'type' => 'text',
        ),
        
    ),
);