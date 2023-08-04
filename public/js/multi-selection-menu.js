
var i=0;
var itemArray = [];
var optionArray = [];

var itemDiffArray = [];
var optionDiffArray = [];


var selectMeal = document.querySelectorAll(".meal-div");
var selectElement1 = document.querySelectorAll(".custom-select");
var selectElement2 = document.querySelectorAll(".diff-select");

selectElement1.forEach(item => {
  item.style.display = "none";
})
selectElement2.forEach(item => {
  item.style.display = "none";
})

var submitButton = document.querySelector(".confirm-button");
submitButton.classList.add("disabled");



function select(itemElement) {
  const index = itemArray.indexOf(itemElement);

  optionArray[index].selected = true;
  itemElement.classList.add("selected");
}

function deselect(itemElement) {
  const index = itemArray.indexOf(itemElement);

  optionArray[index].selected = false;
  itemElement.classList.remove("selected");
}

function deselectOther(itemElement)  {
  const index = itemArray.indexOf(itemElement);
  
  for(i = 0; i < itemArray.length; i++)
  {
    if (i !== index) {
      itemArray[i].classList.remove("selected");
      optionArray[i].selected = false;
    }
  }
}

function selectDiff(itemElement) {
  const index = itemDiffArray.indexOf(itemElement);

  optionDiffArray[index].selected = true;
  itemElement.classList.add("selected");
}

function deselectDiff(itemElement) {
  const index = itemDiffArray.indexOf(itemElement);

  optionDiffArray[index].selected = false;
  itemElement.classList.remove("selected");
}

function deselectOtherDiff(itemElement)  {
  const index = itemDiffArray.indexOf(itemElement);
  
  for(i = 0; i < itemDiffArray.length; i++)
  {
    if (i !== index) {
      itemDiffArray[i].classList.remove("selected");
      optionDiffArray[i].selected = false;
    }
  }
}


document.querySelectorAll(".meal-div").forEach(meal => {

  if (getComputedStyle(meal).display !== 'none') {

    meal.querySelectorAll(".custom-select").forEach(customDiv => {
      i=0;
      customDiv.querySelectorAll("option").forEach(optionItem => {
        optionArray[i] = optionItem;
        i++;
      })
    })

    meal.querySelectorAll(".select-div").forEach(selectDiv => {
      i=0;
      selectDiv.querySelectorAll(".select-item").forEach(selectItem => {
        itemArray[i] = selectItem;
        i++;

        selectItem.addEventListener("click",()=> {
          if(selectItem.classList.contains("selected")) {
            deselect(selectItem);
          }
          else {
            select(selectItem);
            deselectOther(selectItem);
          }
        })
      })
    })

    meal.querySelectorAll(".diff-select").forEach(customDiv => {
      i=0;
      customDiv.querySelectorAll("option").forEach(optionItem => {
        optionDiffArray[i] = optionItem;
        i++;
      })
    })

    meal.querySelectorAll(".difficulty-div").forEach(selectDiv => {
      i=0;
      selectDiv.querySelectorAll(".difficulty-button").forEach(selectItem => {
        itemDiffArray[i] = selectItem;
        i++;

        selectItem.addEventListener("click",()=> {
          if(selectItem.classList.contains("selected")) {
            deselectDiff(selectItem);
          }
          else {
            selectDiff(selectItem);
            deselectOtherDiff(selectItem);
          }
        })
      })
    })
  }
})
