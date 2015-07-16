<?php
/*
Template Name:blog
 */
$wp_path = 'http://coloredcow.in/wp/wp-content/themes/coloredcow';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="<?php echo "$wp_path";?>/js/index.js"></script>
        <title>Blog</title>
        <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/blog.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo "$wp_path";?>/images/blog/logo.png">
    </head>

    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo " $wp_path ";?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" language="javascript">
             $(document).ready(function(){
    $(".outer").each(function() {
            var innerheight = $(".inner").height();
          // alert(innerheight);
             var outerheight = $(".outer").height();
           //alert(outerheight);
             var topspace=(outerheight-innerheight)/2.0;

        //alert(topspace);
             $(".inner").css("padding-top", topspace);

         });
             });

      </script>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ye">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
                            <a href="<?php cc_home_path();?>"> <img src="<?php echo "$wp_path";?>/images/blog/logo.png" height="65px" width="60px" style="padding-top:10px; padding-left:9px;"></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 he">
                            <p class="cc"> <a href="<?php cc_home_path();?>" class="cclink">ColoredCow</a></p>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">

                        </div>



                        <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs">

                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                            <a href="<?php cc_root_path();?>/about">
                         <img src="<?php echo "$wp_path";?>/images/blog/about_black.png" height="55px" width="65px" style=" top: 7px;position: absolute; top: 7px; left:6vw" >
                          <div id="about">
                               <img src="<?php echo "$wp_path";?>/images/blog/about.png" height="55px" width="65px" id="about1" />
                          </div>
                          </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                            <a href="<?php cc_root_path();?>/services">
                         <img src="<?php echo "$wp_path";?>/images/blog/service_black.png" height="55px" width="65px" style=" top: 7px;position: absolute; top: 7px; left:6vw" >
                           <div id="about">
                          <img src="<?php echo "$wp_path";?>/images/blog/service.png" height="55px" width="65px" id="service">
                                </div>
                           </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                            <a href="#">
                         <img src="<?php echo "$wp_path";?>/images/blog/edu_black.png" height="55px" width="65px" style=" top: 7px;position: absolute; top: 7px; left:6vw" >
                              <div id="about">
                           <img src="<?php echo "$wp_path";?>/images/blog/edu.png" height="55px" width="65px" id="edu">
                             </div>
                         </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                            <a href="#">
                         <img src="<?php echo "$wp_path";?>/images/blog/blog_black.png" height="55px" width="80px" style=" top: 7px;position: absolute; top: 7px; left:5.5vw" >
                            <div id="aboutblog">
                            <img src="<?php echo "$wp_path";?>/images/blog/blog.png" height="55px" width="80px" id="blog">
                         </div>
                         </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                            <a href="<?php cc_root_path();?>/career">
                         <img src="<?php echo "$wp_path";?>/images/blog/career_black.png" height="60px" width="50px" style=" top: 7px;position: absolute; top: 7px; left:6vw" >
                            <div id="about" onmouseover="myFunction1()" onmouseout="myFunction2()">
                            <img src="<?php echo "$wp_path";?>/images/blog/career.png" height="60px" width="50px" id="career" >
                         </div>
                         </a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                            <a href="<?php cc_root_path();?>/contact">
                         <img src="<?php echo "$wp_path";?>/images/blog/contact_black.png" height="55px" width="50px" style=" top: 7px;position: absolute; top: 7px; left:6vw" >
                            <div id="about">
                            <img src="<?php echo "$wp_path";?>/images/blog/contact.png" height="55px" width="50px" id="contact">
                                  </div>
                         </a>
                        </div>
                    </div>
                    <div class="row">
                        <a href="<?php cc_root_path();?>/about" class="menutext">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                                About
                            </div>
                        </a>
                        <a href="<?php cc_root_path();?>/services" class="menutext">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                                Services
                            </div>
                        </a>
                        <a href="#" class="menutext">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                                Education
                            </div>
                        </a>
                        <a href="#" class="menutext">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                                Blog
                            </div>
                        </a>
                        <a href="<?php cc_root_path();?>/career" class="menutext">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                Career
                            </div>
                        </a>
                        <a href="<?php cc_root_path();?>/contact" class="menutext">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                                Contact
                            </div>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blank">
                            <div class="row" id="abc" style="display:none;" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submenuspace">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submenuspace">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submenuspace">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submenuspace">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submenuspace">
                                    <div id="triangle-down" class="dropdown" style="display:none;">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submenuspace">
                                </div>


                            </div>
                            <div class="row" id="optional" style="display:none;" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 submenu">
                                    <a href="#" class="subtext">Roles</a>
                                </div>
                                <div class="hidden-lg hidden-md col-sm-1 col-xs-1">

                                </div>
                                <div class="hidden-lg hidden-md col-sm-5 col-xs-5">

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 submenu">
                                    <a href="#" class="subtext">Application Process</a>
                                </div>
                                <div class="hidden-lg hidden-md col-sm-1 col-xs-1">

                                </div>
                                <div class="hidden-lg hidden-md col-sm-5 col-xs-5">

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 submenu">
                                    <a href="<?php cc_root_path();?>/graduates" class="subtext">Graduates</a>
                                </div>
                                <div class="hidden-lg hidden-md col-sm-1 col-xs-1">

                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text">
                            <p class="cast">Know More.
                                <br>Word.</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 text">

                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                            <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                            <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aftergrass">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    <div class="lowertriangle" id="triangle-down2">
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2 crs">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8 cr">
                    <div class="crt">
                        CURRENT READS
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2 crs">
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 arrows">
                    <div class="arrow">
                        <center> <img src="<?php echo "$wp_path";?>/images/blog/arrow.png" class="arrowleft" /></center>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-8 arrowm">
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 arrows">
                    <div class="arrow">
                        <center><img src="<?php echo "$wp_path";?>/images/blog/arrow.png" class="arrowright" /></center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aftercr">
                </div>
            </div>




    <?php

        show_blogs();
            ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterbg">

                </div>
            </div>





        </div>


    </body>

    </html>

    <?php require 'footer.php';
                    ?>


