<?php
/**
 * Template name: Home
 *
 * @package Filtrabem
 */
 
  // Fields for .home-content
  // Text
  $content_text_01 = get_field('text-01');
  $content_text_02 = get_field('text-02');
  // Img
  $content_img_01 = get_field('img-01');
  $content_img_02 = get_field('img-02');
  // Links
  $link_01 = get_field('link-url-01');
  $link_title_01 = get_field('link-title-01');
  $link_02 = get_field('link-url-02');
  $link_title_02 = get_field('link-title-02');
  
  // Fields for .newsletter
  $news_text = get_field('news-text');
  $news_id = get_field('news-id');
  $news_title = get_field('news-title');

get_header(); ?>
  
  <section id="home" class="page-home">
    
    <?php get_template_part( 'template-parts/content', 'banner' ); ?>
    
    <main id="main" class="site-main" role="main">
      
      <article class="home-content">
        <div class="wrapper red clearfix">
          <div class="content-img hidden-sm hidden-xs">
            <img src="<?php echo $content_img_01['url']; ?>" alt="<?php echo $content_img_01['alt']; ?>">
          </div>
          <div class="content-text">
            <?php echo $content_text_01; ?>
            <div class="home-link-box">
              <a href="<?php echo $link_01; ?>" title="<?php echo $link_title_01; ?>"><?php echo $link_title_01; ?></a>
              <hr>
            </div>
          </div>
        </div>
        <div class="wrapper green clearfix">
          <div class="content-text">
            <?php echo $content_text_02; ?>
            <div class="home-link-box">
              <a href="<?php echo $link_02; ?>" title="<?php echo $link_title_02; ?>"><?php echo $link_title_02; ?></a>
              <hr>
            </div>
          </div>
          <div class="content-img hidden-sm hidden-xs">
            <img src="<?php echo $content_img_02['url']; ?>" alt="<?php echo $content_img_02['alt']; ?>">
          </div>
        </div>
      </article>
      
      <article class="newsletter">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <?php echo $news_text?>
            </div>
            <div class="col-md-9">
              <?php echo do_shortcode( '[contact-form-7 id=' . $news_id . ' title=' . $news_title . ']' ); ?>
            </div>
          </div>
        </div>
      </article>
      
    </main><!-- #main -->
  </section>

<?php
get_footer();