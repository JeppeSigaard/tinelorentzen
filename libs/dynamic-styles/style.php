<?php
// vi skal ikke bruger header, men WP's funktionsbibliotek
define('WP_USE_THEMES', false); 

// Vores retur encodes til json, så det er nemt at bruge i javascript.
header('Content-Type: text/css');

// Hent wp-load, så vi får mulighed for at bruge wordpress' funktionsarkiv
require '../../../../../wp-load.php';

$cat_color = '#9e6079';

$cats = get_terms( array('category'), array('hide_empty' => false));
$color_array = array();

foreach($cats as $cat) : 

$cat_color = '#9e6079';

$cat_id = $cat->term_id;

$meta_color = get_tax_meta($cat_id,'cat_color',true);

if($meta_color !== ''){$cat_color = $meta_color;}

$color_array[] = $cat_color;

?>

.cc-<?php echo $cat_id; ?> .cc-bg,
.cc-<?php echo $cat_id; ?>.cc-bg,
.cc-<?php echo $cat_id; ?> .cc-after-bg:after,
.cc-<?php echo $cat_id; ?> .cc-before-bg:before,
.cc-<?php echo $cat_id; ?>.cc-after-bg:after,
.cc-<?php echo $cat_id; ?>.cc-before-bg:before{
    background-color: <?php echo $cat_color; ?>;
    color:white;
}

.cc-<?php echo $cat_id; ?> .cc-border,
.cc-<?php echo $cat_id; ?>.cc-border,
.cc-<?php echo $cat_id; ?> .cc-after-border:after,
.cc-<?php echo $cat_id; ?> .cc-before-border:before,
.cc-<?php echo $cat_id; ?>.cc-after-border:after,
.cc-<?php echo $cat_id; ?>.cc-before-border:before{
    box-shadow: 10px 0 0 <?php echo $cat_color; ?>,-10px 0 0 <?php echo $cat_color; ?>;
    -webkit-box-shadow: 10px 0 0 <?php echo $cat_color; ?>,-10px 0 0 <?php echo $cat_color; ?>;
    -moz-box-shadow: 10px 0 0 <?php echo $cat_color; ?>,-10px 0 0 <?php echo $cat_color; ?>;
}

.cc-<?php echo $cat_id; ?> .cc-border-color,
.cc-<?php echo $cat_id; ?>.cc-border-color{
    border-color: <?php echo $cat_color; ?>;
}

<?php endforeach;

$color_array_length = count($color_array);
$color_percent = 100 / $color_array_length;
$return_color = '';
$i = 0;
?>

@keyframes colortrans{
<?php foreach ($color_array as $color) : if ($i === 0) {$return_color = $color;} ?>
    <?php echo $color_percent * $i; ?>%{background-color:<?php echo $color; ?>;}
<?php $i ++; endforeach; ?>
    100%{background-color: <?php echo $return_color; ?>;}
}


@-webkit-keyframes colortrans{
<?php $i = 0; foreach ($color_array as $color) : ?>
    <?php echo $color_percent * $i; ?>%{background-color:<?php echo $color; ?>;}
<?php $i ++; endforeach; ?>
    100%{background-color: <?php echo $return_color; ?>;}
}




@keyframes border-colortrans{
<?php foreach ($color_array as $color) : if ($i === 0) {$return_color = $color;} ?>
    <?php echo $color_percent * $i; ?>%{border-color:<?php echo $color; ?>;}
<?php $i ++; endforeach; ?>
    100%{border-color: <?php echo $return_color; ?>;}
}


@-webkit-keyframes border-colortrans{
<?php $i = 0; foreach ($color_array as $color) : ?>
    <?php echo $color_percent * $i; ?>%{border-color:<?php echo $color; ?>;}
<?php $i ++; endforeach; ?>
    100%{border-color: <?php echo $return_color; ?>;}
}