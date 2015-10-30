<?php get_header(); ?>
   <title>Blog</title>
    </head>
<body>



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
                        <li><a href="#">Blog</a></li>
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
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" > 
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/about.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>service">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" > 
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/service.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" > 
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/edu.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>blog">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" > 
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog.png" height="55px" width="85px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php echo home_url( '/' ); ?>career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" > 
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/career.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php echo home_url( '/' ); ?>contact">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/blog/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" > 
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/contact.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                </div>
                    <div class="row" >                    
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>about" class="headertext">  <center><p id="aboutlist" >About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>service" class="headertext">  <center><p id="servicelist" >Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist" >Education</p> </center> </a>
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
                                  <p class="signaturetext">Know More.<br>Word.</p>
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
                       <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">
                                    <div class="row-fluid">
                                       <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs">
                                          
                                               <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs jobtop" >
                                              Books we are reading
                                          </div>
                                           </div>
                                              <div class="row">   
                  <?php  
                        $lastBlog = new WP_Query('type=post&posts_per_page=5&category_name=books');
                         if($lastBlog->have_posts()):
                        while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>

                                    <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs joblow" style="padding:0px;">
                                     <center><?php the_title(); ?>
                                         </center>
                                    </div>
                             <?php endwhile;
		              endif;
                        ?>  
            </div>      
                                          <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs joblink">
                                                  <a href="<?php echo home_url( '/' ); ?>library" class="jobs">why we want you<br>to see the full list</a>
                                          </div>
                                           </div>
                                          <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs" style="height:50px;">
                                                
                                          </div>
                                           </div>
                                          
                                          <div class="row">
                                          <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs jobtop" >
                                              If you are looking for<br>more than a job
                                          </div>
                                           </div>
                                              <div class="row">
                                              <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                                              <div class="col-lg-10 col-md-10 col-sm-10 hidden-xs batman" >
                                          </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                                           </div>
                                                  <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs joblow">
                                              There are other ways<br>to be batman
                                          </div>
                                           </div>
                                          <div class="row">
                                              <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs joblink">
                                                  <a href="<?php echo home_url( '/' ); ?>career" class="jobs">find out</a>
                                          </div>
                                           </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10">
                                                                          <?php  $j=0;
                                    query_posts($query_string . '&cat=-17');
									if (have_posts()):
									while ( have_posts() ): the_post(); 

?>
                                        <div class="row">
                                       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <div class="bgtext" style="background:<?php
                                                 if($j==0):
                                                 echo "#f66c3d";
                                                 elseif($j==1):
                                                 echo "#828f96";
                                                 elseif($j==2):
                                                 echo "#5581e3";
                                                 elseif($j==3):
                                                 echo "#96ca4c";
                                                endif;
                                                 ?>;"> <?php  the_title();?>
                                         </div>
                                         <div class="bgtext2" style="background:
                                         <?php
                                                  if($j==0):
                                                 echo "#f66c3d";
                                                 elseif($j==1):
                                                 echo "#828f96";
                                                 elseif($j==2):
                                                 echo "#5581e3";
                                                 elseif($j==3):
                                                 echo "#96ca4c";
                                                endif;
                                                 ?>;"> <?php  the_author();?>
                                                     </div>
                                        </div>
                                        </div>
                                        <br>
                                                                        <div class="row">
                                       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                        <div class="blogtext">
                                    <?php the_excerpt();?>
                                        </div>
                                      </div>
                                        </div>
                                  <div class="row">
                                       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">       
                               <a href="<?php the_permalink(); ?>" class="bgtextl" style="color:<?php
                                                 if($j==0):
                                                 echo "#f66c3d";
                                                 $j+=1;
                                                 elseif($j==1):
                                                 echo "#828f96";
                                                 $j+=1;
                                                 elseif($j==2):
                                                 echo "#5581e3";
                                                 $j+=1;
                                                 elseif($j==3):
                                                 echo "#96ca4c";
                                                 $j=0;
                                                endif;
                                                 ?>;font-weight: 700;">read more</a>
                             <hr class="sep">            
                                                          </div>
                                        </div>
                                                       <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blankss">
                            </div>
                        </div>   
         
                                   
       <?php endwhile;
		endif;
    ?> 
                                       
                                   
                                   
                                   
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    </div>
                        </div>
                </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterbg">
                
                </div>
            </div>
    
<?php get_footer();?>