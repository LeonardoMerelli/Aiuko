document.addEventListener('DOMContentLoaded', function() {
  var snackSelect = document.getElementById('snackSelect');
  var snackTimePopup = document.getElementById('snackTimePopup');

  if (snackSelect && snackTimePopup) {
      snackSelect.addEventListener('input', function() {
          var selectedOptions = Array.from(this.selectedOptions).map(option => option.value);

          if (selectedOptions.includes('si')) {
              snackTimePopup.style.display = 'block';
          } else {
              snackTimePopup.style.display = 'none';
          }
      });
  }
});

function closePopup() {
  var snackSelect = document.getElementById('snackSelect');
  var snackTimePopup = document.getElementById('snackTimePopup');

  if (snackTimePopup && snackSelect) {
      var selectedOptions = Array.from(snackSelect.selectedOptions).map(option => option.value);

      if (!selectedOptions.includes('no')) {
          snackTimePopup.style.display = 'none';
      }
  }
}
