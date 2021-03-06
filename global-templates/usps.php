<?php
/**
 * USPs setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$usps = new WP_Query([
	'post_type' => 'us_usp',
	'posts_per_page' => 3,
]);

if($usps->have_posts()) : ?>

	<section class="wrapper" id="wrapper-usps">
		
		<div class="container">

			<h1><?php _e(get_field('usp_header'), 'understrap'); ?></h1>

			<div class="row">

				<?php while($usps->have_posts()) : $usps->the_post(); ?>
					
					<!--  For each USPs, include a template-part -->
					<?php get_template_part('loop-templates/content', 'usp'); ?>

				<?php endwhile;
					
				// Don't foreget to reset post data!
				wp_reset_postdata();

				?>

			</div>

		</div>

	</section>

<?php endif; 