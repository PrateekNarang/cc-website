<?php
/*
Template Name:internship
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Colored_Cow
 * @since Colored Cow 1.0
 
 */
$wp_path = 'http://localhost/wordpress/wp-content/themes/coloredcow';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="<?php echo "$wp_path";?>/js/index.js"></script>
        <title>Internship Application</title>
        <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/aboutnew.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/about.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo "$wp_path";?>/images/logo.png">
    </head>

    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo "$wp_path";?>/js/bootstrap.min.js"></script>
          <script  src="<?php echo "$wp_path";?>/js/new.js" type="text/javascript" language="javascript"></script>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <center> <a href="<?php cc_home_path();?>"> <img src="<?php echo "$wp_path";?>/images/logo.png" height="65px" width="85px" style="padding-top:10px; padding-left:9px;" class="img-responsive"></a></center>
                </div>
            </div>
        </div>
     </body>
</html>