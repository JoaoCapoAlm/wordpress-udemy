<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name'); ?></title>
    <?php _block_template_viewport_meta_tag();
	wp_head(); ?>
</head>
<body <?php body_class() ?>>
<?php wp_body_open(); ?>
<header>
	<section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="social-media-icons col-xl-9 col-sm-7 col-6">Ícones Sociais</div>
                <div class="search col-xl-3 col-sm-5 col-6 text-end">Pesquisa</div>
            </div>
        </div>
    </section>
    <section class="menu-area">
        <div class="container">
            <div class="row">
                <section class="logo col-md-2 col-12 text-center">Logo</section>
                <?php wp_nav_menu([
                    'theme_location' => 'menu_principal',
                    'container' => 'nav',
                    'container_class' => 'col-md-10 text-end',
                    'menu_class' => 'menu',
                    'menu_id' => 'menu-principal'
                ]); ?>
            </div>
        </div>
	</section>
</header>
