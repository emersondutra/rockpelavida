<?php

get_header();
?>

<main id="site-content" role="main">

	<?php
	
	$args = array(
    	'cat' 				=>		477,
    	'posts_per_page'    =>		1
	);
	 
	// Custom query.
	$query = new WP_Query( $args );
	 
	// Check that we have query results.
	if ( $query->have_posts() ) {
	 
	    // Start looping over the query results.
	    while ( $query->have_posts() ) {
	 
	        $query->the_post();
	 
	        // Contents of the queried post results go here.
	        get_template_part( 'content-destaque' );
	 
	    }
	 
	}
 
	// Restore original post data.
	wp_reset_postdata();

	?>

	<div class="home-content section-inner">
		<div class="box-content">

		<?php 

		if ( have_posts() ) {
		

			while ( have_posts() ) {
				
				the_post();

				if ( ! in_category(477) ) {

					get_template_part( 'content-lista' );

				}
			}
		}

		?>

		</div>
		
		<div class="box-side header">
			
			<?php // get_sidebar( 'my_sidebar' );  ?>
			<?php if (dynamic_sidebar('my_sidebar')) : else : endif; ?>

		</div>

	</div>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
