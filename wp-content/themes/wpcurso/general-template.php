<?php /* Template Name: Template geral */
get_header(); ?>
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
