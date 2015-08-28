<?php 

if(!is_admin() || !class_exists('Tax_Meta_Class')){
    return;
}


$config = array(
    'id' => 'smamo_cat_meta',          // meta box id, unique per meta box
    'title' => 'Kategoriens farve',          // meta box title
    'pages' => array('category'),        // taxonomy name, accept categories, post_tag and custom taxonomies
    'context' => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'fields' => array(),            // list of meta fields (can be added by field arrays)
    'local_images' => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );

$smamo_cat_meta =  new Tax_Meta_Class($config);
$smamo_cat_meta->addColor('cat_color',array('name'=> __('Vælg farve','tax-meta')));
$smamo_cat_meta->addCheckbox('cat_comments',array('name'=> __('Aktiver Facebook kommentarer for kategori','tax-meta')));

$smamo_cat_meta->Finish();