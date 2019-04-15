<div class="portfolio col-md-6 col-lg-4">

	<div class="card pfs">

		<?php if(has_post_thumbnail()) : ?>

			<a href="<?php the_permalink(); ?>">

				<?php the_post_thumbnail('portfolio-thumbnail', ['class' => 'img-fluid']); ?>

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
							
						the_terms(
							get_the_ID(),
							'us_branches',
							__('Branches: ', 'understrap')
						);

					?>

				</div>

			</small>

		</div>
	
	</div>

</div>