<?php

if ('posts' == get_option('show_on_front')) {
    include(get_home_template());
} else {
    if (!is_page_template()) {
        get_header();

//        get_template_part( 'template-parts/front-page/cover' );
        get_template_part('template-parts/front-page/services');

        ?>

        <?php if (get_theme_mod('show_main_content', 1)) : ?>
            <section class="wp-bp-main-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item py-5 active">
                                        <div class="row">
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus2.png"
                                                            alt="" class="wp-image-33"
                                                            srcset="/wp-content/uploads/2020/04/haus2.png 450w, /wp-content/uploads/2020/04/haus2-300x300.png 300w, /wp-content/uploads/2020/04/haus2-150x150.png 150w, /wp-content/uploads/2020/04/haus2-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus2.png"
                                                            alt="" class="wp-image-35"
                                                            srcset="/wp-content/uploads/2020/04/haus1-1.png 450w, /wp-content/uploads/2020/04/haus1-1-300x300.png 300w, /wp-content/uploads/2020/04/haus1-1-150x150.png 150w, /wp-content/uploads/2020/04/haus1-1-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item py-5">
                                        <div class="row">
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus3.png"
                                                            alt="" class="wp-image-35"
                                                            srcset="/wp-content/uploads/2020/04/haus1-1.png 450w, /wp-content/uploads/2020/04/haus1-1-300x300.png 300w, /wp-content/uploads/2020/04/haus1-1-150x150.png 150w, /wp-content/uploads/2020/04/haus1-1-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus2.png"
                                                            alt="" class="wp-image-33"
                                                            srcset="/wp-content/uploads/2020/04/haus2.png 450w, /wp-content/uploads/2020/04/haus2-300x300.png 300w, /wp-content/uploads/2020/04/haus2-150x150.png 150w, /wp-content/uploads/2020/04/haus2-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item py-5">
                                        <div class="row">
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large">
                                                    <img src="/wp-content/uploads/2020/04/haus2.png"
                                                         alt="" class="wp-image-33"
                                                         srcset="/wp-content/uploads/2020/04/haus2.png 450w, /wp-content/uploads/2020/04/haus2-300x300.png 300w, /wp-content/uploads/2020/04/haus2-150x150.png 150w, /wp-content/uploads/2020/04/haus2-60x60.png 60w"
                                                         sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus3.png"
                                                            alt="" class="wp-image-35"
                                                            srcset="/wp-content/uploads/2020/04/haus1-1.png 450w, /wp-content/uploads/2020/04/haus1-1-300x300.png 300w, /wp-content/uploads/2020/04/haus1-1-150x150.png 150w, /wp-content/uploads/2020/04/haus1-1-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item py-5">
                                        <div class="row">
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus2.png"
                                                            alt="" class="wp-image-33"
                                                            srcset="/wp-content/uploads/2020/04/haus2.png 450w, /wp-content/uploads/2020/04/haus2-300x300.png 300w, /wp-content/uploads/2020/04/haus2-150x150.png 150w, /wp-content/uploads/2020/04/haus2-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                            <div class="col-sm-6 px-0">
                                                <figure class="wp-block-image size-large"><img
                                                            src="/wp-content/uploads/2020/04/haus1-1.png"
                                                            alt="" class="wp-image-35"
                                                            srcset="/wp-content/uploads/2020/04/haus1-1.png 450w, /wp-content/uploads/2020/04/haus1-1-300x300.png 300w, /wp-content/uploads/2020/04/haus1-1-150x150.png 150w, /wp-content/uploads/2020/04/haus1-1-60x60.png 60w"
                                                            sizes="(max-width: 450px) 100vw, 450px">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon"
                                          aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon"
                                          aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                            <?php while (have_posts()) : the_post(); ?>
                                <h2 class="text-center mb-4"><?php the_title(); ?></h2>
                                <?php wp_bootstrap_4_post_thumbnail(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
        get_footer();
    } else {
        include(get_page_template());
    }
}
?>
