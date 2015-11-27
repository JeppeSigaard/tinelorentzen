<?php $ct_options = get_option( 'kontaktinfo_options' ); ?>
<nav id="site-nav" class="site-nav">
    <div class="inner">
        <?php wp_nav_menu(array('location' => 'main_menu','container' => null)); ?>

        <div class="site-nav-bc">
        <?php include get_template_directory().'/libs/img/tine-logo.svg'; ?>
        <?php include get_template_directory().'/libs/img/tine-navn.svg'; ?>
        <span>
            <a href="tel:<?php echo str_replace(' ','',$ct_options['tlf']);?>"><?php echo esc_html($ct_options['tlf']);?></a>
            <a href="mailto:<?php echo esc_html($ct_options['email']);?>k"><?php echo esc_html($ct_options['email']);?></a>
        </span>
        <nav>
            <a target="_blank" href="<?php echo esc_url($ct_options['faceboook']) ?>" class="nav-facebook">Facebook</a>
            <a target="_blank" href="<?php echo esc_url($ct_options['pinterest']) ?>" class="nav-pinterest">Pinterest</a>
            <a target="_blank" href="<?php echo esc_url($ct_options['instagram']) ?>" class="nav-instagram">Instagram</a>
        </nav>
        </div>  
    </div>
    
</nav>