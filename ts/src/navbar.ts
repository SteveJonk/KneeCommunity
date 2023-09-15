const openButton = document.getElementById('js__open-nav')
const closeButton = document.getElementById('js__close-nav')
const navBar = document.getElementById('js__nav')

openButton.addEventListener('click', (event) => {
  event.preventDefault()
  navBar.classList.add('open')
})

closeButton.addEventListener('click', (event) => {
  event.preventDefault()
  navBar.classList.remove('open')
})

export {}
