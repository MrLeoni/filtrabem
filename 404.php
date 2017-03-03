<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Filtrabem
 */

get_header(); ?>
	
	<div class="banner single-banner">
  </div>
	
	<main id="main" class="site-main" role="main">
	
		<section class="error-404 not-found">
			<h1>404</h1>
			<p>A página que você está procurando não existe, deseja voltar para a nossa <a href="<?php echo esc_html( home_url('/') );?>" title="Home">home</a> ?</p>
		</section><!-- .error-404 -->
	
	</main><!-- #main -->

<?php
get_footer();
