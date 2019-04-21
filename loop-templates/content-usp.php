<?php
/**
 * The USP section
 */

$icon = get_field('usp_fa_icon');
$header = get_field('usp_heading');
$para = get_field('usp_paragraph');

?>

<div class="col-md">
	 
	<div class="usp">
		 
		<span class="fa <?php echo $icon; ?> fa-4x"></span>
		
		<h1>
			
			<?php 
				
				printf(
					__('%s', 'understrap'),
					$header
				); 
				
			?>
			
		</h1>
		
		<p>
			
			<?php 
			
				printf(
					__('%s', 'understrap'),
					$para
				);
			
			?>
		
		</p>
	
	</div>

</div>