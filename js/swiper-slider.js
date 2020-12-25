let firstScreenSlider = new Swiper('.image-slider', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    disableOnInteraction: false,



    navigation: {
        nextEl: '.image-button-next',
        prevEl: '.image-button-prev',

    },
    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },
    on: {
        init() {
            this.el.addEventListener('mouseenter', () => {
                this.autoplay.stop();
            });

            this.el.addEventListener('mouseleave', () => {
                this.autoplay.start();
            });
        },
    },
});


var partnersSlider = new Swiper('.partners-slider', {
    slidesPerView: 5,
    spaceBetween: 10,
    loop: true,
    disableOnInteraction: false,



    navigation: {
        nextEl: '.partners-button-next',
        prevEl: '.partners-button-prev',
        nextEl: '.po-button-next',
        prevEl: '.po-button-prev',

    },

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    on: {
        init() {
            this.el.addEventListener('mouseenter', () => {
                this.autoplay.stop();
            });

            this.el.addEventListener('mouseleave', () => {
                this.autoplay.start();
            });
        },
    },


});