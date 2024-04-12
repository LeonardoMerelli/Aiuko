const pasti = document.querySelectorAll(".pasto");
let count = 0;

pasti.forEach((pasto) => {
    pasto.addEventListener("click", () => {
        pasto.classList.toggle("active");
        count++;
        if(count > 2)
            
        console.log(count)
    });
});