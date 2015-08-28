<?php

$cat = get_the_category(get_the_ID());

$fb_comments_active = get_tax_meta($cat[0]->term_id,'cat_comments',true);

if($fb_comments_active) : ?>
<div class="fb-comment-box">
    <div class="fb-comments" data-href="<?php echo the_permalink() ?>" data-numposts="5" data-width="100%"></div>
</div>
<?php endif; 