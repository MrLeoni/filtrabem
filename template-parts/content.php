<?php
/**
 * Template part for displaying posts
 *
 * @package Filtrabem
 */
 
 // ACF Fields
 $referencia = get_field('spec-ref');
 $conteudo = get_field('spec-content');
 $dimensoes = get_field('spec-dimensions');
 $composicao = get_field('spec-composition');
 $caixa = get_field('spec-box');

?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
      
      <header class="entry-header">
        <h1><?php the_title('<b>Filtro | </b>', ''); ?></h1>
      </header>
      
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <div class="post-img">
            <?php the_post_thumbnail('large'); ?>
          </div>
        </div>
        <div class="col-sm-8 col-md-5">
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="post-spec">
            <h2><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/especificacoes.png" alt="Ícone Especificações Técnicas">Especificações Técnicas</h2>
            <ul class="spec-list">
              <li><p>Referência: <?php echo $referencia; ?></p></li>
              <li><p>Conteúdo: <?php echo $conteudo; ?></p></li>
              <li><p>Dimensões: <?php echo $dimensoes; ?></p></li>
              <li><p>Composição: <?php echo $composicao; ?></p></li>
              <li><p>Caixa de Embarque: <?php echo $caixa; ?></p></li>
            </ul>
          </div>
        </div>
      </div>
      
      <footer class="entry-footer">
        <div class="row">
          <div class="col-sm-4 col-md-3">
            <div class="bg-transparent"></div>
            <a class="single-post-link short" href="<?php echo esc_html(home_url('/filtros')); ?>" title="Voltar para Filtros">Voltar</a>
          </div>
          <div class="col-sm-8 col-md-5">
            <div class="bg-white-dot"></div>
            <a class="single-post-link" href="<?php echo esc_html(home_url('/fale-conosco')); ?>" title="Ir para a página">Solicitar Orçamento</a>
          </div>
        </div>
      </footer>
      
    </div>
  </article><!-- #post-## -->
