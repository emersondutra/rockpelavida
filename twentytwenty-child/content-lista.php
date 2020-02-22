
<div class="home-list">

	<?php

	if (has_post_thumbnail()){
	?>
		<div class="grid-thumb">

			<?php

			the_post_thumbnail();

			?>

		</div>

	<?php 	} ?>

	<div class="grid-title">
	
		<?php
			the_title( '<h3 class="grid-title-h3"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );	

			if ( has_excerpt() ) {
				?>

				<div class="grid-resumo">
					<?php the_excerpt(); ?>
				</div>

				<?php
			}
		?>
	</div>

	<?php
		//twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
	?>
</div>