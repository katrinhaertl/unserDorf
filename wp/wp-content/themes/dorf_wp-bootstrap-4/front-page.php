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

                        <div class="col-md-12">
                        <?php while (have_posts()) : the_post(); ?>
                            <h2 class="text-center mb-4"><?php the_title(); ?></h2>
                            <?php wp_bootstrap_4_post_thumbnail(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        </div>


                        <div class="col-md-8 offset-md-2">
                            <?php
                            {
                                $images = array();

                                $image_1 = get_field('image');
                                $images[] = array(
                                    'img_id' => $image_1['ID'],
                                    'url' => get_field('url'),
                                    'title' => get_field('titel'),
                                );

                                $image_2 = get_field('image_2');
                                $images[] = array(
                                    'img_id' => $image_2['ID'],
                                    'url' => get_field('url_2'),
                                    'title' => get_field('titel_2'),
                                );

                                $image_3 = get_field('image_3');
                                $images[] = array(
                                    'img_id' => $image_3['ID'],
                                    'url' => get_field('url_3'),
                                    'title' => get_field('titel_3'),
                                );

                                $image_4 = get_field('image_4');
                                $images[] = array(
                                    'img_id' => $image_4['ID'],
                                    'url' => get_field('url_4'),
                                    'title' => get_field('titel_4'),
                                );

                                $image = get_field('image_5');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_5'),
                                        'title' => get_field('titel_5'),
                                    );
                                }

                                $image = get_field('image_6');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_6'),
                                        'title' => get_field('titel_6'),
                                    );
                                }

                                $image = get_field('image_7');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_7'),
                                        'title' => get_field('titel_7'),
                                    );
                                }

                                $image = get_field('image_8');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_8'),
                                        'title' => get_field('titel_8'),
                                    );
                                }

                                $image = get_field('image_9');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_9'),
                                        'title' => get_field('titel_9'),
                                    );
                                }

                                $image = get_field('image_10');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_10'),
                                        'title' => get_field('titel_10'),
                                    );
                                }

                                $image = get_field('image_11');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_11'),
                                        'title' => get_field('titel_11'),
                                    );
                                }

                                $image = get_field('image_12');
                                if ($image) {
                                    $images[] = array(
                                        'img_id' => $image['ID'],
                                        'url' => get_field('url_12'),
                                        'title' => get_field('titel_12'),
                                    );
                                }
                            }

                            ?>

                            <div id="myCarousel" class="carousel slide" data-ride="carousel"
                                 data-interval="false">
                                <div class="carousel-inner">
                                    <?php

                                    $keyNext = '';
                                    for ($i = 0; $i <= count($images); $i++):
                                        $image = $images[$i];
                                        if ($image):
                                            ?>
                                            <div class="carousel-item py-1 <?= ($i == 0) ? 'active' : '' ?>">
                                            <div class="row">
                                            <div class="col-sm-4 px-0 item-<?= $i ?> first">
                                                <a href="<?= $image['url'] ?>">
                                                    <figure class="wp-block-image size-large">
                                                        <?php
                                                        $img_id = $image['img_id'];
                                                        $img_srcset = wp_get_attachment_image_srcset($img_id);
                                                        $img_sizes = wp_get_attachment_image_sizes($img_id);
                                                        echo '<img alt="' . $image['title'] . '" src="' . $img . '" srcset="' . esc_attr($img_srcset) . '" sizes="' . esc_attr($img_sizes) . '">';
                                                        ?>
                                                    </figure>
                                                </a>
                                            </div>

                                            <?php if (!wp_is_mobile() && $i % 3 == 0) :
                                            $i++;
                                            $image = $images[$i];
                                            if ($images[$i]) :
                                                ?>
                                                <!-- zwei elemente -->
                                                <div class="col-sm-4 px-0 item-<?= $i ?> second">
                                                    <a href="<?= $image['url'] ?>">
                                                        <figure class="wp-block-image size-large">
                                                            <?php
                                                            $img_id = $image['img_id'];
                                                            $img_srcset = wp_get_attachment_image_srcset($img_id);
                                                            $img_sizes = wp_get_attachment_image_sizes($img_id);
                                                            echo '<img alt="' . $image['title'] . '"  src="' . $img . '" srcset="' . esc_attr($img_srcset) . '" sizes="' . esc_attr($img_sizes) . '">';
                                                            ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if (!wp_is_mobile() && $i % 3 == 1) :
                                            $i++;
                                            $image = $images[$i];
                                            if ($images[$i]) :
                                                ?>
                                                <!-- zwei elemente -->
                                                <div class="col-sm-4 px-0 item-<?= $i ?> second">
                                                    <a href="<?= $image['url'] ?>">
                                                        <figure class="wp-block-image size-large">
                                                            <?php
                                                            $img_id = $image['img_id'];
                                                            $img_srcset = wp_get_attachment_image_srcset($img_id);
                                                            $img_sizes = wp_get_attachment_image_sizes($img_id);
                                                            echo '<img alt="' . $image['title'] . '" src="' . $img . '" srcset="' . esc_attr($img_srcset) . '" sizes="' . esc_attr($img_sizes) . '">';
                                                            ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <?php endif; ?>

                                            </div><!-- /row -->
                                            </div><!-- /carousel-item  -->

                                        <?php endif; ?>
                                    <?php endfor; ?>


                                    <a class="carousel-control-prev" href="#myCarousel"
                                       role="button"
                                       data-slide="prev">
                                    <span class="carousel-control-prev-icon"
                                          aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel"
                                       role="button"
                                       data-slide="next">
                                    <span class="carousel-control-next-icon"
                                          aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">&nbsp;</div>


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
