<?php
/**
 * the About section
 */

$header = get_field('info_heading');
$sub_header = get_field('info_sub_heading');
$para = get_field('info_paragraph');
$image = get_field('info_image');
?>

<section id="about">
	<div class="container">
		<div id="about-content">
			<h1>
				<?php
					printf(
						__('%s', 'understrap'),
						$header
					);
				?>
			</h1>
			<h2>
				<?php
					printf(
						__('%s', 'understrap'),
						$sub_header
					);
				?>
			</h2>
			<p>
				<?php
					printf(
						__('%s', 'understrap'),
						$para
					);
				?>
			</p>
			<div class="about-picture">
				<img src="<?php echo $image['url']; ?>" alt="<?php _e('This is a picture of me', 'understrap'); ?>" class="img-fluid">
			</div>
		</div>
	</div>
</section>