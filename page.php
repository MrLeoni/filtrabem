<?php
/**
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Filtrabem
 */
 
	// Using the page thumbnail as banner
	$banner_id = get_post_thumbnail_id();
	$banner_url = wp_get_attachment_image_src($banner_id, "full", true);

get_header(); ?>
	
  <div class="banner" style="background: url(<?php echo $banner_url[0]; ?>) no-repeat center">
  </div>
  
  <main id="main" class="site-main" role="main">
    <section id="page-default">
    
      <?php while ( have_posts() ) : the_post(); 
        $page_content = get_field('page-content');
        ?>
        
          <article class="commun-content">
            <div class="container">
              <?php the_content(); ?>
            </div>
          </article>
          
          <?php if ( $page_content !== 'false' ) { ?>
          
            <article class="acf-content">
              <div class="container">
                <?php $page_content == 'text' ? get_template_part( 'template-parts/content', 'acf-text' ) : get_template_part( 'template-parts/content', 'acf-form' ); ?>
              </div>
            </article>
          
          <?php } ?>
        
        <?php endwhile; // End of the loop.
      ?>
    
    </section>
  </main><!-- #main -->

<?php
get_footer();
