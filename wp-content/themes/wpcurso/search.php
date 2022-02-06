<?php get_header(); ?>
<div id="primary">
    <div id="name">
        <div class="container">
            <h2>Resultado da busca: <?php echo get_search_query(); ?></h2>
            <?php
            get_search_form();
            while (have_posts()): the_post();
                get_template_part('template-parts/content', 'search');
            endwhile;?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
