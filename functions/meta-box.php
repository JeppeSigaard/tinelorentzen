<?php

add_filter( 'rwmb_meta_boxes', 'smamo_add_boxes' );

function smamo_add_boxes(){

    require 'meta-box/posts-preview.php';

return $mb;
}
?>
