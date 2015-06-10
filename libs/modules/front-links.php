<?php

$args = array(
    'post_type' => 'post',
    'orderby'   => 'menu_order',
    'hide_empty'    => 0,
    'exclude'   => 1,
);
$categories = get_categories( $args );

?>
   

<section class="front-links">
    <div style="background-image:url(<?php echo get_template_directory_uri() ?>/libs/img/privat.jpg);">
        <a href="<?php bloginfo('url') ?>/privat"><span>Privat</span></a>
    </div>
    <div style="background-image:url(<?php echo get_template_directory_uri() ?>/libs/img/erhverv.jpg);">
        <a href="<?php bloginfo('url') ?>/erhverv"><span>Erhverv</span></a>
    </div>
    <div style="background-image:url(<?php echo get_template_directory_uri() ?>/libs/img/sidstenyt.jpg);">
        <a class="small" href="#seneste-nyt">Sidste nyt på siden</a>
        <ul>
            <?php foreach($categories as $cat):?>
            <li>
                <a href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
            </li>
           <?php endforeach; ?>
        </ul>
    </div>
</section>