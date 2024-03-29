<?php
/**
 * The template for signle work page
*
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main spaced-container ">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content-team', 'page' );
			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
