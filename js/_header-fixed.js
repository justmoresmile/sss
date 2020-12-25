let header = document.querySelector('.header');
let headerLink = document.querySelectorAll('.header__link');
let headerFixed = document.querySelector('.header-fixed');



window.onscroll = function showHeader() {
    let Y = window.pageYOffset


    if (Y > 0) {
        header.classList.add('header-fixed');
        if (Y < 300) {

            header.classList.remove('header-fixed');
        }
    }
};