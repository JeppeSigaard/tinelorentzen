<?php


?>
   

<section class="front-links">
    <div style="background-image:url(<?php echo get_template_directory_uri() ?>/libs/img/privat.jpg);">
        <a href="<?php bloginfo('url') ?>/privat"><span>Privat</span></a>
    </div>
    <div style="background-image:url(<?php echo get_template_directory_uri() ?>/libs/img/erhverv.jpg);">
        <a href="<?php bloginfo('url') ?>/erhverv"><span>Erhverv</span></a>
    </div>
    <div style="background-image:url(<?php echo get_template_directory_uri() ?>/libs/img/sidstenyt.jpg);">
        <a href="<?php bloginfo('url') ?>/kursus-oversigt"><span>Kurser</span></a>
        <?php //wp_nav_menu(array('theme_location' => 'front_menu', 'container' => false, 'fallback_cb' => '')); ?>
    </div>
</section>