window.addEventListener('load', (ev) => {
    const mainImg = document.getElementById('main-img')
    const otherImgs = document.querySelectorAll('#other-imgs img')

    otherImgs.forEach((img) => {
        img.addEventListener('click', (ev) => {

            mainImg.src = img.src
            otherImgs.forEach((i) => i.classList.remove('border-gray-400'))
            img.classList.add('border-gray-400')
        })
    })
})
