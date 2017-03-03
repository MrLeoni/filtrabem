<?php
  // Template que será utilizado caso o usuário
  // decida acrescentar, como conteúdo adicional,
  // a opção 'Blocos de texto'
  
  // Texto
  $form_text = get_field('form-text');
  
  // Form
  $form_id = get_field('form-id');
  $form_title = get_field('form-title');
?>

<div class="row">
  <div class="col-sm-12">
    <div class="acf-content-box">
      <?php echo $form_text; ?>
    </div>
    <div class="acf-form-box">
      <?php echo do_shortcode( '[contact-form-7 id=' . $form_id . ' title=' . $form_title . ']' ); ?>
    </div>
  </div>
</div>