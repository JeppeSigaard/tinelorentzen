<section class="guide">
    <?php $cool = get_posts(array('post_type' => 'cool', 'number_posts' => 3, 'offset' => 0)); ?>
    <?php foreach ($cool as $cool) :?>
        <article class="cool" id="cool-<?php echo $cool->ID  ?>">
           <div class="inner">
                <h3><?php echo $cool->post_title; ?></h3>
                <div class="cool-content"><?php echo $cool->post_content; ?></div>
            </div>
        </article>
    <?php endforeach; wp_reset_postdata();?>
</section>
