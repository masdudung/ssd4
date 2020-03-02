<?php
/**
 * Theme Functions
 */

class masdudung_theme_function{

    function __construct()
    {
        # register user script to wordpress theme 
        add_action( 'wp_enqueue_scripts', [$this, 'theme_name_scripts'] );
        
        # register widget to wordpress theme 
        add_action( 'widgets_init', [$this, 'arphabet_widgets_init'] );

        # register menu to wordpress theme 
        add_action( 'init', [$this, 'wp_custom_new_menu']);

        # hook the title
        add_filter( 'wp_title', [$this, 'filter_wp_title'] );

    }

    public function theme_name_scripts() {
        # include default style css
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        # Include Bootstrap CSS
        wp_enqueue_style(
            'bootstrap.min',
            get_template_directory_uri() . '/css/bootstrap.min.css',
        );

        # include Bootstrap JS
        wp_enqueue_script ( 'jquery' );
        
        wp_enqueue_script ( 
            'bootstrap-js', 
            get_template_directory_uri() . '/js/bootstrap.min.js' 
        );
        wp_enqueue_script ( 
            'custom-js', 
            get_template_directory_uri() . '/js/custom.js' 
        );
    }

    /**
     * Register our sidebars and widgetized areas.
     *
     */
    function arphabet_widgets_init() {

        register_sidebar( array(
            'name'          => 'Home right sidebar',
            'id'            => 'home_right_1',
            'before_widget' => '',
            'after_widget'  => '<br>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => 'Home left sidebar',
            'id'            => 'home_left_1',
            'before_widget' => '',
            'after_widget'  => '<br>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>',
        ) );

    }

    function wp_custom_new_menu() {
        register_nav_menus(
            array(
                'main-menu' => __( 'Main Menu' ),
                'footer-menu' => __( 'Footer Menu' )
            )
        );
    }

    public function filter_wp_title($title)
    {
        # code...
        global $paged, $page;
        if ( is_feed() )
            return $title;

        $title = get_bloginfo( 'name' ) . " $title";
        return $title;
    }

}

$theme = new masdudung_theme_function();