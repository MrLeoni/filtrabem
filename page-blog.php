<?php
/**
 * Template name: Blog
 * 
 */
 
 	// Using the page thumbnail as banner
	$banner_id = get_post_thumbnail_id();
	$banner_url = wp_get_attachment_image_src($banner_id, "full", true);
	
get_header(); ?>
  
  <div class="banner" style="background: url(<?php echo $banner_url[0]; ?>) no-repeat center">
  </div>
  
  <main id="main" class="site-main" role="main">
    <section id="page-blog" class="blog-wrapper">
      
      <?php while( have_posts() ) : the_post(); 
        
        $content = get_field('blog-content');
        
        // Escolhendo conteúdo de acordo com a decisão do usuário
        get_template_part( 'template-parts/content', $content );
        
      endwhile; ?>
      
    </section>
  </main>


<?php
get_footer(); ?>