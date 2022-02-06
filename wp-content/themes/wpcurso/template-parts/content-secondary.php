<article <?php post_class(['class' => 'secondary']) ?>>
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></a>
    </div>
    <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
    <p>Por <span><?php the_author_posts_link()?></span>
        Categorias: <span><?php the_category(' '); ?></span>
    <?php
    the_tags('Tags: <span>', ', ', '</span></p>');
    the_excerpt();
    ?>
</article>
