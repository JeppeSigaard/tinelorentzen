<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require 'meta-box/posts-preview.php';
    require 'meta-box/kursus.php';
    require 'meta-box/sted.php';
    require 'meta-box/rabatkode.php';

return $mb;
}
?>
