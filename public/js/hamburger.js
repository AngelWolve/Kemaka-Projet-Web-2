/***************
** MENU HAMBURGER
***************/

const hamburger = document.querySelector(".hamburger")
const menuListe = document.querySelector(".menu-liste")

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active")
    hamburger.style.alignItems = 'initial'
    menuListe.classList.toggle("active")
    menuListe.style.display = menuListe.style.display === 'block' ? 'none' : 'block' // Affiche/cache le menu
})

document.querySelectorAll(".lien").forEach((n) =>
    n.addEventListener("click", () => {
        hamburger.classList.remove("active")
        hamburger.style.alignItems = 'flex-end'
        menuListe.classList.remove("active")
    })
)




