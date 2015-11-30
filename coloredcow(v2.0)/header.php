<!doctype html>
<html>
<head>

<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/logo.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <title><?php
if ( is_home()) {
echo 'Blog';
}
elseif (have_posts()){	while ( have_posts() ): the_post();  echo the_title(); endwhile; } ?> </title>
    <?php wp_head(); ?>
       <meta property="og:url"           content="<?php echo get_permalink();?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo the_title();?>" />
    <meta property="og:description"   content="<?php echo the_excerpt();?>" />
    </head>
<body <?php body_class(); ?>>

