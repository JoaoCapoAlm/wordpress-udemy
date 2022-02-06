<article <?php post_class() ?>>
    <a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>
    <div class="meta-info">
        <p>Publicado por <?php the_author_posts_link()?></p>
        <?php if(has_category()): ?>
        <p>Categorias: <?php the_category(' '); ?></p>
        <?php endif;
        if(has_tag()):
            the_tags('<p>Tags: ', ', ', '</p>');
        endif; ?>
    </div>
    <?php if(has_excerpt()):
        the_excerpt();
    else:
        echo mb_strimwidth(get_the_content(), 0, 125);
    endif;
    ?>
</article>
