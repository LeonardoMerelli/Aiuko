var i = 0;

function addDateMotivo() {
    if(document.querySelectorAll('input[type="date"]').length < 7) {

        let data1 = document.createElement("input");
        let data2 = document.createElement("select");
        let divProva = document.createElement("span");
        let pocoTempoDiv = document.createElement("div");
        let tempoLabel = document.createElement("label");
        let tempoInput = document.createElement("input");
        
        divProva.setAttribute("id", "box-data");

        i++;

        var dataCalendario = "data-calendario" + i;
        var variazione = "variazione" + i;
        var pocoTempoId = "poco-tempo" + i;

        data1.setAttribute("type", "date");
        data1.setAttribute("id", dataCalendario);
        data1.setAttribute("name", "data-calendario");

        data2.setAttribute("id", variazione);
        data2.setAttribute("name", "variazione");

        var opzioni = ["Seleziona una voce", "Assenza", "Al sacco", "Poco tempo"];

        opzioni.forEach(function(testoOpzione, indice) {
            var opzione = document.createElement("option");
            opzione.text = testoOpzione;
            opzione.value = testoOpzione;
            if(testoOpzione === "Seleziona una voce") {
                opzione.disabled = true;
                opzione.selected = true;
            }
            data2.appendChild(opzione);
        });

        pocoTempoDiv.setAttribute("id", pocoTempoId);
        pocoTempoDiv.style.display = "none";

        tempoLabel.setAttribute("for", "tempo" + i);
        tempoLabel.innerText = "Tempo";

        tempoInput.setAttribute("type", "number");
        tempoInput.setAttribute("id", "tempo" + i);
        tempoInput.setAttribute("name", "tempo");

        pocoTempoDiv.appendChild(tempoLabel);
        pocoTempoDiv.appendChild(tempoInput);

        divProva.appendChild(data1);
        divProva.appendChild(data2);
        divProva.appendChild(pocoTempoDiv);

        var select = document.getElementById("select-variazioni");
        
        select.appendChild(divProva);

        data2.addEventListener('change', function() {
            var selectedValue = this.value;
            var pocoTempo = document.getElementById(pocoTempoId); // Ottieni l'elemento successivo dopo la select
            if (selectedValue === "Poco tempo") {
                pocoTempo.style.display = "block";
            } else {
                pocoTempo.style.display = "none";
            }
        });
    }
    else {
        document.querySelector(".add").style.pointerEvents = "none";
        alert("Massimo 7 giorni");
    }
    var elemento = document.getElementById("calendario-div");
    var altezzaAttuale = parseInt(elemento.style.height) || window.innerHeight * 0.01 * 100;
    var nuovaAltezza = altezzaAttuale + 10;
    elemento.style.height = nuovaAltezza + "px";
}

var selects = document.querySelectorAll('[name="variazione"]');

selects.forEach(function(select) {
    select.addEventListener('change', function() {
        console.log(select);
        var selectedValue = this.value;
        var pocoTempo = this.nextElementSibling; // Ottieni l'elemento successivo dopo la select
        if (selectedValue === "poco tempo") {
            pocoTempo.style.display = "block";
        } else {
            pocoTempo.style.display = "none";
        }
    });
});

document.getElementById("calendario").addEventListener("submit", function(event) {

    event.preventDefault();

    var divs = document.querySelectorAll("#box-data");

    // Array per memorizzare i contenuti degli input
    var contenutiInputData = [];
    var contenutiInputSelect = [];
    var contenutiInputTempo = [];

    // Itera su tutte le div
    divs.forEach(function(div) {
        // Trova tutti gli input all'interno della div corrente
        var inputsData = div.querySelectorAll("input[type='date']");
        var inputsSelect = div.querySelectorAll("select[name='variazione']");
        var inputsTempo = div.querySelectorAll("input[type='number']");

        // Itera su tutti gli input
        inputsData.forEach(function(input) {
            // Aggiungi il contenuto dell'input all'array
            contenutiInputData.push(input.value);
        });
        inputsSelect.forEach(function(input) {
            // Aggiungi il contenuto dell'input all'array
            contenutiInputSelect.push(input.value);
        });
        inputsTempo.forEach(function(input) {
            // Aggiungi il contenuto dell'input all'array
            contenutiInputTempo.push(input.value);
        });
    });

    document.getElementById("contenutiInputData").value = JSON.stringify(contenutiInputData);
    document.getElementById("contenutiInputSelect").value = JSON.stringify(contenutiInputSelect);
    document.getElementById("contenutiInputTempo").value = JSON.stringify(contenutiInputTempo);

    event.target.submit();
});