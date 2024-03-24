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
        document.querySelector(".add").style.display = "none";
    }
}