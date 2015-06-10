
<section class="blogroll" id="seneste-nyt">
    <?php include get_template_directory().'/libs/modules/cat-nav.php';?>
    <?php if(have_posts()) : ?>
   <main>
       <?php while(have_posts()) : the_post(); ?>
       <?php $cat = get_the_category( $post->ID); ?>
       <a class="preview-small preview-width-maker"></a>
       <a class="preview-<?php echo get_post_meta($post->ID,'preview',true) ?> cat-<?php echo $cat[0]->term_id; ?>" href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
         <div class="inner">
         <?php $thumb_size = 'post-preview-'.get_post_meta($post->ID,'preview',true);?>
         <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $thumb_size );?>
          <?php if(has_post_thumbnail()): ?>
          <div class="post-thumb">
             <img src="<?php echo $image_url[0]; ?>">
          </div>
          <h3><span><?php echo get_the_title(); ?></span></h3>
          <?php else : ?>
          <h3 class="no-img"><span><?php echo get_the_title(); ?></span></h3>
          <span><?php the_excerpt(); ?></span>
          <?php endif;?>
          </div>
       </a>

       <?php endwhile; ?>
   </main>
   <?php else: ?>
   <main>
   </main>
   <?php endif; ?>
</section>
