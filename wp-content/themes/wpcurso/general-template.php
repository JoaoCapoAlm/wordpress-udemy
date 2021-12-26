<?php /* Template Name: Template geral */
get_header();
get_template_part()
?>
    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height?>"
     width="<?php echo get_custom_header()->width ?>" class="img-fluid" />
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                    <div class="template-geral">
                        <?php if(have_posts()):
                            while (have_posts()):
                                the_post();
                        ?>
                            <article>
                                <?php
                                the_title('<h2>', '</h2>');
                                the_content();
                                ?>
                            </article>
                        <?php endwhile;
                        else: ?>
                            <p>Não existe post publicado</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>
