document.querySelector('.confirm-button').classList.add("disabled");

function showPopup() {
  document.querySelector('.confirm-button').classList.remove("disabled");
  document.querySelector('.select-item-yes').classList.add('selected-yes');
  document.querySelector('.select-item-no').classList.remove('selected-no');
  
  if(document.getElementById('popup'))
    document.getElementById('popup').style.display = 'block';
}

function closePopup() {
  document.querySelector('.confirm-button').classList.remove("disabled");
  document.querySelector('.select-item-no').classList.add('selected-no');
  document.querySelector('.select-item-yes').classList.remove('selected-yes');
  
  if(document.getElementById('popup')) {
    var divs = document.querySelectorAll('.select-item');
    divs.forEach(function(div) {
      div.classList.remove('selected');
    });
    document.getElementById('popup').style.display = 'none';
  }

  var select = document.getElementById("snackSelect");
  var selectedOptions = select.options;

  // Itera su tutte le opzioni selezionate tranne l'ultima
  for (var i = 0; i < selectedOptions.length; i++) {
    if(i != 1) {
      console.log(selectedOptions[i]);
      selectedOptions[i].selected = false; // Deseleziona l'opzione
    }
  }
}