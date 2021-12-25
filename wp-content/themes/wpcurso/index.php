<?php get_header(); ?>
<img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height?>"
     width="<?php echo get_custom_header()->width ?>" class="img-fluid" />
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">Serviços</div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-4">Barra lateral</aside>
                        <div class="news col-md-8">
                            <?php if(have_posts()):
                                while (have_posts()):
                                    the_post();
                            ?>
                                    <article>
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
                            <?php endwhile;
                            else: ?>
                                <p>Não existe post publicado</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">Mapa</section>
        </main>
    </div>
<?php get_footer(); ?>
