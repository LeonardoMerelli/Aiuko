
let i=0;
//let count = 0;
const itemArray = [];
const optionArray = [];
const selectElement = document.querySelector(".custom-select");
selectElement.style.display = "none";
const submitButton = document.querySelector(".confirm-button");
submitButton.classList.add("disabled");

function select(itemElement) {
  const index = itemArray.indexOf(itemElement);
  const selectedText = itemElement.textContent.trim().toLowerCase();
  console.log(selectedText);
    if (selectedText === "nessuna" || selectedText === "onnivora" || selectedText === "vegana" || selectedText === "intensa" || selectedText === "moderata" || selectedText === "moltointensa") {
      // Deseleziona tutte le altre opzioni nella select
      itemArray.forEach(item => {
        if (item !== itemElement) {
          item.classList.remove("selected");
        }
      });
      optionArray.forEach(option => {
        option.selected = false;
      });
    } 
    else {
      // Seleziona l'opzione corrente
      itemElement.classList.add("selected");
      optionArray[index].selected = true;

      // Rimuove la selezione da "nessuna"
      itemArray.forEach(item => {
        if (item.textContent.trim().toLowerCase() === "nessuna" || item.textContent.trim().toLowerCase() === "onnivora" || item.textContent.trim().toLowerCase() === "vegana") {
          item.classList.remove("selected");
        }
      });
      optionArray.forEach(option => {
      if(option.textContent.trim().toLowerCase() === "nessuna" || option.textContent.trim().toLowerCase() === "onnivora" || option.textContent.trim().toLowerCase() === "vegana") {
        option.selected = false;
      }
    });
    }
  
  optionArray[index].selected = true;
  itemElement.classList.add("selected");
}

function deselect(itemElement) {
  const index = itemArray.indexOf(itemElement);
  
  optionArray[index].selected = false;
  itemElement.classList.remove("selected");
}

function toggleConfirmButton(){
  count = 0;
  optionArray.forEach(item => {
    if (item.selected){
      count++;
    }
  })
  
  if (count === 0){
    submitButton.classList.add("disabled");
  }
  else {
    submitButton.classList.remove("disabled");
  }
}



document.querySelectorAll(".custom-select").forEach(selectElement => {
  i=0;
  selectElement.querySelectorAll("option").forEach(optionElement => {
    optionArray[i] = optionElement;
    i++;
  })
});


document.querySelectorAll(".select-div").forEach(selectElementDiv => {
  i=0;
  selectElementDiv.querySelectorAll(".select-item").forEach(selectElementItem => {
    itemArray[i] = selectElementItem;
    i++;

    selectElementItem.addEventListener("click",()=> {
      if(selectElementItem.classList.contains("selected")) {
        deselect(selectElementItem);
      }
      else {
        select(selectElementItem);
      }
      toggleConfirmButton();
    })
  })
})

toggleConfirmButton();