var Flickity = require('flickity');

const CONFIG = {
    ELEM : '.slider__carousel',
};

const Slider = {
    init() {
        const { ELEM } = CONFIG;
        this.elem = document.querySelector(ELEM);
        if(this.elem) {
            this.slider =  new Flickity( ELEM, {
                pageDots: true,
                prevNextButtons: false,
            });
    
            this.slider.resize();
        }
    },

    resize() {
        if(this.elem) {
            this.slider.resize();
        }
    },
};

export default Slider;