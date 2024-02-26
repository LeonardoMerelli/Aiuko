document.querySelector('.confirm-button').classList.add("disabled");

function showPopup() {
  document.querySelector('.select-item-yes').classList.add('selected-yes');
    
  document.querySelector('.select-item-no').classList.remove('selected-no');

  document.getElementById('popup').style.display = 'block';

  document.querySelector('.confirm-button').classList.remove("disabled");
}

function closePopup() {
  document.querySelector('.select-item-no').classList.add('selected-no');
  
  document.querySelector('.select-item-yes').classList.remove('selected-yes');

  document.getElementById('popup').style.display = 'none';

  document.querySelector('.confirm-button').classList.remove("disabled");
}