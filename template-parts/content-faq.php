<?php
  // ACF field
  $content = get_field('blog-content');
  
  // FAQ query args
  $faq_args = array(
    'post_type' => $content,
  );
  // FAQ query
  $faq_query = new WP_Query( $faq_args );
?>

<article id="faq" class="faq-wrapper">
  <div class="container">
    
    <h1>FAQ</h1>
    <div class="row">
      
      <?php while( $faq_query->have_posts() ) : $faq_query->the_post(); ?>
        
        <div class="col-md-12">
          <div class="faq-box">
            
            <button data-toggle="collapse" data-target="#faq-item-<?php echo get_the_ID(); ?>" aria-expanded="false">
              <h2><i class="faq-icon"></i><?php the_title(); ?></h2>
            </button>
            
            <div id="faq-item-<?php echo get_the_ID(); ?>" class="collapse faq-content">
              <?php the_content(); ?>
            </div>
            
          </div>
        </div>
        
      <?php endwhile; ?>
      
    </div>
    
  </div>
</article>