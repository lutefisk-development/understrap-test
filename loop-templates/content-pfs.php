<?php
	$logo = get_field('logo');
?>

<div class="portfolio col-md-6 col-lg-4">

	<div class="card pfs">

		<?php if($logo) : ?>

			<a href="<?php the_permalink(); ?>">

				<img src="<?php echo $logo['url']; ?>" alt="<?php _e('The logo for the single portfolio-item', 'understrap'); ?>" class="img-fluid">

			</a>

		<?php endif; ?>

		<div class="card-body">

			<h1><?php the_title(); ?></h1>

			<?php the_excerpt(); ?>

			<div class="button-with-span">

				<a href="<?php the_permalink( get_the_ID() ) ?>" class="btn btn-secondary understrap-read-more-link">

					<?php _e( 'Read More', 'understrap' )?>

				</a>
				
				<?php

					if($client = get_post_meta(get_the_ID(), 'client', true)) : 
					
				?>

				<span class="pull-right">
				
					<small>

						<em>
											
							<?php printf(
								__('Client: %s', 
								'understap'), 
								$client); 
							?>

						</em>

					</small>

				</span>

				<?php 
					
					endif; 
					
				?>

			</div>

		</div>

		<div class="card-footer">
				
			<small class="text-muted">

				<div class="metadata-wrapper">

					<?php

						$terms = wp_get_object_terms(
							get_the_ID(), 
							'us_branches', 
							[
								'fields' => 'names'
							]
						);

						echo __('Branches: ', 'understrap');

						$i = 0;
						foreach($terms as $term) {
							$i++;
							if($i > 1) {
								echo ", ";
							}

							echo $term;
						}
					?>

				</div>

			</small>

		</div>
	
	</div>

</div>