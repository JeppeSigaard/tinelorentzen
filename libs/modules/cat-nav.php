<nav class="blogroll-nav">
    <div class="inner">
    <?php
    $args = array(
        'post_type' => 'post',
        'orderby'   => 'menu_order',
        'hide_empty'    => 0,
        'exclude'   => 1,
    );
    $categories = get_categories( $args );
    foreach($categories as $cat):?>
        <a class="cat-nav cc-<?php echo $cat->term_id ?> cc-bg" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
    <?php endforeach; ?>
    </div>
</nav>
