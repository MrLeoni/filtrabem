<?php

  // Banner args
  $banner_args = array(
    'post_type' => 'home-banner'
  );
  // Banner query $banner_query->
  $banner_query = new WP_Query( $banner_args );

?>

  <article id="banner">
    <div class="slide-banner">
      
      <ul class="banner-list">
        
        <?php // Slider content
        while( $banner_query->have_posts() ) : $banner_query->the_post(); ?>
          
          <li style="background: url(<?php echo the_post_thumbnail_url('full'); ?>) no-repeat center">
            <div class="banner-content">
              <?php the_content(); ?>
            </div>
          </li>
          
        <?php endwhile; ?>
        
      </ul>
      
      <div class="slider-pager">
        
        <?php // Slider pager
        $count = 0;
        while( $banner_query->have_posts() ) : $banner_query->the_post(); ?>
          
          <a href data-slide-index="<?php echo $count; ?>" class="custom-pager">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/menu-active.png" alt="Ícone Grão de Café">
          </a>
          
        <?php $count++;
        endwhile; ?>
      </div>
      
    </div>
  </article>