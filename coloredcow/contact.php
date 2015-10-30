<?php
/*
Template Name:contact
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
        <title>Contact</title>
        <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/contactnew.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/contact.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo "$wp_path";?>/images/logo.png">
    </head>

    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo "$wp_path";?>/js/bootstrap.min.js"></script>
          <script  src="<?php echo "$wp_path";?>/js/new.js" type="text/javascript" language="javascript"></script>
                           <script type="text/javascript" language="javascript">
             $(document).ready(function(){
            var innerwidth = $(".tit").innerWidth();
                  $(".cdform").css("width", innerwidth);
             });
                                            $(window).resize(function(){
            var innerwidth = $(".tit").innerWidth();
                  $(".cdform").css("width", innerwidth);
             });

      </script>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-2 hidden-xs">
                            <a href="<?php cc_home_path();?>"> <img src="<?php echo "$wp_path";?>/images/logo.png" height="65px" width="85px" style="padding-top:10px; padding-left:9px;"></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5">
                            <p class="homename"> <a href="<?php cc_home_path();?>" class="homelink">coloredcow</a></p>
                        </div>
                        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs">

                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                        <img src="<?php echo "$wp_path";?>/images/contact/star.png" height="80px" width="100px" style="padding-left:10px;">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-1">

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
                               <li><a href="<?php cc_root_path();?>">Home</a></li>
                                 <li><a href="<?php cc_root_path();?>/about">About</a></li>
                        <li><a href="<?php cc_root_path();?>/service">Service</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="<?php cc_root_path();?>/blog">Blog</a></li>
                            <li><a href="<?php cc_root_path();?>/career">Career</a></li>
                            <li><a href="#">Contact</a></li>
                          </ul>
                            </div>
                            </div>
    
</div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        </div>
                    </div>
                <div class="row-fluid">
                   <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/about">
                     <img src="<?php echo "$wp_path";?>/images/contact/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" > 
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/contact/about.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/service">
                     <img src="<?php echo "$wp_path";?>/images/contact/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" > 
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/contact/service.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo "$wp_path";?>/images/contact/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" > 
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/contact/edu.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/blog">
                     <img src="<?php echo "$wp_path";?>/images/contact/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" > 
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/contact/blog.png" height="55px" width="85px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php cc_root_path();?>/career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo "$wp_path";?>/images/contact/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" > 
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo "$wp_path";?>/images/contact/career.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo "$wp_path";?>/images/contact/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" > 
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/contact/contact.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                </div>
                    <div class="row" >                    
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/about" class="headertext">  <center><p id="aboutlist" >About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/service" class="headertext">  <center><p id="servicelist" >Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist" >Education</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php cc_root_path();?>/blog" class="headertext">  <center><p id="bloglist" >Blog</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <a href="<?php cc_root_path();?>/career" class="headertext">  <center><p id="careerlist" >Career</p> </center>                                     </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="contactlist" >Contact</p> </center>                                     </a>
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
                                  <p class="signaturetext">We are here for you.<br>Finding us is easy.</p>
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
                            <img src="<?php echo "$wp_path";?>/images/contact/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/contact/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/contact/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/contact/grass.png" class="grass" />
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ara">
                    Our office lies at the foot of the Aravalis in Gurgaon. We are backed by a beautiful scenery.<br>Check us out...
                </div>
            </div>
       
       
                       
                                    
                                                              <div class="row">
                                                                  <div class="col-lg-1 col-md-1 col-sm-1 hidded-xs"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 map">  
                                       <div class="row">
                                           <div class="hidden-lg hidden-md hidden-sm col-xs-1"></div>   
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">         
                                        <?php 
                                            echo do_shortcode('[wpgmza id="1"]');
                                               ?></div>
                                           <div class="hidden-lg hidden-md hidden-sm col-xs-1"></div>
                                           </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidded-xs"></div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                            <div class="row-fluid">
                         <div class="hidden-lg hidden-md hidden-sm col-xs-1"></div> 
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10">
                            <div class="gur">GURGAON</div>
                            <div class="sec">
                            G-747, SECTOR 54 <br>
                            SUNCITY<br>
                            GURGAON<br>
                            INDIA<br>
                            </div>
                            <div class="pra">prateek.narang@coloredcow.in</div>
                            </div>
                           <div class="hidden-lg hidden-md hidden-sm col-xs-1"></div> 
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-1 col-sm-1 hidded-xs"></div>
            </div>
             
             
 
              <div class="row">
              <div class="col-lg-1 col-md-1 col-sm-1 hidded-xs"></div>
               <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titspace">
                            <span class="underline"><span class="tit">
                           Can we help you win a bigger feat?
                                </span></span>
                                </div>      
                   </div>
                      <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 we space">
                                <div class="cdform"> We would love to work with you. Please provide a few details and we'll get back to you soon.</div>
                                </div>
                   </div>
                      <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 space">
                             <div class="cdform">
                              <?php //echo Caldera_Forms::render_form('CF55bda1e099dac'); ?>
                           <?php echo Caldera_Forms::render_form('CF55c069e11d8a6'); ?>
                                </div></div>
                   </div>
                   
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidded-xs"></div>
             <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
                                   <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titspace">
                            <span class="underline"><span class="tit">
             Interested in our product?
                                </span></span>
                                       </div>
                                       <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                 </div>
                                   <div class="row">           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mmn">
                                <a href="http://managemyngo.com" target="_blank" class="mmnl">ManageMyNGO</a>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                   </div>
                      <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 we">
                                Click here or Visit the website <br>
                                www.managemyngo.com
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                   </div>
                     <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titspace">
                               <span class="underline"><span class="tit">
                                Work with coloredcow
                               <span class="underline"><span class="tit">
                                </div>
                   </div>
                                                     <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="<?php cc_root_path();?>/career"> <button class="but">JOIN US</button></a>
                                </div>
                   </div>
            </div>
                                </div>
                                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>
                    

        </div><?php wp_footer();
 ?>
         </body>
</html>
<?php require 'footer.php'; 
                    ?>