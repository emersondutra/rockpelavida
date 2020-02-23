
<div class="home-list">

	<?php

	if (has_post_thumbnail()){
	?>
		<div class="grid-thumb">

			<?php

			the_post_thumbnail();

			?>

		</div>

	<?php 	
	} else { 

		echo '<div class="grid-thumb"><img src="'. site_url() .'/wp-content/themes/twentytwenty-child/avatar.png"/></div>';

	}

	 ?>

	<div class="grid-title">
	
		<?php

			if ( true === has_category() ) {
			?>

				<div class="entry-categories-home">
					<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
					<div class="entry-categories-inner-home">
						<?php the_category( ' ' ); ?>
					</div><!-- .entry-categories-inner -->
				</div><!-- .entry-categories -->

			<?php
			}

			the_title( '<h3 class="grid-title-h3"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );	

			if ( has_excerpt() ) {
				?>

				<div class="grid-resumo">
					<?php the_excerpt(); ?>
				</div>

				<?php
			}
		?>
			
		<div class="autor-data">
			<span>Por </span>
			<?php echo '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a>'; ?>
			<span><?php echo ' em ' . get_the_time( 'd \d\e F \d\e Y' ); ?></span>
		</div>
		
	</div>

	<?php
		//twentytwenty_the_post_meta( get_the_ID(), 'single-top' );
	?>
</div>