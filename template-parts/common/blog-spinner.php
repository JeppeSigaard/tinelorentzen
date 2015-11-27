<div class="blog-spinner">
<?php
$cats = get_terms( array('category') );
foreach($cats as $cat) :
    $spinner = new WP_Query(array(
        'posts_per_page' => 1,
        'cat' => $cat->term_id,
    ));

    while($spinner->have_posts()) : $spinner->the_post();
    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'widescreen' );
    ?>
    <a href="<?php the_permalink(); ?>" class="spinner-item cc-<?php echo $cat->term_id; ?> cc-bg cc-border-color" data-bg="<?php echo $image_url[0] ?>">
        <h3 class="spinner-item-title cc-bg"><?php the_title(); ?></h3>
    </a>
    <?php
    endwhile; 
    endforeach;
    wp_reset_postdata();
    ?>
    <div class="blog-spinner-controls">
        <?php foreach( $cats as $cat) : ?>
            <span data-ctl="<?php echo $cat->term_id; ?>" class="cc-<?php echo $cat->term_id; ?> cc-bg"></span>
        <?php endforeach; ?>
    </div>
</div>