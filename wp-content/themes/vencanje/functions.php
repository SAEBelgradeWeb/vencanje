<?php
/**
 * vencanje functions and definitions
 *
 * @package vencanje
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'vencanje_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vencanje_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on vencanje, use a find and replace
	 * to change 'vencanje' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'vencanje', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'gornji' => __("Gornji meni", 'vencanje'),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'vencanje_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}
endif; // vencanje_setup
add_action( 'after_setup_theme', 'vencanje_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function vencanje_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'vencanje' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	

}
add_action( 'widgets_init', 'vencanje_widgets_init' );




add_action('init', 'registruj_sidebars');



function registruj_sidebars(){

	$argumenti = array(
	'name'          => __( 'Home Ispod Slajdera', 'vencanje' ),
	'id'            => 'home-sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div class="one_third columns"><img src="'.get_template_directory_uri().'/images/icons/icon5.png" alt="" />',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' );

	register_sidebar($argumenti);
	
}

/**
 * Enqueue scripts and styles.
 */
function vencanje_scripts() {
	wp_enqueue_style( 'vencanje-style', get_stylesheet_uri() );

	wp_enqueue_script( 'vencanje-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'vencanje-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vencanje_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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


function custom_post_types(){
	$labels = array(
		'name'               => _x( 'Persons', 'post type general name', 'vencanje' ),
		'singular_name'      => _x( 'Person', 'post type singular name', 'vencanje' ),
		'menu_name'          => _x( 'Persons', 'admin menu', 'vencanje' ),
		'name_admin_bar'     => _x( 'Person', 'add new on admin bar', 'vencanje' ),
		'add_new'            => _x( 'Add New', 'Person', 'vencanje' ),
		'add_new_item'       => __( 'Add New Person', 'vencanje' ),
		'new_item'           => __( 'New Person', 'vencanje' ),
		'edit_item'          => __( 'Edit Person', 'vencanje' ),
		'view_item'          => __( 'View Person', 'vencanje' ),
		'all_items'          => __( 'All Persons', 'vencanje' ),
		'search_items'       => __( 'Search Persons', 'vencanje' ),
		'parent_item_colon'  => __( 'Parent Persons:', 'vencanje' ),
		'not_found'          => __( 'No persons found.', 'vencanje' ),
		'not_found_in_trash' => __( 'No persons found in Trash.', 'vencanje' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'person' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'person', $args );
}

add_action('init', 'custom_post_types' );

function homepage_slider(){

	$args = array(
		'category_name' => 'homepage-slide'
	);

	$category_posts = new WP_Query( $args );

	if($category_posts->have_posts()) : 
	      while($category_posts->have_posts()) : 
	         $category_posts->the_post();
	?>
		<li>
	        <?php the_post_thumbnail( ); ?>
	        <div class="flex-caption">
	            <h1><?php the_title(); ?></h1>
	            <p><?php the_content(); ?></p>
	        </div>
	    </li>
 
	             
	      
	<?php
	      endwhile;
	   else: 
	?>

	      Oops, there are no posts.

	<?php
	   endif;
}

function get_person($offset){
	$args = array(
		'post_type' => 'person',
		'offset'           => $offset,
		'posts_per_page'   => 1,
	);

	$category_posts = new WP_Query( $args );

	if($category_posts->have_posts()) : 
	      while($category_posts->have_posts()) : 
	         $category_posts->the_post();
	?>
	        <?php the_post_thumbnail(array('100')); ?>
            </div>
            <div class="indentleft">
        	<h3 class="title"><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php echo get_permalink(); ?>" class="button">Read more <span></span></a>
 
	<?php
	      endwhile;
	   else: 
	?>

	      Oops, there are no posts.

	<?php
	   endif;

}
