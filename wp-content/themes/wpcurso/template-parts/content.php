<article <?php post_class() ?>>
    <?php
    the_title('<h2>', '</h2>');
    the_post_thumbnail();
    ?>
    <p>Publicado em <?= get_the_date(); ?> por <?php the_author_posts_link()?></p>
    <p>Categorias: <?php the_category(' '); ?></p>
    <?php
    the_tags('<p>Tags: ', ', ', '</p>');
    the_content();
    ?>
</article>
