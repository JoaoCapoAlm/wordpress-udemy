<article <?php post_class() ?>>
    <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail([275,275]); ?></a>
    <p>Publicado em <?= get_the_date(); ?> por <?php the_author_posts_link()?></p>
    <p>Categorias: <?php the_category(' '); ?></p>
    <?php
    the_tags('<p>Tags: ', ', ', '</p>');
    the_content();
    ?>
</article>
