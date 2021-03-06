import $ from 'jquery'
import 'slick-carousel'
import 'slick-carousel/slick/slick.css'

class SliderImages extends window.HTMLDivElement {
  constructor (self) {
    self = super(self)
    self.$ = $(self)
    self.resolveElements()
    self.setOptions()
    return self
  }

  resolveElements () {
    this.$slider = $('.slider', this)
  }

  setOptions () {
    this.slickOptions = {
      dots: false,
      infinite: false,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            dots: true
          }
        }
      ]
    }
  }

  connectedCallback () {
    this.$slider.not('.slick-initialized').slick(this.slickOptions)
  }
}

window.customElements.define('flynt-slider-images', SliderImages, { extends: 'div' })
