<?php
/**
 * The template for displaying archive pages
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
                    the_archive_title( '<h1 class="page-title text-center fw-bold text-uppercase">', '</h1>' ); ?>
                </div><!-- .page-header -->
            </div>
    </section>

	    <main id="primary" class="site-main d_flex mb-5">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-arhive', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
    </div>
<?php
get_footer();
