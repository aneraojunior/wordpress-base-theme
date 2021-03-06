<?php
// Require do arquivo customizer
require_once get_template_directory() . '/inc/customizer.php';

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
        array( 'jquery' ), '4.0.0', true );
    wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css',
        array(), '4.7.0', true );
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css',
        array(), '1.0', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',
        array(), '1.1', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function wphahamu_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);	

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'single-post-thumbnail', 1024, 800 );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
	add_theme_support('title-tag');
	add_theme_support('custom-logo', [
        'height' => '110',
        'width' => '200'
    ]);
}
add_action( 'after_setup_theme', 'wphahamu_config', 0 );

// Registrando Sidebars
add_action('widgets_init', 'wp_sidebar');
function wp_sidebar(){
    register_sidebar([
        'name' => 'Home Page Sidebar',
        'id' => 'sidebar-1',
        'description' => 'Sidebar to be usesd on Home Page',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);

    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-2',
        'description' => 'Sidebar to be usesd on Blog Page',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);

    /* Our Services */
    register_sidebar([
        'name' => 'Services 1',
        'id' => 'services-1',
        'description' => 'Sidebar to be usesd on Services 1',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);

    register_sidebar([
        'name' => 'Services 2',
        'id' => 'services-2',
        'description' => 'Sidebar to be usesd on Services 2',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);

    register_sidebar([
        'name' => 'Services 3',
        'id' => 'services-3',
        'description' => 'Sidebar to be usesd on Services 3',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);

    register_sidebar([
        'name' => 'Slide',
        'id' => 'slide-1',
        'description' => 'Widget para adicionar Shortcode do Slide',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ]);
}