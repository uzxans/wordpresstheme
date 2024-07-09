<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
<div class="container">
    <main id="primary" class="site-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
        endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
    </main><!-- #main -->
</div>
<?php
get_footer();
