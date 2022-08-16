// Gestion du sticky du header.
$(document).ready(function(){
    window.addEventListener("scroll" , function(){
        var header = document.querySelector(".header")
        var text = document.querySelector(".navigation")
        var hover = document.querySelector(".hover")
        var logo = document.querySelector(".logo")
        header.classList.toggle("sticky", window.scrollY > 0)
        text.classList.toggle("text", window.scrollY > 0)
        hover.classList.toggle("active", window.scrollY > 0)
        logo.classList.toggle("active", window.scrollY > 0)
    })

    //Fléche pour remonter en haute de page.
    const btn = document.querySelector('.btn');
    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth"
        })
    })

});


