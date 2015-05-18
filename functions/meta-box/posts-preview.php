<?php

$mb[] = array(
    'id' => 'preview',
    'title' => __( 'forhåndsvisning', 'rwmb' ),
    'pages' => array('post'),
    'context' => 'side',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(

        array(
            'name'  => __( 'Dimensioner', 'rwmb' ),
            'id'    => "preview",
            'type' => 'select',
            'std'   => 'small',
            'placeholder' => __( '(standard lille)', 'meta-box' ),
            'options' => array(
                'small' => 'lille (300 x 300)',
                'wide' => 'bred (600 x 300)',
                'tall' => 'høj (300 x 600)',
                'large' => 'stor (600 x 600)',
            ),
        ),
    ),
);
?>
