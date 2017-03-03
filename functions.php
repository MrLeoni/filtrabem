<?php
/**
 * Filtrabem functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Filtrabem
 */

if ( ! function_exists( 'filtrabem_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function filtrabem_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Filtrabem, use a find and replace
	 * to change 'filtrabem' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'filtrabem', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'header' => esc_html__( 'Menu topo', 'filtrabem' ),
		'footer' => esc_html__( 'Menu roda pé', 'filtrabem' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'filtrabem_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'filtrabem_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function filtrabem_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'filtrabem_content_width', 640 );
}
add_action( 'after_setup_theme', 'filtrabem_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function filtrabem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'filtrabem' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Adicione widgets aqui', 'filtrabem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'filtrabem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function filtrabem_scripts() {
	
	// styles
	
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array() );
	
	wp_enqueue_style( 'bxslider-style', get_template_directory_uri() . '/assets/css/jquery.bxslider.css', array() );
	
	wp_enqueue_style( 'filtrabem-style', get_stylesheet_uri(), array('bootstrap-style', 'bxslider-style') );
	
	// scripts
	
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true );
	
	wp_enqueue_script( 'bxslider-script', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '1.0', true );

	wp_enqueue_script( 'filtrabem-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'filtrabem-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery', 'bxslider-script'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'filtrabem_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



// ---------------------------------------------------
// Registrando custom posts type
// ---------------------------------------------------



// FAQ
add_action("init", "faq");
function faq() {
	
	// Registering new Custom Post Type
	$labels_post = array( 
		"name" => "FAQ",
		"singular_name" => "FAQ",
	);
	$args_post = array(
		"labels" => $labels_post,
		"supports" => array("title", "editor", "thumbnail"),
		"menu_position" => 5,
		"menu_icon" => "dashicons-editor-help",
		"public"	=> true,
		"show_in_menu"	=> true,
	);
	register_post_type("faq", $args_post);
	
	// Registering new Taxonomy
	$labels_taxonomy = array( "name" => "Categoria FAQ", "singular_name" => "Categoria FAQ");
	$args_taxonomy = array(
		"labels"	=> $labels_taxonomy,
		"show_ui"	=> true,
		"show_in_menu"	=> true,
		"show_tagcloud"	=> false,
		'show_admin_column' => true,
		"hierarchical"	=> true,
		"capabilities"	=> array("manage_terms", "edit_terms", "delete_terms", "assign_terms"),
	);
	register_taxonomy("category-faq", "faq", $args_taxonomy);
}



// Home Banner
add_action("init", "homeBanner");
function homeBanner() {
	
	// Registering new Custom Post Type
	$labels_post = array( 
		"name" => "Home Banners",
		"singular_name" => "Banner",
	);
	$args_post = array(
		"labels" => $labels_post,
		"supports" => array("title", "editor", "thumbnail"),
		"menu_position" => 6,
		"menu_icon" => "dashicons-format-gallery",
		"public"	=> true,
		"show_in_menu"	=> true,
	);
	register_post_type("home-banner", $args_post);
	
	// Registering new Taxonomy
	$labels_taxonomy = array( "name" => "Categorias dos Banners", "singular_name" => "Categoria do Banner");
	$args_taxonomy = array(
		"labels"	=> $labels_taxonomy,
		"show_ui"	=> true,
		"show_in_menu"	=> true,
		"show_tagcloud"	=> false,
		'show_admin_column' => true,
		"hierarchical"	=> true,
		"capabilities"	=> array("manage_terms", "edit_terms", "delete_terms", "assign_terms"),
	);
	register_taxonomy("category-home-banner", "home-banner", $args_taxonomy);
}



// Complementos
add_action("init", "complemento");
function complemento() {
	
	// Registering new Custom Post Type
	$labels_post = array( 
		"name" => "Complementos",
		"singular_name" => "Complemento",
	);
	$args_post = array(
		"labels" => $labels_post,
		"supports" => array("title", "editor", "thumbnail"),
		"menu_position" => 7,
		"menu_icon" => "dashicons-plus",
		"public"	=> true,
		"show_in_menu"	=> true,
	);
	register_post_type("complemento", $args_post);
	
	// Registering new Taxonomy
	$labels_taxonomy = array( "name" => "Categoria dos Complementos", "singular_name" => "Categoria de Complemento");
	$args_taxonomy = array(
		"labels"	=> $labels_taxonomy,
		"show_ui"	=> true,
		"show_in_menu"	=> true,
		"show_tagcloud"	=> false,
		'show_admin_column' => true,
		"hierarchical"	=> true,
		"capabilities"	=> array("manage_terms", "edit_terms", "delete_terms", "assign_terms"),
	);
	register_taxonomy("category-complemento", "complemento", $args_taxonomy);
}


