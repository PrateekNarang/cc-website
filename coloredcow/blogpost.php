<?php
/*
Template Name:blogpost
 */
$name=$_GET["id"];
$examplePost = get_post($name);
//echo $examplePost->post_content;
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
        <title><?php echo $examplePost->post_title;?></title>
        <link href="<?php echo "$wp_path";?>/css/bootstrap.min.css" rel="stylesheet">
          <link href="<?php echo "$wp_path";?>/css/blogpostnew.css" rel="stylesheet">
        <link href="<?php echo "$wp_path";?>/css/blogpost.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo "$wp_path";?>/images/logo.png">
    </head>

    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?php echo "$wp_path";?>/js/bootstrap.min.js"></script>
                <script type="text/javascript" language="javascript">
             $(document).ready(function(){
    $(".outer").each(function() {
            var innerheight = $(".inner").height();   
          //alert(innerheight);
             var outerheight = $(".outer").height();
           //alert(outerheight);
             var topspace=(outerheight-innerheight)/2.0;
           
       // alert(topspace);
             $(".inner").css("padding", topspace);
             
         });
             });
       
      </script>
               <script  src="<?php echo "$wp_path";?>/js/new.js" type="text/javascript" language="javascript"></script>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 background">
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-2 hidden-xs">
                            <a href="<?php cc_home_path();?>"> <img src="<?php echo "$wp_path";?>/images/logo.png" height="65px" width="85px" style="padding-top:10px; padding-left:9px;"></a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
                            <p class="homename"> <a href="<?php cc_home_path();?>" class="homelink">coloredcow</a></p>
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
                               <li><a href="<?php cc_root_path();?>">Home</a></li>
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
                <div class="row-fluid">
                   <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/about">
                     <img src="<?php echo "$wp_path";?>/images/blog/about_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="about" > 
                       <div id="about" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/blog/about.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/service">
                     <img src="<?php echo "$wp_path";?>/images/blog/service_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="service" > 
                       <div id="service" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/blog/service.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="#">
                     <img src="<?php echo "$wp_path";?>/images/blog/edu_black.png" height="55px" width="65px"                                                       style="position: absolute; top:7px; " class="edu" > 
                       <div id="edu" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/blog/edu.png" height="55px" width="65px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/blog">
                     <img src="<?php echo "$wp_path";?>/images/blog/blog_black.png" height="55px" width="85px"                                                       style="position: absolute; top:7px; " class="blog" > 
                       <div id="blog" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/blog/blog.png" height="55px" width="85px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header" >
                    <a href="<?php cc_root_path();?>/career" onmouseover="myFunction1()" onmouseout="myFunction2()">
                     <img src="<?php echo "$wp_path";?>/images/blog/career_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="career" > 
                       <div id="career" style="position: absolute; top:7px; " >
                        <img src="<?php echo "$wp_path";?>/images/blog/career.png" height="55px" width="45px">     
                       </div>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs header">
                    <a href="<?php cc_root_path();?>/contact">
                     <img src="<?php echo "$wp_path";?>/images/blog/contact_black.png" height="55px" width="45px"                                                       style="position: absolute; top:7px; " class="contact" > 
                       <div id="contact" style="position: absolute; top:7px; ">
                        <img src="<?php echo "$wp_path";?>/images/blog/contact.png" height="55px" width="45px">     
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
                                <a href="<?php cc_root_path();?>/contact" class="headertext">  <center><p id="contactlist" >Contact</p> </center>                                     </a>
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
                            <img src="<?php echo "$wp_path";?>/images/blog/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/blog/grass.png"  class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 hidden-xs" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/blog/grass.png" class="grass" />
                        </div>
                        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs" id="grass">
                            <img src="<?php echo "$wp_path";?>/images/blog/grass.png" class="grass" />
                                  </div>
                                  </div>
            </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 afterlowertriangle">
                </div>
            </div>
   
   
   
   
   
   

         
           
           
           
           
           
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs alr">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 also">
                            Also Read
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs arr">

                            <img src="<?php echo "$wp_path";?>/images/blog/arrow.png" class="arrowleft img-responsive" />

                        </div>
                    </div>
                    <div class="row">
                    </div>
                        
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs other">

                    <div class="row">
                       <?php
$args = array(
        'posts_per_page'   => '-1',
        'offset'           => '',
        'category'         => '',
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true 
    );
    $sposts = get_posts( $args ); 
                         for ($i = 0; $i<4;$i++){
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogpad">
                          <a href="<?php cc_root_path();?>/blogpost/?id=<?php  echo apply_filters('ID', $sposts[$i]->ID);?>" class="bloglist"><?php  echo apply_filters('the_title', $sposts[$i]->post_title);?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>

       </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

               
               
               
   <div class="row">    
      <div class="col-xs-1">
       </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10  bgt">
                                        <div class="bgtext inner"><?php echo $examplePost->post_title;?></div>
                        </div>

            </div>  
                                <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <div class="blogtext">
                            <br>
                            <?php echo apply_filters('the_content', $examplePost->post_content);
                                ?>
                            </div>
                            <div class="blankspace">
                            </div>
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <img src="<?php echo "$wp_path";?>/images/blog/user.png" class="user" />
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <div class="comments">
                                        <form action="#" method="post">
                                            <input type="text" placeholder="comment to discuss">
                                            <input type="button" value="comment">
                                        </form>
                                    </div>
                                    <div class="blankspace">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                            </div>
                        </div>
                    </div>
     </div>

              
              
               
               
               
                </div>
            
  
            
        
                  
           
            <div class="row">
                <div class="hidden-lg hidden-md hidden-sm col-xs-12 alr">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 also">
                            Also Read
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs arr">

                            <img src="<?php echo "$wp_path";?>/images/blog/arrow.png" class="arrowleft img-responsive" />

                        </div>
                    </div>
            
                </div>
               <div class="hidden-lg hidden-md hidden-sm col-xs-12 other">

                    <div class="row">
                       <?php
$args = array(
        'posts_per_page'   => '-1',
        'offset'           => '',
        'category'         => '',
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true 
    );
    $sposts = get_posts( $args ); 
                         for ($i = 0; $i<4;$i++){
                        ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogpad">
                          <a href="<?php cc_root_path();?>/blogpost/?id=<?php  echo apply_filters('ID', $sposts[$i]->ID);?>" class="bloglist"><?php  echo apply_filters('the_title', $sposts[$i]->post_title);?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
           
            </div>
            
            </div>
        
        
    </body>

    </html>

    <?php require 'footer.php'; 
                    ?>