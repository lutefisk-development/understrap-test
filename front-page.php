<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php get_template_part( 'global-templates/about' ); ?>

<?php get_template_part( 'global-templates/usps' ); ?>

<?php get_template_part( 'global-templates/pfs' ); ?>

<?php get_template_part( 'global-templates/lang' ); ?>

<?php get_template_part( 'global-templates/contact' ); ?>


<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">


			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<p class="bottom"><?php _e('Per Kristian Svanberg &nbsp; &copy; &nbsp; 2019 - ', 'understrap'); ?><span><a href="https://github.com/lutefisk-development"><?php _e(' My GitHub', 'understrap'); ?></a></span></p>

					<?php //get_template_part( 'loop-templates/content', 'frontpage' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		
	</div> <!--#content -->

</div><!-- #page-wrapper -->

<?php get_footer(); ?>
