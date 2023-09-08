import Glide from '@glidejs/glide'

const carousel = document.querySelectorAll('.glide')

if (carousel.length > 0) {
  new Glide('.glide', {
    autoplay: 3000,
    gap: 20,
    type: 'carousel',
    perView: 3,
    peek: 5,
    breakpoints: {
      530: {
        perView: 1,
      },
    },
  })?.mount()
}

export {}
