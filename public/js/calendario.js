function addDateMotivo() {
    if(document.querySelectorAll('input[id="data-calendario"]').length < 7) {

        var box = document.getElementById("box-data");
        var select = document.getElementById("select-variazioni");

        var clonedDiv = box.cloneNode(true);

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