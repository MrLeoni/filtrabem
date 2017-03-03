jQuery(document).ready(function() {

  


  // Exibi o ano atual no elemento #js-date
  function currentDate() {
    var date = new Date();
    jQuery("#js-date").html(date.getFullYear());
  }
  currentDate();
  
  
  
  
  // Abre e fecha menu em telas menores
  jQuery('#site-header').on('click', '#js-nav-btn', function() {
    
    var thisButton = jQuery(this);
    var mainNav = jQuery('.main-nav');
    var mainNavState = mainNav.css('display');
    
    if ( mainNavState == 'none' ) {
      mainNav.slideDown(200);
      thisButton.addClass('active');
    } 
    else if ( mainNavState == 'block' ) {
      mainNav.slideUp(200);
      thisButton.removeClass('active');
    }
    
  });
  
  
  
  
  // Home Banner
  jQuery('.banner-list').bxSlider({
    mode: 'fade',
    controls: false,
    pagerCustom: '.slider-pager',
    auto: true,
    autoHover: true,
    pause: 7000,
    speed: 600,
  });
  
  
  
  
  // Controla animações nos itens FAQ, quando são abertos e fechados
  jQuery('.faq-box button').on('click', function() {
    
    var button = jQuery(this);
    var expanded = button.attr('aria-expanded');
    
    if( expanded == 'false' ) {
      button.animate({
        margin: '0 0 50px',
      },200);
      button.children('h2').addClass('active');
    } else {
      button.animate({
        margin: '0',
      },200);
      button.children('h2').removeClass('active');
    }
  });

});
