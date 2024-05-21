const today = new Date();

// Aggiungi 3 giorni alla data odierna
const threeDaysLater = new Date(today);
threeDaysLater.setDate(today.getDate() + 3);

// Formatta la data nel formato YYYY-MM-DD
const year = threeDaysLater.getFullYear();
const month = String(threeDaysLater.getMonth() + 1).padStart(2, '0');
const day = String(threeDaysLater.getDate()).padStart(2, '0');
const defaultDate = `${year}-${month}-${day}`;

// Imposta la data di default nell'input di tipo date
document.getElementById('dataInizio').value = defaultDate;