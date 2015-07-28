<?php get_header(); ?>
<section class="single-content cat-course">
    <?php while(have_posts()) : the_post();?>
    <main>
       <article>
            <h1 class="catpaint"><strong>Kursus:</strong> <?php the_title(); ?></h1>
            <?php 
                $dates = get_post_meta(get_the_ID(),'course_date',true);
                $format_date = '';
                foreach($dates as $date){
                    if (strtotime($date) > time()){
                        $format_date = date_i18n('d. F Y \k\l. H:i',strtotime($date));
                        break;
                    }
                }
            ?>
            
            <?php if(has_post_thumbnail()) : the_post_thumbnail('post-preview-wide'); endif; ?>
            <?php the_content(); ?>
        </article>
    </main>
    <aside class="cat-course">
        <div class="aside-inner course-meta">
            <h3 class="catpaint">Praktisk information</h3>
            <div class="border"><strong>Næste gang: </strong><span class="right"><?php echo ($format_date !== '') ? $format_date : 'ikke planlagt'; ?></span></div>  
            <div class="border"><strong>Varighed: </strong><span class="right"><?php echo get_post_meta(get_the_ID(),'course_time',true); ?></span></div> 
            <div class="border"><strong>Pris: </strong><span class="right"><?php echo get_post_meta(get_the_ID(),'price',true); ?></span></div>
            <?php $remarks = get_post_meta(get_the_ID(),'course_remarks',true); if ($remarks) : ?>
            <div><?php echo apply_filters('the_excerpt',$remarks) ?></div>
            <?php endif; ?>
        </div>
        <?php if ($format_date !== '') : ?>
        <div class="aside-inner course-submit">
            <h3 class="catpaint">Deltag i kurset</h3>
            <form action="<?php echo get_template_directory_uri() ?>">
                <input type="hidden" name="couse_id" value="<?php echo get_the_ID(); ?>"/>
                <input type="hidden" name="couse_date" value="<?php echo $date ?>"/>
                
                <div>
                    <input type="text" name="name">
                    <label for="name">Dit navn</label>
                </div>
                
                <div>
                    <input type="email" name="email">
                    <label for="email">Din email</label>
                </div>
                
                <div>
                    <input type="tel" name="tlf">
                    <label for="tlf">Dit telefonnummer</label>
                </div>
                
                <div>
                    <input type="number" name="persons" maxlength="1">
                    <label for="persons">Antal personer</label>
                </div>
                
                <div>
                    <textarea rows="1" name="remarks"></textarea>
                    <label for="remarks">Eventuelle bemærkninger</label>
                </div>
                <div>
                    <a href="#" class="form-button submit catpaint">Send tilmelding</a>
                    <a href="mailto:mail@tinelorentzen.dk?subject=ANG: Tilmelding til kursus <?php echo $format_date ?>: <?php the_title(); ?>" class="form-button other">Tilmeld via Email</a>
                </div>
            </form>
        </div>
        <?php endif; ?>
        <div class="aside-inner course-address">
            <?php
                $place_id = get_post_meta(get_the_ID(),'course_place',true);
                $place = get_post($place_id);
            ?>
            <h3 class="catpaint">Find vej</h3>
            <div class="border"><strong><?php echo $place->post_title; ?></strong></div>
            <div><?php echo get_post_meta($place_id,'address',true) ?></div>
            <div><?php echo get_post_meta($place_id,'post',true).' '.get_post_meta($place_id,'by',true) ?></div>
            
        </div>
        <?php endwhile; ?> <!-- no more post object -->
        <nav class="related">
            <?php
            $related = get_posts(array(
                'post_type' => 'kursus',
                'posts_per_page' => 5,
                'exclude' => $post->ID
            ));

            foreach($related as $rel) :?>
            <a class="catpaint" href="<?php echo get_the_permalink($rel->ID); ?>" title="<?php echo $rel->post_title ?>"><?php echo $rel->post_title ?></a>
            <?php endforeach; ?>
       </nav>
    </aside>
</section>
<?php get_footer(); ?>
