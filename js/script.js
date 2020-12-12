$(document).ready(function(){

    // модальные окно

    $('[data-modal=consultation]').on('click', function() {
        $('.overlay, #consultation').fadeIn('slow');
    });
    $('.modal__close').on('click', function() {
        $('.overlay, #consultation, #thanks, #order').fadeOut('slow');
        
    });
  
    // маска ввода
  $('#phone').inputmask("+\\9\\98(99)999-99-99");

});