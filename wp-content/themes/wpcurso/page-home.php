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
                <h2>Nossos serviços</h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php if(is_active_sidebar('services-1')){
                                dynamic_sidebar('services-1');
                            } ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php if(is_active_sidebar('services-2')){
                                dynamic_sidebar('services-2');
                            } ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="services-item">
                            <?php if(is_active_sidebar('services-3')){
                                dynamic_sidebar('services-3');
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <?php get_sidebar('home') ?>
                    <div class="news col-md-8">
                        <div class="container">
                            <h2>Últimas Notícias</h2>
                            <div class="row">
                                <?php
                                /*
                                 * Cat 3: Desenvolvimento Web
                                 * Cat 4: Mídias Sociais
                                 * Cat 5: Web Design
                                */
                                $args = 'post_type=post&posts_per_page=1&cat=3,5';
                                $featured = new WP_Query($args);

                                if($featured->have_posts()):
                                    while ($featured->have_posts()):
                                        $featured->the_post();
                                ?>
                                    <div class="col-12">
                                        <?php get_template_part('template-parts/content', 'featured'); ?>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                endif;
                                ?>

                                <?php
                                $args = [
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'category__not_in' => [5],
                                    'category__in' => [3, 4],
                                    'offset' => 1
                                ];
                                $featured = new WP_Query($args);

                                if($featured->have_posts()):
                                    while ($featured->have_posts()):
                                        $featured->the_post();
                                ?>
                                    <div class="col-sm-6">
                                        <?php get_template_part('template-parts/content', 'secondary'); ?>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="map">Mapa</section>
    </main>
</div>
<?php get_footer(); ?>
