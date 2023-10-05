/***************
** CARROUSEL D'IMAGES
***************/
let miniatures = document.querySelectorAll('.miniatures li a')

let imgBoiteImage = document.querySelector('.imgBoite img')

miniatures.forEach(miniature => {
    miniature.addEventListener('click', (e) => {
        e.preventDefault()

        const imgSrc = miniature.getAttribute('href')

        imgBoiteImage.setAttribute('src', imgSrc)
    })
})
