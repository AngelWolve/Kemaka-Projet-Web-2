let miniatures = document.querySelectorAll('.miniatures li a')

let imgBoiteImage = document.querySelector('.imgBoite img')

miniatures.forEach(miniature => {
    miniature.addEventListener('click', (e) => {
        e.preventDefault()

        const imgSrc = miniature.getAttribute('href')

        imgBoiteImage.setAttribute('src', imgSrc)
    })
})

////////////////////// COUNTDOWN /////////////////////////////

let endDate = new Date("2024-06-14T23:59:59").getTime()

let countdown = setInterval(function(){
    let now = new Date().getTime()
    let timeLeft = endDate - now

    if (timeLeft < 0) {
        clearInterval(countdown)
        document.querySelector('#countdown').innerHTML = "AsiaQuest ouvre ses portes maintenant!"
    } else {
        let jours = Math.floor(timeLeft / (1000 * 60 * 60 * 24))
        let heures = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
        let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60))
        let secondes = Math.floor((timeLeft % (1000 * 60)) / 1000)

        document.querySelector('#jours').textContent = String(jours).padStart(2, '0');
        document.querySelector('#heures').textContent = String(heures).padStart(2, '0');
        document.querySelector('#minutes').textContent = String(minutes).padStart(2, '0');
        document.querySelector('#secondes').textContent = String(secondes).padStart(2, '0');
    }
}, 1000)
