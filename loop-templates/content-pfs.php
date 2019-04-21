<?php
	$logo = get_field('portfolio_logo');
	$heading = get_field('portfolio_heading');
	$content = get_field('portfolio_content');
	$client = get_field('portfolio_client');
	$areas = get_field('portfolio_area');
	$link = get_field('portfolio_link');
?>

<div class="portfolio col-sm-12 col-md-6 col-lg-4">

	<div class="card pfs">

		<a href="<?php echo $link; ?>">

			<img src="<?php echo $logo['url']; ?>" alt="<?php _e('The logo for the single portfolio-item', 'understrap'); ?>" class="img-fluid">

		</a>

		<div class="card-body">

			<h1>

				<?php
				
					printf(
						__('%s', 'understrap'),
						$heading
					);
				
				?>

			</h1>

			<p>

				<?php

					printf(
						__('%s', 'understrap'),
						$content
					);

				?>

			</p>

			<div class="button-with-span">

				<a href="<?php echo $link; ?>" class="btn btn-secondary understrap-read-more-link">

					<?php _e( 'Visit Page', 'understrap' )?>

				</a>

				<span class="pull-right">
				
					<small>

						<em>
											
							<?php 
							
								printf(
									__('Client: %s', 
									'understap'), 
									$client
								);

							?>

						</em>

					</small>

				</span>

			</div>

		</div>

		<div class="card-footer">
				
			<small class="text-muted">

				<div class="metadata-wrapper">

					<?php

						printf(
							__('Areas: %s', 'understrap'),
							$areas[0]->name
						);

					?>

				</div>

			</small>

		</div>
	
	</div>

</div>