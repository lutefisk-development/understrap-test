<div class="col-md-4">

	<div class="card usp">

		<?php if(has_post_thumbnail()) : ?>

			<figure class="featured-image-wrapper">

				<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>

			</figure>

		<?php endif; ?>

		<div class="card-body">

			<h1><?php the_title(); ?></h1>

			<?php

				if($client = get_post_meta(get_the_ID(), 'client', true)) : ?>
				
					<summary class="text-small">
						
						<small class="text-muted">

							<em><?php _e('Client: ', 'understap'); echo $client; ?></em>

						</small>

					</summary>

				<?php endif;	
			
			?>

			<?php the_excerpt(); ?>

		</div>

		<div class="card-footer">

			<summary class="text-small">
				
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
		
			</summary>

		</div>
	
	</div>

</div>