<?php
/**
 * Template Name: Услуги
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProTelo
 */

get_header();
?>

    <section class="w-100 mb-5 p-5 vh-5 bg_page" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
        <div class="bg_color"></div>
        <div class="container bg-black bg-opacity-50">
            <div class="container">
                <div class="page-header">
                    <?php
                    the_title( '<h1 class="page-title text-center fw-bold text-uppercase">', '</h1>' ); ?>
                </div><!-- .page-header -->
            </div>
    </section>
    <div class="container mb-5">
        <!-- SERVICES -->
        <div class="d_flex p-2">


            <?php
            $postslist = get_posts( array( 'numberposts' => -1, 'post_type' => 'project', 'order'=> 'ASC', 'orderby' => 'title' ) );
            foreach ( $postslist as $post ){
                setup_postdata($post);
                ?>
                <div class="arhive_box" data-aos="fade-up">
                    <div class="arhive_img mb-3" onclick="location='<?php the_permalink(); ?>';">
                        <?php
                        if (has_post_thumbnail()) {
                            $thumbnail_url = get_the_post_thumbnail_url();
                            echo '<img class="rounded" src="' . $thumbnail_url . '" alt="Post Thumbnail">';
                        }
                        ?>
                    </div>
                    <div class="box_text" onclick="location='<?php the_permalink(); ?>';">
                        <!-- Heading -->
                        <h5 class="mb-2"><?php the_title(); ?></h5>

                        <!-- Text -->
                        <p class="mb-0"><?php the_excerpt(); ?></p>
                    </div>
                    <div class="box_amout">
                        <!-- Price -->
                        <div class="fs-4 font-serif text-center text-body-emphasis"><?php the_field('price'); ?> ₽</div>
                        <button data-title="<?php the_title(); ?>" type="button" class="btn btn-outline-primary btn-sm rounded t_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Заказать
                        </button>
                    </div>
                </div>
                <?php
            }

            // Сбросить данные о записях
            wp_reset_postdata();
             ?>
        </div>
    </div>
<?php
get_footer();
