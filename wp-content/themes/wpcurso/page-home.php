<?php get_header(); ?>
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
                    <?php get_sidebar('home') ?>
                    <div class="news col-md-8">
                        <?php if(have_posts()):
                            while (have_posts()):
                                the_post();
                                ?>
                                <p>Conteúdo vindo do arquivo page-home.php</p>
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
