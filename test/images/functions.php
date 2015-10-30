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
    
    
    for ($i = 0; $i<sizeof($posts);$i++){


          ?>
                        
     <div class="row-fluid">
        
           <div class="row">
                                    <div id="container3" class="outer">
    <div id="container2">
        <div id="container1" >
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bga" id="col1">
                            <div class="row">
 
 
                                <div class="col-lg-12 col-m d-12 col-sm-12 col-xs-12">
                                    <div class="circle" style="background-image: url(http://coloredcow.in/wp/wp-content/themes/coloredcow/images/blog/user.png);">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 an">
                                    Abhishek Sharma
                                </div>
                                
                                
                                
                            </div>
                        </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 bgs" id="col2">
 
                
                
            </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bgt" id="col3">
                                        <div class="bgtext inner"> <a href="<?php cc_root_path();?>/blogpost/?id=<?php  echo apply_filters('ID', $posts[$i]->ID);?>" class="bgtextl"><?php  echo apply_filters('the_title', $posts[$i]->post_title);?></a></div>
                        </div>
 </div
    </div>
</div>
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
