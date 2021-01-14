<?php
    //aggoiungendo css e js

    function setup(){
        wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800");
        wp_enqueue_style('load-fa', "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css");
        wp_register_style('bootstrap.min',get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style( 'bootstrap.min' );
        wp_register_style('bootstrap.min.js',get_template_directory_uri() . '/js/bootstrap.min.js');
        wp_enqueue_style( 'bootstrap.min.js' );
        wp_register_style('slick.css',get_template_directory_uri() . '/css/slick.css');
        wp_enqueue_style( 'slick.css' );

        wp_enqueue_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
        wp_enqueue_style('icons', 'https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css');

        wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
        wp_enqueue_script('slick', get_theme_file_uri( './js/slick.min.js'));
        wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    }

    add_action('wp_enqueue_scripts', 'setup');

?>