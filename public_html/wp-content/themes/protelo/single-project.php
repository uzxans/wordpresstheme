<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section>
                    <main id="primary" class="site-main">
                        <div class="box_amout">
                            <!-- Price -->
                            <div class="fs-4 font-serif text-center text-body-emphasis"><strong>ЦЕНА:</strong>  <?php the_field('price'); ?> ₽</div>
                            <button data-title="<?php the_title(); ?>" type="button" class="btn btn-primary text-white btn-sm rounded t_btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Заказать
                            </button>
                        </div>
                        <?php
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', get_post_type() );

                            the_post_navigation(
                                array(
                                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущий:', 'protelo' ) . '</span> <strong class="nav-title">%title</strong>',
                                    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующий:', 'protelo' ) . '</span> <strong class="nav-title">%title</strong>',
                                )
                            );
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                    </main><!-- #main -->
                </section>
            </div>
            <div class="col-md-4">
                <div class="single_img mb-3">
                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_url = get_the_post_thumbnail_url();
                        echo '<img class="rounded" src="' . $thumbnail_url . '" alt="Post Thumbnail">';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
