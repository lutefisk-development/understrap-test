<?php
/**
 * Portfolios setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$pfs = new WP_Query([
	'post_type' => 'us_portfolio',
	'posts_per_page' => -1,
]);

if($pfs->have_posts()) : ?>

	<section class="wrapper" id="wrapper-pfs">
		
		<div class="container">

			<h1><?php _e(get_field('portfolio_header'), 'understrap'); ?></h1>

			<div class="row">

				<?php while($pfs->have_posts()) : $pfs->the_post(); ?>
					
					<!--  For each USPs, include a template-part -->
					<?php get_template_part('loop-templates/content', 'pfs'); ?>

				<?php endwhile;
					
				// Don't foreget to reset post data!
				wp_reset_postdata();

				?>

			</div>

		</div>

	</section>

<?php endif; 