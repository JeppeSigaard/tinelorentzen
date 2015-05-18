<?php $ct_options = get_option( 'kontaktinfo_options' ); ?>
<footer>
    <div>
       <a id="home_url" href="<?php echo esc_url(bloginfo('url')); ?>">
        <div class="logo">
            <?php include get_template_directory().'/libs/img/tine-logo.svg'; ?>
        </div>
        </a>
        <h4><?php bloginfo('title'); ?></h4>
        <h5><?php bloginfo('description');?></h5>
        <span>
            <a href="tel:<?php echo str_replace(' ','',$ct_options['tlf']);?>"><?php echo esc_html($ct_options['tlf']);?></a>
            <a href="mailto:<?php echo esc_html($ct_options['email']);?>k"><?php echo esc_html($ct_options['email']);?></a>
        </span>
        <nav>
            <a target="_blank" href="<?php echo esc_url($ct_options['faceboook']) ?>" class="nav-facebook">Facebook</a>
            <a target="_blank" href="<?php echo esc_url($ct_options['pinterest']) ?>" class="nav-pinterest">Pinterest</a>
            <a target="_blank" href="<?php echo esc_url($ct_options['instagram']) ?>" class="nav-instagram">Instagram</a>
            <a href="#" class="nav-keyboard">Keyboard</a>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
