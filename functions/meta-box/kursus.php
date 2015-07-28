<?php 

$mb[] = array(
    'id' => 'dates',
    'title' => __( 'Dato og varighed', 'rwmb' ),
    'pages' => array('kursus'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Dato(er)', 'rwmb' ),
            'id'    => "course_date",
            'type' => 'datetime',
            'clone' => 'true',
            ),
        
        array(
            'name'  => __( 'Varighed', 'rwmb' ),
            'id'    => "course_time",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Bemærkninger', 'rwmb' ),
            'id'    => "course_remarks",
            'type' => 'textarea',
        ),
    ),
);

$mb[] = array(
    'id' => 'price',
    'title' => __( 'Pris', 'rwmb' ),
    'pages' => array('kursus'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Pris per deltager', 'rwmb' ),
            'id'    => "price",
            'type' => 'text',
            ),
    ),
);



$mb[] = array(
    'id' => 'attach_media',
    'title' => __( 'Tilføj kursusmateriale', 'rwmb' ),
    'pages' => array('kursus'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Vælg eller tilføj materiale', 'rwmb' ),
            'id'    => "course_media",
            'type' => 'file_advanced',
            ),
    ),
);

$mb[] = array(
    'id' => 'place',
    'title' => __( 'Steder', 'rwmb' ),
    'pages' => array('kursus'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Tilføj sted', 'rwmb' ),
            'id'    => "course_place",
            'type' => 'post',
            'post_type'   => 'sted',
            'query_args' => array(
                'posts_per_page' => -1,
            ),
        ),
    ),
);