<?php get_header(); ?>
<section class="blogroll">
    <?php include get_template_directory().'/libs/modules/cat-nav.php'; ?>
</section>
<section class="single-content">
    <?php while(have_posts()) : the_post();?>
    <?php $cat = get_the_category($post->ID); $cat_id = $cat[0]->term_id?>
    <main class="cc-<?php echo $cat_id ?>">
       <article>
            <h1 class="cc-bg"><?php the_title(); ?></h1>
            <?php if(has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
            <?php the_content(); ?>
        </article>
        <?php get_template_part('libs/modules/single-fb','comments'); ?>
    </main>
    <?php endwhile; ?>
    <aside class="cc-<?php echo $cat_id ?>">
       <nav class="related">
            <?php
            $related = get_posts(array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'exclude' => $post->ID,
                'category' => $cat_id
            ));

            foreach($related as $rel) :?>
            <a class="cc-bg" href="<?php echo get_the_permalink($rel->ID); ?>" title="<?php echo $rel->post_title ?>"><?php echo $rel->post_title ?></a>
            <?php endforeach; ?>
       </nav>
    </aside>
</section>
<?php get_footer(); ?>
