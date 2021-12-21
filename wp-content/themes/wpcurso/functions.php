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

register_nav_menus([
    'menu_principal' => 'Menu principal',
    'menu_rodape' => 'Menu do rodapé'
]);
