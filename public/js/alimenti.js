var i = 0;

function addAlimento() {
        let data1 = document.createElement("input");
        let data2 = document.createElement("input");
        let divProva = document.createElement("div");
        
        divProva.setAttribute("id", "prova");

        i++;

        var nuovoAlimentoID = "nome-alimento" + i;
        var nuovaQuantitàID = "quantità-alimento" + i;

        data1.setAttribute("type", "text");
        data1.setAttribute("id", nuovoAlimentoID);
        data1.setAttribute("name", "nome-alimento");
        data1.setAttribute("placeholder", "Nome");

        data2.setAttribute("type", "text");
        data2.setAttribute("id", nuovaQuantitàID);
        data2.setAttribute("name", "quantità-alimento");
        data2.setAttribute("placeholder", "Grammi");

        divProva.appendChild(data1);
        divProva.appendChild(data2);
        
        document.getElementById("box-data").appendChild(divProva);

    var elemento = document.getElementById("sport-div");
    var altezzaAttuale = parseInt(elemento.style.height) || window.innerHeight * 0.01 * 100;
    var nuovaAltezza = altezzaAttuale + 33;
    elemento.style.height = nuovaAltezza + "px";
}