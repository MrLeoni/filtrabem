<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Filtrabem
 */
 
 // Criando argumentos para a query de posts do tipo 'complemento' com a categoria 'footer'
 $footer_posts_args = array(
   'post_type' => 'complemento',
   'tax_query' => array(array(
     'taxonomy' => 'category-complemento',
     'field' => 'slug',
     'terms' => 'footer'
   ))
 );
 
 // Criando query
 $footer_posts = new WP_Query( $footer_posts_args );

?>
  
  <footer id="site-footer" class="footer">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6">
          <div class="footer-logo">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo/logo-footer.png" alt="Filtra Bem Logo">
          </div>
          <div class="row">
            <div class="col-xs-5 col-sm-4">
              <div class="footer-nav">
                <h4>Menu</h4>
                <?php
                  // Argumentos para o menu do footer
                  $menu_args = array(
                    'theme_location' => 'footer',
                    'container' => '',
                    'menu_class' => 'footer-nav-links'
                  );
                  // Gerando menu
                  wp_nav_menu( $menu_args );
                ?>
              </div>
            </div>
            <div class="col-xs-7 col-sm-7">
              <div class="footer-posts">
                <?php
                  // Utilizando query criada
                  while( $footer_posts->have_posts() ) : $footer_posts->the_post();
                    
                    the_title('<h4>', '</h4>');
                    the_content();
                    
                  endwhile;
                ?>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="map-box">
            <iframe src="https://www.google.com/maps/embed/v1/place?q=S%C3%A3o%20Bernardo%20do%20Campo%2C%20Rua%20MMDC%20numero%201310&key=AIzaSyAzXpJR2-FnCcV3ADhNM869Bxs6bHOV5f4&zoom=17" allowfullscreen></iframe>
          </div>
        </div>
        
      </div>
    </div>
    <div class="copy">
      <div class="container">
        <p><span id="js-date"></span> &copy; - Filtra Bem - filtros de papel <a class="delucca" href="http://www.agenciadelucca.com.br" target="_blank" title="Agência Delucca">AD</a></p>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
