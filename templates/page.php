<section class="page-content">
    <?php while(have_posts()) : the_post();?>
    <article>
        <h1 class="catpaint"><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?>
        <?php the_content(); ?>
    </article>
    <?php endwhile; ?>
    <aside>

    </aside>
</section>