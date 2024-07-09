<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ProTelo
 */

?>

<div data-aos="fade-up" onclick="location='<?php the_permalink(); ?>';" class="arhive_box" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="arhive_img">
        <img class="rounded" src="<?php echo the_post_thumbnail_url();?>" alt="">
    </div>

        <?php
        if ( is_singular() ) :
            the_title( '<h4 class="entry-title text-center">', '</h4>' );
        else :
            the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                date('Y-m-d');
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
</div><!-- #post-<?php the_ID(); ?> -->
