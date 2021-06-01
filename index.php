<?php
/**
 * The main template file.
 * @package arvan
 */

get_header(); ?>

<main class="main-area">
<?php
if ( have_posts() ) :
        while ( have_posts() ) :
        the_post();

        ?>
        <h2> <?php bloginfo('name'); ?></h2>
        <?php the_content(); ?>

        <?php
endwhile;

		else :

		endif;
		?>
</main><!-- ./main area -->

<?php
// do_action( 'storefront_sidebar' );
get_footer();

