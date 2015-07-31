<?php 
/**
 * Colored Cow functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @package WordPress
 * @subpackage Colored Cow
 * @since Colored Cow 1.0
 */
$count=1;
if ( ! function_exists( 'cc_root_path' ) ) :

function cc_root_path() {
	echo "http://coloredcow.in";
    return;
}
endif;
if ( ! function_exists( 'cc_home_path' ) ) :

function cc_home_path() {
	echo "http://coloredcow.in";
    return;
}
endif;
if ( ! function_exists( 'get_blogs' ) ) :

function get_blogs(){

    global $wpdb;


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
    $posts_array = get_posts( $args );
    return $posts_array;

}

endif;
if ( ! function_exists( 'show_blogs' ) ) :

function show_blogs() {
    $posts =  get_blogs();

    $j=0;
    for ($i = 0; $i<sizeof($posts);$i++){


          ?>

     <div class="row-fluid">

           <div class="row">

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-1">

                        </div>

                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-10">
                                      <div class="row">
                                       <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
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
                                                 ?>;"> <?php  echo apply_filters('the_title', $posts[$i]->post_title);?>
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
                                                 ?>;"> <?php  echo "Abhishek Sharma";?>
                                                     </div>
                                        </div>
                                        </div>
                                        <br>
                                        <div class="blogtext">
                                        <?php
                                 $content = $posts[$i]->post_content;
                                $excerpt = substr($content, 0, 180);
                                $excerpt=strip_tags($excerpt, '');
                                $excerpt.=".......\"";
                                echo "\"".$excerpt;
                                echo "<br>";?>
                                        </div>
                               <a href="<?php cc_root_path();?>/blogpost/?id=<?php  echo apply_filters('ID', $posts[$i]->ID);?>" class="bgtextl" style="color:<?php
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
                                                 ?>;">Read More</a>
                             <hr>

         </div>
                                             <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">

                        </div>



    </div>
                            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blankss">
                            </div>
                        </div>

    <?php
 }

}
endif;
?>
