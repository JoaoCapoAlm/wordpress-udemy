<article id="post-<?php the_ID(); ?>" <?php post_class() ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>Postado em <?= get_the_date(); ?> por <?php the_author_posts_link(); ?></p>
            <p>Categorias: <?php the_category(' '); ?></p>
            <p><?php the_tags('Tags:', ', '); ?></p>
        </div>
    </header>
    <div class="container">
        <?php the_content(); ?>
    </div>
</article>
