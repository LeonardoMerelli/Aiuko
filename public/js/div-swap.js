
$(document).ready(function () {
  $('.week-div a').on('click', function () {
    $('.week-div a').not(this).removeClass('activated');
    $(this).addClass('activated');
    var elementoCorrente = this;
    var classi = elementoCorrente.className.split(" ");
    var primaParola = classi[0];
    

    document.querySelectorAll('.pranzo').forEach(function (elemento) {
      if (!elemento.classList.contains(primaParola) && elemento.classList.contains('pranzo_')) {
        elemento.classList.add('hidden');
      }
    });
    var elementoPranzoParola = document.querySelector(`.pranzo_${primaParola}`);
    if (elementoPranzoParola)
      elementoPranzoParola.classList.add('visible');
    
    $('.pranzo_${primaParola}').css({
      'visibility' = 'visible';
    });
  });
});

