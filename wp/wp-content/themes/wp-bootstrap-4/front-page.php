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
                            <?php
                            $images = array(
                                array(
                                    'img_id' => 35,
                                    'src' => '/wp-content/uploads/2020/04/haus2.png',
                                    'url' => '/?page_id=10',
                                ),
                                array(
                                    'img_id' => 34,
                                    'src' => '/wp-content/uploads/2020/04/haus1-1.png',
                                    'url' => '/?page_id=10',
                                ),
                                array(
                                    'img_id' => 33,
                                    'src' => '/wp-content/uploads/2020/04/haus3.png',
                                    'url' => '/?page_id=10',
                                ),
                                array(
                                    'img_id' => 34,
                                    'src' => '/wp-content/uploads/2020/04/haus1-1.png',
                                    'url' => '/?page_id=10',
                                ),
                                array(
                                    'img_id' => 35,
                                    'src' => '/wp-content/uploads/2020/04/haus3.png',
                                    'url' => '/?page_id=10',
                                ),
                                array(
                                    'img_id' => 33,
                                    'src' => '/wp-content/uploads/2020/04/haus2.png',
                                    'url' => '/?page_id=10',
                                ),
                            );
                            ?>

                            <div id="myCarousel" class="carousel slide" data-ride="carousel"
                                 data-interval="false">
                                <div class="carousel-inner">
                                    <?php

                                    $keyNext = '';
                                    for($i=0; $i <= count($images); $i++):
                                        $image = $images[$i];
                                        if($image):


                                            //$imageData = wp_get_attachment_image_src( $image['img_id'], 'full' );
                                            //var_dump($imageData);

//                                            $img_id = 35;
//                                            $img_srcset = wp_get_attachment_image_srcset( $img_id );
//                                            $img_sizes = wp_get_attachment_image_sizes( $img_id );
//                                            echo '<img src="' . $img . '" srcset="' . esc_attr( $img_srcset ) . '" sizes="' . esc_attr( $img_sizes ) . '">';


                                        ?>
                                        <div class="carousel-item py-1 <?= ($i == 0) ? 'active' : '' ?>">
                                            <div class="row">
                                                <div class="col-sm-4 px-0 item-<?= $i ?> first">
                                                    <a href="<?= $image['url'] ?>">
                                                    <figure class="wp-block-image size-large">
                                                        <?php
                                                        $img_id = $image['img_id'];
                                                        $img_srcset = wp_get_attachment_image_srcset( $img_id );
                                                        $img_sizes = wp_get_attachment_image_sizes( $img_id );
                                                        echo '<img src="' . $img . '" srcset="' . esc_attr( $img_srcset ) . '" sizes="' . esc_attr( $img_sizes ) . '">';
                                                        ?>
                                                    </figure>
                                                    </a>
                                                </div>

                                            <?php if ( !wp_is_mobile() && $i%3 == 0 ) :
                                                $i++;
                                                $image = $images[$i];
                                                if($images[$i]) :
                                                 ?>
                                                <!-- zwei elemente -->
                                                <div class="col-sm-4 px-0 item-<?= $i ?> second">
                                                    <a href="<?= $image['url'] ?>">
                                                    <figure class="wp-block-image size-large">
                                                        <?php
                                                        $img_id = $image['img_id'];
                                                        $img_srcset = wp_get_attachment_image_srcset( $img_id );
                                                        $img_sizes = wp_get_attachment_image_sizes( $img_id );
                                                        echo '<img src="' . $img . '" srcset="' . esc_attr( $img_srcset ) . '" sizes="' . esc_attr( $img_sizes ) . '">';
                                                        ?>
                                                    </figure>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if ( !wp_is_mobile() && $i%3 == 1 ) :
                                            $i++;
                                            $image = $images[$i];
                                            if($images[$i]) :
                                                ?>
                                                <!-- zwei elemente -->
                                                <div class="col-sm-4 px-0 item-<?= $i ?> second">
                                                    <a href="<?= $image['url'] ?>">
                                                        <figure class="wp-block-image size-large">
                                                            <?php
                                                            $img_id = $image['img_id'];
                                                            $img_srcset = wp_get_attachment_image_srcset( $img_id );
                                                            $img_sizes = wp_get_attachment_image_sizes( $img_id );
                                                            echo '<img src="' . $img . '" srcset="' . esc_attr( $img_srcset ) . '" sizes="' . esc_attr( $img_sizes ) . '">';
                                                            ?>
                                                        </figure>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>


                                        <?php endif; ?>

                                            </div>
                                        </div>
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
