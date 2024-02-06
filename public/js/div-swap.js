
$(document).ready(function () {
  $('.week-div a').on('click', function () {
    $('.week-div a').not(this).removeClass('activated');
    $(this).addClass('activated');
    var elementoCorrente = this;
    var classi = elementoCorrente.className.split(" ");
    var primaParola = classi[0];
    

    
  });
});

