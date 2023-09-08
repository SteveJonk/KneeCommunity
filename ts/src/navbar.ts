const openButton = document.getElementById('js__open-nav')
const closeButton = document.getElementById('js__close-nav')
const navBar = document.getElementById('js__nav')

openButton.addEventListener('click', () => {
  navBar.classList.add('open')
})

closeButton.addEventListener('click', () => {
  navBar.classList.remove('open')
})

export {}
