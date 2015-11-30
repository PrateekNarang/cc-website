<?php get_header(); 

?>
        

        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-2 hidden-xs">
                            <a href="<?php echo home_url( '/' ); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" height="65px" width="85px" style="padding-top:10px; padding-left:9px;"></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
                            <p class="homename"> <a href="<?php echo home_url( '/' ); ?>" class="homelink">coloredcow</a></p>
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
                               <li><a href="<?php echo home_url( '/' ); ?>">Home</a></li>
                                 <li><a href="#">About</a></li>
                        <li><a href="<?php echo home_url( '/' ); ?>service">Service</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="<?php echo home_url( '/' ); ?>blog">Blog</a></li>
                            <li><a href="<?php echo home_url( '/' ); ?>career">Career</a></li>
                            <li><a href="<?php echo home_url( '/' ); ?>contact">Contact</a></li>
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
                    <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/about/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" > 
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/about.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>service">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/about/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" > 
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/service.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/about/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" > 
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/edu.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>blog">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/about/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" > 
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/blog.png" height="55px" width="85px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php echo home_url( '/' ); ?>career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/about/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" > 
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/career.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>contact">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" > 
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    </div>
                    <div class="row" >                    
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="aboutlist" style="padding-left:0px;">About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>service" class="headertext">  <center><p id="servicelist">Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist" style="padding-left:10px;">Education</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>blog" class="headertext">  <center><p id="bloglist" >Blog</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <a href="<?php echo home_url( '/' ); ?>career" class="headertext">  <center><p id="careerlist" >Career</p> </center>                                     </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>contact" class="headertext">  <center><p id="contactlist" >Contact</p> </center>                                     </a>
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
                                    <center><a href="<?php echo home_url( '/' ); ?>graduates" class="headertext">Graduates</a></center>
                                </div>

                            </div>
                        </div>
                    </div>
             </div>

                             
                             
                             
                             
                             
                              <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 empty">
                                  <p class="signaturetext">Technology chose us.</p>
                                  </div>
                                  </div>
                                                      <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-6">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6 cycle" id="cycle" >
                            <img src="<?php echo get_template_directory_uri(); ?>/images/about/cycle.png"  />
                        </div>


                    </div>
                              <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="grass">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="grass">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs" id="grass">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs" id="grass">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grass.png" class="grass" />
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
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding-right:0px; padding-left:0px;">
                    <hr class="about">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-6" style="padding-left:0px;">
                    <div class="ac">   ABOUT COLOREDCOW</div>
                            </div>
  </div>
               <div class="row">
               <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                      <center>  <div class="abwheel">
                          </div></center>
                          <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bwheel" style="color:#0071bc;">innovation</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>                                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bwheel" style="color:#603813;">creativity</div>
                   </div>
                                             <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bwheel" style="color:#000;">simplicity</div>                                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                   </div>
                                             <div class="row">
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bwheel" style="color:#ed1e79;">empathy</div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>                                                                                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bwheel" style="color:#808080;">motivation</div>
                   </div>
                   </div>
                   <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                   <div class="abtext">
                   Coloredcow is a web-solution company;  we solve business problems through technology. We center the solutions around our                         clients and the people their business affects. 
                    Our software products and services grow business when we make connection at the heart by making empathy the main                                 element. We believe in providing long lasting solutions that we can share as success stories.
                    A colored cow would always stand out from the crowd; we do justice to our name by reflecting the same in our thoughts and in                     the way we work. 
                    <br><br>
                    We're able to do all that by listening closely; our ears are ever bent towards our clients.
                       </div></div>
            </div>
                   <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxtop"></div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 vision" style="background: #e6e6e6">
               

                    <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3"></div>
                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 visionheader">
                    VISION
                        </div></div>
                        <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="visiontext">
                    Everything we do, we believe in reducing the waste in problem solving. We believe in connecting with our clients through empathy. We add purpose and meaning to what we do. The way we reduce waste is by providing exact solutions. We do not just build websites, we solve problems. We solve it with the use of  design and technology that is beautiful and easy to use.
                </div>
                    </div>
                    </div>
                    
                  
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxbot"></div>
            </div>
                          <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>
                  
                  
                                          <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5" style="padding-right:0px; text-align:right;">
                    <div class="ac" style="margin-bottom:0px;">   ABOUT THE LOGO</div>
                            </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="padding-left:0px; padding-right:0;">
                    <hr class="about">
                </div>
  </div>
                   <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aboutlogo">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 aboutlogotext">
                        Our logo signifies simplicity and universality. 
This symbol demonstrates our ability to craft creative end to end solutions.
                    </div>

                </div>
            </div>
            </div>
                                  <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottomspace">
              </div>
          </div>             
 <?php get_footer();?>
