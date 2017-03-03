<?php
  // Template que será utilizado caso o usuário
  // decida acrescentar, como conteúdo adicional,
  // a opção 'Blocos de texto'
  
  // Títulos
  $title_01 = get_field('title-01');
  $title_02 = get_field('title-02');
  $title_03 = get_field('title-03');
  
  // Textos
  $text_01 = get_field('text-01');
  $text_02 = get_field('text-02');
  $text_03 = get_field('text-03');
?>

<div class="row">
  <div class="col-sm-offset-0 col-sm-4 col-xs-offset-2 col-xs-8">
    <div class="acf-content-box">
      <h3><?php echo $title_01; ?></h3>
      <p><?php echo $text_01; ?></p>
    </div>
  </div>
  <div class="col-sm-offset-0 col-sm-4 col-xs-offset-2 col-xs-8">
    <div class="acf-content-box">
      <h3><?php echo $title_02; ?></h3>
      <p><?php echo $text_02; ?></p>
    </div>
  </div>
  <div class="col-sm-offset-0 col-sm-4 col-xs-offset-2 col-xs-8">
    <div class="acf-content-box">
      <h3><?php echo $title_03; ?></h3>
      <p><?php echo $text_03; ?></p>
    </div>
  </div>
</div>