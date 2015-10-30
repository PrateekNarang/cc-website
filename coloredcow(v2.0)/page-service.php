<?php get_header(); 

?>
<title>Services</title>
    </head>

    <body <?php body_class(); ?>>
        

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
                                 <li><a href="<?php echo home_url( '/' ); ?>about">About</a></li>
                        <li><a href="#">Service</a></li>
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
                    <a href="<?php echo home_url( '/' ); ?>about">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" > 
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service/about.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" > 
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service/service.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" > 
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service/edu.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>blog">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" > 
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service/blog.png" height="55px" width="85px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php echo home_url( '/' ); ?>career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" > 
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service/career.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>contact">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/service/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" > 
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/service/contact.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                </div>
                    <div class="row" >                    
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>about" class="headertext">  <center><p id="aboutlist">About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="servicelist" >Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist">Education</p> </center> </a>
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
                                  <p class="signaturetext">Ideas should be treated with wisdom<br>and delivered in delight.</p>
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
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-left:0px;"><hr class="sideline">
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
             </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
              <div class="deliveries">DELIVERIES</div>
             </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
             </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0px;"><hr class="sideline">
             </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxtop"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 deltext">
                        Our service isn&#8217;t an exchange of documents, 
                            it is a platform to create stories. <br>We will become your 
                            extension and then fix the challenges that stop you  
                            from growing bigger and getting ahead.
                                <br>We use technology to leverage your business to achieve big wins.
                                <br>We put all our experience and new learning into the solution 
                                we create for you.
                    </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxbot"></div>
          </div>    
                        <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
              </div>
          </div>           
         <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-left:0px;"><hr class="sideline">
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
             </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
              <div class="deliveries">PRODUCTS</div>
             </div>
              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-1">
             </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0px;"><hr class="sideline">
             </div>
          </div>
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxtop"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 protext">
                Execution is the breath of a product. <br>
                Our smart team will help you develop your idea 
                and build it to your vision. <br>We will discover your product 
                and use the best practices to ship it from our lab to the market.
                    </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxbot"></div>
          </div> 
                                  <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
              </div>
          </div>  
                                 <div class="row-fluid">
                                     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                         <div class="titletext">Nucleation</div>
                                         <div class="basetext2">Our approach begins at 
the nucleus. We discover 
opportunities from the 
core to address your 
critical problems. </div>
                                     </div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                         <div class="titletext">Exploration</div>
                                         <div class="basetext2">We take a divergent 
approach to exploring 
the possibilities. Our 
off-centric thinking 
helps us cover all 
grounds based on 
the problem definition.</div>
                                     </div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                     <div class="titletext">Compelling answer</div>
                                         <div class="basetext2">New world problems need 
new world solutions. 
It should move the 
stakeholders into paying 
attention.</div></div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                     <div class="titletext">Prototype</div>
                                         <div class="basetext2">
The secret to making the 
solution work is to test it 
on the go. We rely on data 
for om user testing to 
show us the right way. 
It helps us understand 
the customer's reaction 
to a new artifact.</div></div>
                                     <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <div class="titletext">Delivery</div>
                                         <div class="basetext2">We will make sure that in 
the end your goals are met 
or that the foundation is 
strong enough to adapt 
to your needs.</div></div>
                                     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
            </div>
                                  
                                   
                                    
                                      <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottomspace">
              </div>
          </div>             
          

         

<?php get_footer();?>