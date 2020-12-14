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
    
  // music
  var mySong = document.getElementById("mySong");
  var icon = document.getElementById("icon");
    
  // preloader
  document.querySelector('.btn__preloader').onclick = function(){
      document.querySelector('.preloader').style.display = 'none';
      document.querySelector('.preloader').style.transition = 'opacity 0.3s';
      mySong.play();
  }

  
});
