<?php
  // ACF field
  $content = get_field('blog-content');
  
  // Post query args
  $post_args = array(
    'post_type' => $content,
  );
  // Post query
  $post_query = new WP_Query( $post_args );
?>

<div id="posts" class="posts-wrapper">
  <div class="container">
    
    <h1><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/filtro.png" alt="Ícone filtro de café">Filtros</h1>
    <div class="row">
      
      <?php while( $post_query->have_posts() ) : $post_query->the_post(); 
        $sub_title = get_field('sub-title');
      ?>
        
        <div class="col-md-6">
          <a class="post-link" href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
            <?php the_post_thumbnail('medium_large'); ?>
            <div class="post-title">
              <?php the_title('<h2>', '</h2>'); ?>
              <p><?php echo $sub_title; ?></p>
            </div>
          </a>
        </div>
        
      <?php endwhile; ?>
      
    </div>
  </div>
</div>