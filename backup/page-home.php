<?php get_header();

?>


        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background">
                         <div class="row blue-bg logo-padding flex-center">
            <div class="col-xs-1 col-sm-1 remove-padding">
               <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" class="img-responsive logo">
                  </a>
                   </div>
            <div class="col-xs-3 col-sm-2 remove-padding ">
               <a href="<?php echo home_url( '/' ); ?>">
                <p class="logo-text oswald-light">coloredcow</p>
                </a>
            </div>
        </div>
                    <div class="row">
                    <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                       <div class="navbar navbar-default navbar-fixed-top" style="background-color:#1083CE;border:#1083CE;">
 <div class="navbar-header"><a class="navbar-brand homelink" href="<?php echo home_url( '/' ); ?>">coloredcow</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav mobile-list">
        <li><a href="<?php echo home_url( '/' ); ?>about" >About</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>services" >Services</a></li>
        <li><a href="#">Education</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>blog">Blog</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>career">Career</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>contact">Contact</a></li>
        <li><a href="<?php echo home_url( '/' ); ?>library">Library</a></li>
      </ul>
    </div>
</div>
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
                                <a href="<?php echo home_url( '/' ); ?>about" class="headertext">  <center><p id="aboutlist" style="font-size:15px;">About</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' );?>service" class="headertext">  <center><p id="servicelist" style="font-size:15px;">Service</p> </center>                                 </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="#" class="headertext">  <center><p id="edulist" style="font-size:15px;">Education</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' );?>blog" class="headertext">  <center><p id="bloglist" style="font-size:15px;">Blog</p> </center> </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" onmouseover="myFunction1()" onmouseout="myFunction2()">
                                <a href="<?php echo home_url( '/' ); ?>career" class="headertext">  <center><p id="careerlist" style="font-size:15px;">Career</p> </center>                                     </a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs menuname" >
                                <a href="<?php echo home_url( '/' ); ?>contact" class="headertext">  <center><p id="contactlist" style="font-size:15px;">Contact</p> </center>                                     </a>
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
                                   <h1 class="text-center univers-ultracn">Giving your product and software the right<br> service is no longer a hassel</h1>
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
            <div class="col-sm-12">
                <h2 class="text-center oswald-medium">Benefits for you</h2>
            </div>
        </div>

        <div class="row top-margin">
            <div class="col-xs-1">

            </div>
            <div class="col-xs-2 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/horse-icon.png" class="img-responsive benefit-icon">
                <p2 class="text-center univers-cn">Stand Out</p2>
            </div>
            <div class="col-xs-2 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/customer-icon.png" class="img-responsive benefit-icon">
                <p2 class="text-center univers-cn">Win Customers</p2>
            </div>
            <div class="col-xs-2 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/learn-icon.png" class="img-responsive benefit-icon">
                <p2 class="text-center univers-cn">Learn</p2>
            </div>
            <div class="col-xs-2 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/impact-icon.png" class="img-responsive benefit-icon">
                <p2 class="text-center univers-cn">Make Impact</p2>
            </div>
            <div class="col-xs-2 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/innovate-icon.png" class="img-responsive benefit-icon">
                <p2 class="text-center univers-cn">Innovate</p2>
            </div>
        </div>

        <div class="row row-grey flex-center">
            <div class="col-xs-3 col-sm-4 no-padding-xxs">
                <h3 class="text-center univers-cn">Stand Out</h3>
            </div>
            <div class="col-xs-1">

            </div>
            <div class="col-xs-2 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/horse-icon-large.png" class="img-responsive icon-large">
            </div>
            <div class="col-xs-1">

            </div>
            <div class="col-xs-5 col-sm-4 no-padding-xxs">
                <p class="univers-light font-grey">Differentiate your business with custom softwares and applications that suit your organizational needs.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 no-padding-xxs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/loop.svg" class="img-responsive loop">
            </div>
        </div>

         <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mmnproduct">
                     <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center oswald-medium">We build our own products and also for our clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center univers-lightcn letter-space font-grey">Here's our world changing product</p>
            </div>
        </div>
                    <div class="row">
                                <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
                        <div class="col-sm-7 col-md-6 col-lg-5 mmntitle ">
                            ManageMyNGO
                        </div>
                    </div>
                             <div class="row">
                                <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
                        <div class="col-xs-10 col-sm-7 col-md-6 col-lg-5">
                            <div class="mmntext2 univers-cn">  We help NGOs help our society, efficiently.<br></div>
                            <div class="mmntext univers-lightcn font-grey">MMN provides NGOs a platform to manage their activites so they
                        can focus on the ones that are important. It is our effort to make
                        them feel backed by technology and to reduce the gap between
                        NGOs and corporates.
                            </div>
                        </div>
                    </div>

                                        <div class="row">
                                <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
                        <div class="col-sm-7 col-md-6 col-lg-5 more">
                           <a href="http://managemyngo.com/" target="_blank" class="learn futura-book">
                               Learn More</a>
                        </div>
                    </div>
                </div>
            </div>

        <!-- case study
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center oswald-medium">We made that</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <p class="text-center univers-lightcn letter-space font-grey">case study - the 'how' of our work</p>
            </div>
        </div>
-->




                <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 boxtop"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 grey">
                            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ot grey" style="padding-bottom:2px;">Our Thoughts</div>
                            </div>
                                      <div class="row">
                                           <?php
$lastBlog = new WP_Query('type=post&posts_per_page=3&cat=-12');
if($lastBlog->have_posts()):
while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>

         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="row">
                 <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
                 <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10 btitled">
                 <?php the_title( sprintf('<p class="entry-title"><a href="%s" class="btitle">', esc_url(get_permalink() ) ),'</a></p>' ); ?></div>
                 <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
                                                                 </div>
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
            <div class="col-xs-12">
                <div class="row flex-center extra-margin">
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                <h4 class="oswald-medium">We have something for you, free!</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                <p class="univers-lightcn font-grey">find a set of dozen icons you can use in your designs along with out latest thoughts in your mailbox</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                                <p class="univers-ultracnob subscript">we’d be damned if we ever spammed you</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="row">
                            <div class="col-xs-8 col-md-offset-3 col-lg-offset-3">
                                <?php echo Caldera_Forms::render_form('CF565a88bb46263'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                   <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottomspace">
              </div>
          </div>





<?php get_footer();?>
