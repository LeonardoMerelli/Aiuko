var i = 0;
function addDateMotivo() {
    if(document.querySelectorAll('input[id="data-calendario"]').length < 7) {

        var box = document.getElementById("box-data");
        var select = document.getElementById("select-variazioni");
        i++;
        var clonedDiv = box.cloneNode(true);
        clonedDiv.id = i;

        select.appendChild(clonedDiv);

    }
    else {
        document.querySelector(".add").style.pointerEvents = "none";
    }
    var elemento = document.getElementById("calendario-div");
    var altezzaAttuale = parseInt(elemento.style.height) || window.innerHeight * 0.01 * 100;
    var nuovaAltezza = altezzaAttuale + 10;
    elemento.style.height = nuovaAltezza + "px";
}

document.getElementById("variazione").addEventListener("change", function() {
    var selectedValue = this.value;
    var pocoTempo = document.getElementById("poco-tempo");
    if (selectedValue === "poco tempo") {
        if (pocoTempo.style.display === "none") {
            pocoTempo.style.display = "block";
        }
    } else {
        pocoTempo.style.display = "none";
    }
});