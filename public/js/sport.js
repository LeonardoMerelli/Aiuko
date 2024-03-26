function addDate() {
    if(document.querySelectorAll('input[id="data-allenamento"]').length < 7) {
        let data = document.createElement("input");

        data.setAttribute("type", "date");
        data.setAttribute("id", "data-allenamento");
        data.setAttribute("name", "data-allenamento");
    
        // Append the "li" node to the list:
        document.getElementById("box-data").appendChild(data);
    }
    else {
        document.querySelector(".add").style.pointerEvents = "none";
    }
    var elemento = document.getElementById("sport-div");
    var altezzaAttuale = parseInt(elemento.style.height) || window.innerHeight * 0.01 * 100;
    var nuovaAltezza = altezzaAttuale + 30;
    elemento.style.height = nuovaAltezza + "px";
}