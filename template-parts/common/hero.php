<?php
$bgimage = '';
$options = get_option( 'bgimage_settings' );
$bgurl = $options['bgimage_text_field_0'];
if($bgurl){
    $bgimage = '<aside class="bg-image" data-stellar-background-ratio=".2" style="background-image:url('.$bgurl.');"></aside>';
}
?>
<section class="hero">
    <?php echo $bgimage ?>
    <div>
        <div class="logo">
            <?php include get_template_directory().'/libs/img/tine-logo.svg'; ?>
        </div>
        <h1><?php bloginfo('title'); ?></h1>
        <h2><?php bloginfo('description');?></h2>
        <?php $ct_options = get_option( 'kontaktinfo_options' ); ?>
        <nav>
            <a target="_blank" href="<?php echo esc_url($ct_options['faceboook']) ?>" class="nav-facebook">Facebook</a>
            <a target="_blank" href="<?php echo esc_url($ct_options['pinterest']) ?>" class="nav-pinterest">Pinterest</a>
            <a target="_blank" href="<?php echo esc_url($ct_options['instagram']) ?>" class="nav-instagram">Instagram</a>
            <a href="#" class="nav-keyboard">Keyboard</a>
        </nav>
    </div>
</section>
