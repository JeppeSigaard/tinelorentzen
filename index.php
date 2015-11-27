<?php 

get_header();

get_template_part('template-parts/common/content','before');

if(is_home() || is_front_page()){require 'templates/home.php';}

else if( is_page() ){require 'templates/page.php';}

else if( is_archive() ){require 'templates/archive.php';}

else if(is_single() || is_singular() ){require 'templates/single.php';}

get_template_part('template-parts/common/content','after');

get_footer();
