<?php
/**
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
        <title>ColoredCow</title>
        <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/homenew.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/home.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo "$wp_path";?>/images/home/logo.png">
    </head>

    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo "$wp_path";?>/js/bootstrap.min.js"></script>
          <script  src="<?php echo "$wp_path";?>/js/new.js" type="text/javascript" language="javascript"></script>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-2 hidden-xs">
                            <a href="#"> <img src="<?php echo "$wp_path";?>/images/home/logo.png" height="65px" width="60px" style="padding-top:10px; padding-left:9px;"></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
                            <p class="homename"> <a href="#" class="homelink">ColoredCow</a></p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2">
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-3">
<div class="row" style="padding-top: 10px; padding-right: 5px;">
                       <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                        <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Menu
                        <span class="caret"></span>
                  </button>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                               <li><a href="#">Home</a></li>
                                 <li><a href="<?php cc_root_path();?>/about">About</a></li>
                        <li><a href="<?php cc_root_path();?>/service">Service</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="<?php cc_root_path();?>/blog">Blog</a></li>
                            <li><a href="<?php cc_root_path();?>/career">Career</a></li>
                            <li><a href="<?php cc_root_path();?>/contact">Contact</a></li>
                          </ul>
                            </div>
                            </div>

</div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/about">
                     <img src="<?php echo "$wp_path";?>/images/home/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" >
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/home/about.png" height="55px" width="65px">
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/service">
                     <img src="<?php echo "$wp_path";?>/images/home/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" >
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/home/service.png" height="55px" width="65px">
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo "$wp_path";?>/images/home/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" >
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/home/edu.png" height="55px" width="65px">
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/blog">
                     <img src="<?php echo "$wp_path";?>/images/home/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" >
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/home/blog.png" height="55px" width="85px">
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php cc_root_path();?>/career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo "$wp_path";?>/images/home/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" >
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo "$wp_path";?>/images/home/career.png" height="55px" width="45px">
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/contact">
                     <img src="<?php echo "$wp_path";?>/images/home/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" >
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/home/contact.png" height="55px" width="45px">
                       </div>
                        </a>
                    </div>
                    <div class="row" >
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/about" class="headertext">  <center><p id="aboutlist" style="padding-left:20px;">About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/service" class="headertext">  <center><p id="servicelist" style="padding-left:20px;">Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist" style="padding-left:10px;">Education</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/blog" class="headertext">  <center><p id="bloglist" style="padding-right:5px;">Blog</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <a href="<?php cc_root_path();?>/career" class="headertext">  <center><p id="careerlist" style="padding-right:11px;">Career</p> </center>                                     </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/contact" class="headertext">  <center><p id="contactlist" style="padding-right:33px;">Contact</p> </center>                                     </a>
                            </div>
                    </div>

                                        <div class="row" style="background: transparent;position: absolute;z-index: 300;width: 100%;">
                        <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                            <div class="row" id="abc" style="display:block;" >
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tri">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tri">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tri">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tri">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tri" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                    <div id="triangle-down" class="dropdown" style="display:none;">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 tri">
                                </div>


                            </div>
                            <div class="row" id="optional" style="display:none;" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 submenuname">
                                    <center><a href="#" class="headertext">Roles</a></center>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 submenuname">
                                    <center> <a href="#" class="headertext">Application Process</a></center>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 submenuname">
                                    <center><a href="<?php cc_root_path();?>/graduates" class="headertext">Graduates</a></center>
                                </div>

                            </div>
                        </div>
                    </div>






                            </div>

                              <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 empty">
                                  <p class="signaturetext">We're on a mission to find great developers
                                <br>who love to solve daring problems</p>
                                  </div>
                                  </div>
                                                      <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6 cycle" id="cycle" >

                        </div>


                    </div>
                              <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/home/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/home/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/home/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/home/grass.png" class="grass" />
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>




            <div class="row-fluid">
                <div class="colw-lg-1 col-md-1 col-sm-1 col-xs-1 expandside">
                </div>
                <div class="col-lg-10 col-ms-10 col-sm-10 col-xs-10 expand">
                    We're expanding, join our universe.
                </div>
                <div class="colw-lg-1 col-md-1 col-sm-1 col-xs-1 expandside">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mid">
                </div>
            </div>
            <div class="row-fluid">
                <div class="colw-lg-3 col-md-3 col-sm-3 col-xs-3 starside">
                </div>
                <div class="col-lg-6 col-ms-6 col-sm-6 col-xs-6 star">
                    <a href="<?php cc_root_path();?>/career" class="shoot">Ready to shoot to the stars?</a>
                </div>
                <div class="colw-lg-3 col-md-3 col-sm-3 col-xs-3 starside">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterstar">
                </div>
            </div>
            <div class="row-fluid">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 productside">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 product">
                    <div class="row-fluid">
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2 productheadside">
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8 producthead">
                            OUR PRODUCT
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-2 productheadside">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        </div>
                    </div>
                    <div class="mmn">
                        MMN is our effort to use technology to reduce the gap between NGOs and corporates.
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 buttonpad">
                           <a href="http://managemyngo.com/" target="_blank">
                               <center><button type="button" id="checkoutbutton">Interesting</button></center></a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                        </div>
                    </div>



                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 productside">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterstar">
                </div>
            </div>

        </div>
    </body>

    </html>

    <?php require 'footer.php'; 
                    ?>
