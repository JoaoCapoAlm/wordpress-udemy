<?php
/**
 * Adiciona arquivos de scripts e estilos
 * @return void
*/
function carregar_scripts():void {
	// Estilos
	wp_enqueue_style(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'
	);
    wp_enqueue_style( 'estilo-principal', get_template_directory_uri() . '/style.css');

	// Scripts
	wp_enqueue_script(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
		[],
		'5.1.3',
		true
	);
}
add_action('wp_enqueue_scripts', 'carregar_scripts');

// region seguranca
// remove versao da tag head
remove_action('wp_head', 'wp_generator');

// remove versao do rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function remove_versao_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_versao_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_versao_scripts_styles', 9999);
// endregion

function config_tema(){
    // Cria os tipos de menu diferentes
    register_nav_menus([
        'menu_principal' => 'Menu principal',
        'menu_rodape' => 'Menu do rodapé'
    ]);

    add_theme_support('custom-header', ['height' => 225, 'width' => 1920]);
    add_theme_support('post-thumbnails', ['post']);
    add_theme_support('post-formats', ['video', 'image']);
}
add_action('after_setup_theme', 'config_tema', 0);

function sidebar_tema(){
    //Home
    register_sidebar([
        'name' => 'Home Page Sidebar',
        'id' => 'sidebar-1',
        'description' => 'Sidebar usado na página inicial (home)',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_sidebar' => '<aside class="sidebar col-md-4">',
        'after_sidebar' => '</aside>'
    ]);
    // Blog
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'sidebar-2',
        'description' => 'Sidebar usado na página do blog',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_sidebar' => '<aside class="sidebar col-md-4">',
        'after_sidebar' => '</aside>'
    ]);

    // Services 1
    register_sidebar([
        'name' => 'Services 1',
        'id' => 'services-1',
        'description' => 'Área primeiro serviço',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'name' => 'Services 2',
        'id' => 'services-2',
        'description' => 'Área segundo serviço',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>'
    ]);

    register_sidebar([
        'name' => 'Services 3',
        'id' => 'services-3',
        'description' => 'Área terceiro serviço',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>'
    ]);
}
add_action('widgets_init', 'sidebar_tema');
