<section class="single-content">
    <?php while(have_posts()) : the_post();?>
    <?php $cat = get_the_category($post->ID); $cat_id = $cat[0]->term_id?>
   <article>
        <h1><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()) : the_post_thumbnail('post-thumbnail-single'); endif; ?>
        <?php the_content(); ?>
    </article>
    <?php get_template_part('libs/modules/single-fb','comments'); ?>
    <?php endwhile; ?>
</section>