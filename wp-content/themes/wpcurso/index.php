<?php get_header(); ?>
<img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height?>"
     width="<?php echo get_custom_header()->width ?>" class="img-fluid" />
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <div class="news col-md-8">
                            <?php if(have_posts()):
                                while (have_posts()):
                                    the_post();
                                    get_template_part('template-parts/content', get_post_format());
                                endwhile;
                            ?>

                            <div class="row">
                                <div class="pages col-6"></div>
                                <div class="pages text-end col-6"></div>
                            </div>

                            <?php
                            else: ?>
                                <p>Não existe post publicado</p>
                            <?php endif; ?>
                        </div>
                        <?php get_sidebar('blog') ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
