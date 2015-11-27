<?php 

   $mb[] = array(
    'id' => 'fields',
    'title' => __( 'Felter', 'rwmb' ),
    'pages' => array('rabatkode'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Nummer', 'rwmb' ),
            'id'    => "rabat_kode_nr",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Kode', 'rwmb' ),
            'id'    => "rabat_kode",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Navn', 'rwmb' ),
            'id'    => "rabat_navn",
            'type' => 'text',
        ),
        
        array(
            'name'  => __( 'Email', 'rwmb' ),
            'id'    => "rabat_email",
            'type' => 'text',
        ),
    ),
);