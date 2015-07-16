<?php
/*
Template Name:career
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
    <title>Career</title>
    <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo "$wp_path";?>/css/career.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo "$wp_path";?>/images/career/logo.png">
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo "$wp_path";?>/js/bootstrap.min.js"></script>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ye">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3">
                          <a href="<?php cc_home_path();?>"> <img src="<?php echo "$wp_path";?>/images/career/logo.png" height="65px" width="60px" style="padding-top:10px; padding-left:9px;"></a>
                      </div>
                      <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 he">
                          <p class="cc"> <a href="<?php cc_home_path();?>" class="cclink">ColoredCow</a></p>
                      </div>
                    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs">

                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">

                        <a href="<?php cc_root_path();?>/about"> <img src="<?php echo "$wp_path";?>/images/career/about_black.png" height="55px" width="65px" style=" top: 7px;position: absolute; top: 7px; left:6vw">
                            <div id="about">
                                <img src="<?php echo "$wp_path";?>/images/career/about.png" height="55px" width="65px" id="about1" />
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                        <a href="<?php cc_root_path();?>/service">
                            <img src="<?php echo "$wp_path";?>/images/career/service_black.png" height="55px" width="65px" style=" top: 7px;position: absolute; top: 7px; left:6vw">
                            <div id="about">
                                <img src="<?php echo "$wp_path";?>/images/career/service.png" height="55px" width="65px" id="service">
                            </div>
                        </a>



                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                        <a href="#">
                            <img src="<?php echo "$wp_path";?>/images/career/edu_black.png" height="55px" width="65px" style=" top: 7px;position: absolute; top: 7px; left:6vw">
                            <div id="about">
                                <img src="<?php echo "$wp_path";?>/images/career/edu.png" height="55px" width="65px" id="edu">
                            </div>
                        </a>


                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                        <a href="<?php cc_root_path();?>/blog">
                            <img src="<?php echo "$wp_path";?>/images/career/blog_black.png" height="55px" width="80px" style=" top: 7px;position: absolute; top: 7px; left:5.5vw">
                            <div id="aboutblog">
                                <img src="<?php echo "$wp_path";?>/images/career/blog.png" height="55px" width="80px" id="blog">

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                        <a href="#">
                            <img src="<?php echo "$wp_path";?>/images/career/career_black.png" height="60px" width="50px" style=" top: 7px;position: absolute; top: 7px; left:6vw">
                            <div id="about" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <img src="<?php echo "$wp_path";?>/images/career/career.png" height="60px" width="50px" id="career">

                            </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu">
                        <a href="<?php cc_root_path();?>/contact">
                            <img src="<?php echo "$wp_path";?>/images/career/contact_black.png" height="55px" width="50px" style=" top: 7px;position: absolute; top: 7px; left:6vw">
                            <div id="about">
                                <img src="<?php echo "$wp_path";?>/images/career/contact.png" height="55px" width="50px" id="contact">
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
                    <a href="<?php cc_root_path();?>/service" class="menutext">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                            Services
                        </div>
                    </a>
                    <a href="#" class="menutext">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                            Education
                        </div>
                    </a>
                    <a href="<?php cc_root_path();?>/blog" class="menutext">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 menu1">
                            Blog
                        </div>
                    </a>
                    <a href="#" class="menutext">
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
                        <p class="cast">Cast your own light.
                            <br>Prepare. Engage.</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-3 text">

                    </div>

                </div>


                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">
                        <img src="<?php echo "$wp_path";?>/images/career/plant_icon.png" height="150px" width="150px" style="position: absolute; bottom: -115px; left: 45px;" />
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <img src="<?php echo "$wp_path";?>/images/career/grass.png" class="grass" />
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
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
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs spaceo">

            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs box">
                <div class="row-fluid">
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs bluespace">

                    </div>
                    <div class="col-lg-8 col-md-8 hidden-sm hidden-xs bluefilled">
                        <a href="#" class="bodylink">Roles</a>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Become an actor of change. Browse positions by title.
                </div>

            </div>
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs spacei">

            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs box">
                <div class="row-fluid">
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs bluespace">

                    </div>
                    <div class="col-lg-8 col-md-8 hidden-sm hidden-xs bluefilledap">
                        <a href="#" class="bodylink">Application Process</a>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Find the backstage passes for Colored Cow here.
                </div>
            </div>
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs spacei">

            </div>
            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs box">
                <div class="row-fluid">
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs bluespace">

                    </div>
                    <div class="col-lg-8 col-md-8 hidden-sm hidden-xs bluefilled">
                        <a href="<?php cc_root_path();?>/graduates" class="bodylink">Graduates</a>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm hidden-xs bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Follow your heart here.
                </div>
            </div>
            <div class="col-lg-1 col-md-1 hidden-sm hidden-xs spaceo">

            </div>

            <div class="hidden-lg hidden-md hidden-xs col-sm-2 smspace">
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-3 smbox">
                <div class="row-fluid">
                    <div class="col-sm-2 hidden-lg hidden-md hidden-xs bluespace">

                    </div>
                    <div class="col-sm-8 hidden-lg hidden-md hidden-xs bluefilled">
                        <a href="#" class="bodylink">Roles</a>
                    </div>
                    <div class="col-sm-2 hidden-lg hidden-md hidden-xs bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Become an actor of change. Browse positions by title.
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-2 smspace">
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-3 smbox">
                <div class="row-fluid">
                    <div class="col-sm-2 hidden-lg hidden-md hidden-xs bluespace">

                    </div>
                    <div class="col-sm-8 hidden-lg hidden-md hidden-xs bluefilled">
                        <a href="<?php cc_root_path();?>/graduates" class="bodylink">Graduates</a>
                    </div>
                    <div class="col-sm-2 hidden-lg hidden-md hidden-xs bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Follow your heart here.
                </div>

            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-2 smspace">
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-12 smmidspace">
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-4 smspace2">
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-4 smbox">
                <div class="row-fluid">
                    <div class="col-sm-2 hidden-lg hidden-md hidden-xs bluespace">

                    </div>
                    <div class="col-sm-8 hidden-lg hidden-md hidden-xs bluefilledap">
                        <a href="#" class="bodylink">Application Process</a>
                    </div>
                    <div class="col-sm-2 hidden-lg hidden-md hidden-xs bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Find the backstage passes for Colored Cow here.
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-xs col-sm-4 smspace2">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsspace">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsbox">
                <div class="row-fluid">
                    <div class="col-xs-2 hidden-lg hidden-md hidden-sm bluespace">

                    </div>
                    <div class="col-xs-8 hidden-lg hidden-md hidden-sm bluefilled">
                        <a href="#" class="bodylink">Roles</a>
                    </div>
                    <div class="col-xs-2 hidden-lg hidden-md hidden-sm bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Become an actor of change. Browse positions by title.
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsspace">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-12 smmidspace">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsspace">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsbox">
                <div class="row-fluid">
                    <div class="col-xs-2 hidden-lg hidden-md hidden-sm bluespace">

                    </div>
                    <div class="col-xs-8 hidden-lg hidden-md hidden-sm bluefilledap">
                        <a href="#" class="bodylink">Application Process</a>
                    </div>
                    <div class="col-xs-2 hidden-lg hidden-md hidden-sm bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Find the backstage passes for Colored Cow here.
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsspace">
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-12 smmidspace"></div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsspace"></div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsbox">
                <div class="row-fluid">
                    <div class="col-xs-2 hidden-lg hidden-md hidden-sm bluespace">

                    </div>
                    <div class="col-xs-8 hidden-lg hidden-md hidden-sm bluefilled">
                        <a href="<?php cc_root_path();?>/graduates" class="bodylink">Graduates</a>
                    </div>
                    <div class="col-xs-2 hidden-lg hidden-md hidden-sm bluespace">
                    </div>
                </div>
                <div class="boxtext">
                    Follow your heart here.
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-4 xsspace"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
            </div>
        </div>




        <div class="row-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
                <div class="row-fluid">
                    <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs fheading">
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 fheading">
                        Colored Cow
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs fheading">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8 ftext">
                        <div>
                            We are a tribe of charged individuals who care about technology and people. We are powered by our thoughts and our values.
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 fspace">
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="<?php cc_root_path();?>/about" class="fmenutext"> About</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="#" class="fmenutext"> Services</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="#" class="fmenutext"> Education</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="#" class="fmenutext"> Blog</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="#" class="fmenutext"> Career</a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 fmenu">
                        <a href="<?php cc_root_path();?>/contact" class="fmenutext"> Contact</a>
                    </div>
                </div>


            </div>
        </div>



    </div>

</body>

</html>
