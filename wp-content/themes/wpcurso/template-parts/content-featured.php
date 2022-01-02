<article <?php post_class(['class' => 'featured']) ?>>
    <?php the_title('<h3>', '</h3>'); ?>
    <div class="thumbnail">
        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
    </div>
    <p>Por <span><?php the_author_posts_link()?></span>
        Categorias: <span><?php the_category(' '); ?></span>
    <?php
    the_tags('Tags: <span>', ', ', '</span></p>');
    echo get_the_date();
    the_excerpt();
    ?>
</article>
