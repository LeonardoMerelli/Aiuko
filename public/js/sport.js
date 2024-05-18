var j = 0;

function addDate() {
    if(document.querySelectorAll('input[type="date"]').length < 7) {
        let data = document.createElement("input");
        let select = document.createElement("select");
        let divProva = document.createElement("span");

        divProva.setAttribute("id", "box-data");

        j++;

        var dataAllenamento= "data-allenamento-sport" + j;
        var quandoSport = "quando-sport" + j;

        data.setAttribute("type", "date");
        data.setAttribute("id", dataAllenamento);
        data.setAttribute("name", "data-allenamento-sport");
    
        select.setAttribute("id", quandoSport);
        select.setAttribute("name", "quando-sport");

        var opzioni = ["Mattina", "Pomeriggio", "Sera"];

        opzioni.forEach(function(testoOpzione) {
            var opzione = document.createElement("option");
            opzione.text = testoOpzione;
            opzione.value = testoOpzione;
            if(testoOpzione === "Mattina") {
                opzione.selected = true;
            }
            select.appendChild(opzione);
        });

        divProva.appendChild(data);
        divProva.appendChild(select);
        document.getElementById("contenitore-date-sport").appendChild(divProva);
    }
    else {
        document.querySelector(".add").style.pointerEvents = "none";
        alert("Massimo 7 giorni");
    }
    var elemento = document.getElementById("sport-div");
    var altezzaAttuale = parseInt(elemento.style.height) || window.innerHeight * 0.01 * 100;
    var nuovaAltezza = altezzaAttuale + 30;
    elemento.style.height = nuovaAltezza + "px";
}


document.getElementById("sport").addEventListener("submit", function(event) {

    event.preventDefault();

    var divs = document.querySelectorAll("#box-data");

    // Array per memorizzare i contenuti degli input
    var contenutiInputData = [];
    var contenutiInputSelectLivello = [];
    var contenutiInputSelectQuando = [];

    // Itera su tutte le div
    divs.forEach(function(div) {
        // Trova tutti gli input all'interno della div corrente
        var inputsData = div.querySelectorAll("input[type='date']");
        var inputsSelectLivello = div.querySelectorAll("select[name='quando-sport'");
        var inputsSelectQuando = div.querySelectorAll("select[name='diet[]'");

        // Itera su tutti gli input
        inputsData.forEach(function(input) {
            // Aggiungi il contenuto dell'input all'array
            contenutiInputData.push(input.value);
        });
        inputsSelectLivello.forEach(function(input) {
            // Aggiungi il contenuto dell'input all'array
            contenutiInputSelectLivello.push(input.value);
        });
        inputsSelectQuando.forEach(function(input) {
            // Aggiungi il contenuto dell'input all'array
            contenutiInputSelectQuando.push(input.value);
        });
    });

    document.getElementById("contenutiInputData").value = JSON.stringify(contenutiInputData);
    document.getElementById("contenutiInputSelectLivello").value = JSON.stringify(contenutiInputSelectLivello);
    document.getElementById("contenutiInputSelectQuando").value = JSON.stringify(contenutiInputSelectQuando);

    event.target.submit();
});