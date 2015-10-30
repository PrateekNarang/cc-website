<?php get_header(); 

?>
<title>ColoredCow</title>
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
                    <a href="<?php echo home_url( '/' ); ?>about">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" > 
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/about.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' );?>service">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" > 
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/service.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" > 
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/edu.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>blog">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" > 
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog.png" height="55px" width="85px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php echo home_url( '/' ); ?>career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" > 
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/career.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>contact">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/home/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" > 
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/contact.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                </div>
                    <div class="row" >                    
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>about" class="headertext">  <center><p id="aboutlist" >About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' );?>service" class="headertext">  <center><p id="servicelist" >Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist" >Education</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' );?>blog" class="headertext">  <center><p id="bloglist" >Blog</p> </center> </a>
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
                                    <center><a href="<?php echo home_url( '/' );?>graduates" class="headertext">Graduates</a></center>
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
                    <a href="<?php echo home_url( '/' ); ?>career" class="shoot">Ready to shoot to the stars?</a>
                </div>
                <div class="colw-lg-3 col-md-3 col-sm-3 col-xs-3 starside">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
 
            </div>           
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-top:solid 2px #ccc; border-bottom:solid 2px #ccc;">
                   <center> <div class="symbol">

                       </div></center>
                </div>
            </div>
                                    <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle"> </div>
            </div>    
    
                       
            
                        <div class="row-fluid">
                <div class="colw-lg-1 col-md-1 col-sm-1 col-xs-1 expandside">
                </div>
                <div class="col-lg-10 col-ms-10 col-sm-10 col-xs-10 expandlow">
                    We build our own products and also for our clients.
                </div>
                <div class="colw-lg-1 col-md-1 col-sm-1 col-xs-1 expandside">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mid">
                </div>
            </div>
                                    <div class="row-fluid">
                <div class="colw-lg-1 col-md-1 col-sm-1 col-xs-1 expandside">
                </div>
                <div class="col-lg-10 col-ms-10 col-sm-10 col-xs-10 expandlower">
                    Here&#8217;s our world changing product.
                     
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 expandside">
                </div>
            </div>
                                  
                                               <div class="row">
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                 <hr style="border-top: 2px solid #ccc;">
                 </div>
            </div>   
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mmnproduct">
                    <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mmntitle">
                            ManageMyNGO
                        </div>
                    </div>
                             <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <div class="mmntext2">  We help NGOs help our society, efficiently.<br></div>
                            <div class="mmntext">MMN provides NGOs a platform to manage their activites so they 
                        can focus on the ones that are important. It is our effort to make 
                        them feel backed by technology and to reduce the gap between 
                        NGOs and corporates.
                            </div>
                        </div>
                    </div>
                    
                                        <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 more">
                           <a href="http://managemyngo.com/" target="_blank" class="learn">
                               Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            

                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxtop"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 grey">
                            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ot grey" style="padding-bottom:2px;">Our Thoughts</div>
                            </div>
                                      <div class="row">
                                           <?php
$lastBlog = new WP_Query('type=post&posts_per_page=3&cat=-17');
if($lastBlog->have_posts()):
while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>

         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="row">
                 <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
                 <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10 btitled">
                 <?php the_title( sprintf('<p class="entry-title"><a href="%s" class="btitle">', esc_url(get_permalink() ) ),'</a></p>' ); ?></div>
                 <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div></div>
                                                                  <div class="row">
                                                                   <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 auth"><?php the_author(); ?></div>
                                                   <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
             </div>
             
         </div>

<?php


endwhile;
endif;
?>
                                                        
                                                                     
                                                                                               
                                        </div>
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <center><a href="<?php echo home_url( '/' ); ?>blog"> <button class="but">Show More</button></a></center>
                                </div>
                           </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxbot"></div>
            </div>                  
                                               
                                   <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottomspace">
              </div>
          </div>             
          



      

<?php get_footer();?>