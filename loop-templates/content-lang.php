<?php
/**
 * the Languages section
 */
$language = get_field('language');
?>

<div class="col-md-6 col-lg-4 lang">

	<p>
	
		<span class="fa fa-check-square-o"></span>
		
			<?php

				printf(
					__('%s', 'understrap'),
					$language
				);

			?>
				
	</p>
	
	<div class="progress">

		<div 
			
			class="progress-bar bar-color" 
			role="progressbar" 
			style="width: <?php echo get_field('skill%');?>%" 
			aria-valuenow="25" 
			aria-valuemin="0" 
			aria-valuemax="100">
			<?php echo get_field('skill%');?>%
		
		</div>

	</div>

</div>