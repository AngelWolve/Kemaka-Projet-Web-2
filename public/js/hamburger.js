/***************
** MENU HAMBURGER
***************/
const hamburger = document.querySelector(".hamburger")
const menu_liste = document.querySelector(".menu-liste")

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active")
    hamburger.style.alignItems = 'initial'
    menu_liste.classList.toggle("active")
    menu_liste.style.display = menu_liste.style.display === 'block' ? 'none' : 'block'
})

document.querySelectorAll(".lien").forEach((n) =>
    n.addEventListener("click", () => {
        hamburger.classList.remove("active")
        hamburger.style.alignItems = 'flex-end'
        menu_liste.classList.remove("active")
    })
)
