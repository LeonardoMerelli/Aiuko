
const lunchButton = document.querySelector(".go-to-lunch")
const dinnerButton = document.querySelector(".go-to-dinner")
const dinnerButtonHide = document.querySelector(".go-to-dinner-hide")
const confirmButton = document.querySelector(".confirm-button")

var flag = 0;
function reloadScript(){
  var oldScript = document.querySelector("script[src='/js/multi-selection-menu.js']");
    if (oldScript) {
        oldScript.remove();
    }

    var newScript = document.createElement("script");
    newScript.src = "/js/multi-selection-menu.js";
    document.head.appendChild(newScript);
}

dinnerButton.addEventListener("click", () => {
  reloadScript();
  document.querySelector(".meal-div.lunch").style.display = "none";
  document.querySelector(".meal-div.dinner").style.display = "block";
  dinnerButtonHide.style.display = "none";
  dinnerButton.classList.add("hide");
  lunchButton.classList.remove("hide");
  confirmButton.classList.remove("hide")
  reloadScript();
  if (flag === 0) {
    flag = 1;
    reloadScript();
  }
})

lunchButton.addEventListener("click", () => {
  reloadScript();
  document.querySelector(".meal-div.lunch").style.display = "block";
  document.querySelector(".meal-div.dinner").style.display = "none";
  dinnerButtonHide.style.display = "block";
  dinnerButton.classList.remove("hide");
  lunchButton.classList.add("hide");
  confirmButton.classList.add("hide");
  reloadScript();
})