<?php
/**
 * healthpier functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package healthpier
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function healthpier_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on healthpier, use a find and replace
		* to change 'healthpier' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'healthpier', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'healthpier' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'healthpier_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'healthpier_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function healthpier_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'healthpier_content_width', 640 );
}
add_action( 'after_setup_theme', 'healthpier_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function healthpier_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'healthpier' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'healthpier' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'healthpier_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function healthpier_scripts() {
	wp_enqueue_style( 'healthpier-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'healthpier-style', 'rtl', 'replace' );

	wp_enqueue_script( 'healthpier-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'healthpier_scripts' );

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register a testimonial block
        acf_register_block(array(
            'name'              => 'quote',
            'title'             => __('Блок с цитатой'),
            'description'       => __('Блок где вы можете написать свою небольшую цитату'),
            'render_callback'   => 'my_acf_quote_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-quote',
            'keywords'          => array('quote' ),
        ));
        
        
         acf_register_block(array(
            'name'              => 'howitworks',
            'title'             => __('Блок как это работает'),
            'description'       => __('Блок где выводиться информация о том, как это работает'),
            'render_callback'   => 'my_acf_howitworks_render_callback',
            'category'          => 'formatting',
            'icon'              => 'edit',
            'keywords'          => array( 'howitworks' ),
        ));
    }
}


function my_acf_quote_render_callback( $block ) {
    
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/block/{$slug}.php") );
    }
}

function my_acf_howitworks_render_callback( $block ) {
    
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/block/{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/block/{$slug}.php") );
    }
}