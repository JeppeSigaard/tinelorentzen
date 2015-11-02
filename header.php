<!DOCTYPE html>
<html lang="da">
<head>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62582532-1', 'auto');
        ga('send', 'pageview');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title(' · ',true,'right'); ?></title>
    <?php wp_head(); ?>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.4&appId=1566523690226833";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
   <?php $ct_options = get_option('kontaktinfo_options');?>
    <div class="contact">
        <a href="tel:<?php echo str_replace(' ','',$ct_options['tlf']);?>"><?php echo esc_html($ct_options['tlf']);?></a>
        <a href="mailto:<?php echo esc_html($ct_options['email']);?>k"><?php echo esc_html($ct_options['email']);?></a>
    </div>
    <div class="top-logo">
        <a href="<?php echo get_bloginfo('url') ?>" title="Tilbage til forsiden">
            <?php include 'libs/img/tine-logo.svg'; ?>
        </a>
    </div>
    <span class="month"><?php echo date_i18n('F');?></span>
    <div class="nav-toggle"><span></span></div>
</header>
<nav id="main-menu">
    <?php wp_nav_menu(array('location' => 'main_menu','container' => null)); ?>
</nav>
