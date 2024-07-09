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
<div class="container mb-5">
    <div class="row">
        <div class="col-md-8">
            <section>
                <main id="primary" class="site-main">

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                        the_post_navigation(
                            array(
                                'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'protelo' ) . '</span> <span class="nav-title">%title</span>',
                                'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'protelo' ) . '</span> <span class="nav-title">%title</span>',
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
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
