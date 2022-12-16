const selected = document.querySelector(".selected");
const optionsCaitener = document.querySelector(".options-container");

const optionList = document.querySelector(".option");

selected.addEventListener("click", () =>{
    optionsCaitener.classList.toggle("active");
});


optionList.addEventListener("click", () =>{
    const texte = document.querySelector(".radio").value
    console.log(texte)
    
    optionsCaitener.classList.remove("active");
});
