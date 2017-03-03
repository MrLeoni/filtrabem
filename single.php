<?php
/**
 * The template for displaying all single posts
 *
 * @package Filtrabem
 */

get_header(); ?>
  
  <div class="banner single-banner">
  </div>
  
	<main id="main" class="site-main" role="main">
		<section id="single" class="post-section">
			
			<?php while ( have_posts() ) : the_post();
			
				get_template_part( 'template-parts/content', get_post_format() );
			
			endwhile; // End of the loop. 
			?>
		</section>
	</main><!-- #main -->

<?php
get_footer();
