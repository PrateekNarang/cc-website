<?php
    function cc_script_enqueue(){
        wp_register_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array(), '', 'all' );
        wp_register_style( 'footer-style', get_stylesheet_directory_uri() . '/css/footer.css', array(), '1', 'all' );
        wp_register_style( 'home-style-1', get_stylesheet_directory_uri() . '/css/home.css', array(), '1', 'all' );
        wp_register_style( 'home-style-2', get_stylesheet_directory_uri() . '/css/homenew.css', array(), '1', 'all' );
        wp_register_style( 'blog-style-1', get_stylesheet_directory_uri() . '/css/blog.css', array(), '1', 'all' );
        wp_register_style( 'blog-style-2', get_stylesheet_directory_uri() . '/css/blognew.css', array(), '1', 'all' );
        wp_register_style( 'single-style-1', get_stylesheet_directory_uri() . '/css/blogpost.css', array(), '1', 'all' );
        wp_register_style( 'single-style-2', get_stylesheet_directory_uri() . '/css/blogpostnew.css', array(), '1', 'all' );
        wp_register_style( 'service-style-1', get_stylesheet_directory_uri() . '/css/service.css', array(), '1', 'all' );
        wp_register_style( 'service-style-2', get_stylesheet_directory_uri() . '/css/servicenew.css', array(), '1', 'all' );
        wp_register_style( 'about-style-1', get_stylesheet_directory_uri() . '/css/about.css', array(), '1', 'all' );
        wp_register_style( 'about-style-2', get_stylesheet_directory_uri() . '/css/aboutnew.css', array(), '1', 'all' );
        wp_register_style( 'contact-style-1', get_stylesheet_directory_uri() . '/css/contact.css', array(), '1', 'all' );
        wp_register_style( 'contact-style-2', get_stylesheet_directory_uri() . '/css/contactnew.css', array(), '1', 'all' );
        wp_register_style( 'career-style-1', get_stylesheet_directory_uri() . '/css/career.css', array(), '1', 'all' );
        wp_register_style( 'career-style-2', get_stylesheet_directory_uri() . '/css/careernew.css', array(), '1', 'all' );
        wp_register_script('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', FALSE);
        wp_register_style( 'library-style-1', get_stylesheet_directory_uri() . '/css/library.css', array(), '1', 'all' );
        wp_register_style( 'library-style-2', get_stylesheet_directory_uri() . '/css/librarynew.css', array(), '1', 'all' );
        wp_register_style( 'intern-style-1', get_stylesheet_directory_uri() . '/css/interns.css', array(), '1', 'all' );
        wp_register_script('header-images', get_template_directory_uri().'/js/new.js', array('jquery'), '', TRUE);
        wp_register_script('contact-js', get_template_directory_uri().'/js/contact.js', array('jquery'), '', TRUE);
        wp_register_script('batman', get_template_directory_uri().'/js/batman.js', array('jquery'), '', TRUE);


        
        wp_enqueue_style('bootstrap-style');
        wp_enqueue_style('footer-style');
        wp_enqueue_script('bootstrap-script');
        wp_enqueue_script('header-images');
        
        if ( is_page('333')) { 
            wp_enqueue_style('home-style-1');
            wp_enqueue_style('home-style-2'); 
        }
        if ( is_home()) {
            wp_enqueue_style('blog-style-1');
            wp_enqueue_style('blog-style-2');
            wp_enqueue_script('batman');
        }
        if (is_single()){
            wp_enqueue_style('single-style-1');
            wp_enqueue_style('single-style-2');
        }
        if (is_page('345')){
            wp_enqueue_style('service-style-1');
            wp_enqueue_style('service-style-2');
        }
        if (is_page('339')){
            wp_enqueue_style('about-style-1');
            wp_enqueue_style('about-style-2');
        }
        if (is_page('343')){
            wp_enqueue_style('contact-style-1');
            wp_enqueue_style('contact-style-2');
            wp_enqueue_script('contact-js');
        }
        if (is_page('341')){
            wp_enqueue_style('career-style-1');
            wp_enqueue_style('career-style-2');
        }
        if (is_page('362')){
            wp_enqueue_style('library-style-1');
            wp_enqueue_style('library-style-2');
        }
        if (is_page('447')){
            wp_enqueue_style('intern-style-1');
        }
    }
    
    add_action('wp_enqueue_scripts', 'cc_script_enqueue');


?>