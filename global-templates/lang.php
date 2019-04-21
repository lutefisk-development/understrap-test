<?php
/**
 * Portfolios setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$about_me = get_field('paragraph_me');

$lang = new WP_Query([
	'post_type' => 'us_lang',
	'posts_per_page' => -1,
]);

if($lang->have_posts()) : ?>

	<section class="wrapper" id="wrapper-lang">
		
		<div class="container">

			<h1><?php _e(get_field('lang_header'), 'understrap'); ?></h1>

			<div class="row">

				<?php while($lang->have_posts()) : $lang->the_post(); ?>
					
					<!--  For each USPs, include a template-part -->
					<?php get_template_part('loop-templates/content', 'lang'); ?>

				<?php endwhile;
					
				// Don't foreget to reset post data!
				wp_reset_postdata();

				?>

			</div>

			<hr>

			<div class="row">

				<div class="col lang">

					<h2><?php _e(get_field('lang_sub_heading'), 'understrap'); ?></h2>

					<div id="said-about-me">

						<p class="said-about-me">
							"
							<?php
							
								printf(
									__('%s', 'understrap'),
									$about_me
								);

							?>
							"
						</p>

					</div>

				</div>

			</div>

		</div>

	</section>

<?php endif;