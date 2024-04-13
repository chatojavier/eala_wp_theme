/* ---- START Menu Burger Button ---- */  
export var exportMenuBtn = function() {

    var menuBtn = document.querySelector('.menu-btn');
    var menuLinkContact = document.querySelector('.menu-nav__item .contact');
    var menuBtnBurger = document.querySelector('.menu-btn__burger');
    var nav = document.querySelector('.nav');
    var menuNav = document.querySelector('.menu-nav');
    var menuNavItem = document.querySelectorAll('.menu-nav__item');

    var showMenu = false; 

    menuBtn.addEventListener('click', function() {
        if (showMenu === false) {
            menuBtnBurger.classList.add('open');
            nav.classList.add('open');
            menuNav.classList.add('open');
            for(var i = 0; i < menuNavItem.length; i++) {
                menuNavItem[i].classList.add('open');
            };
            document.body.setAttribute('style', 'overflow: hidden');
            showMenu = true;
        } else {
            menuBtnBurger.classList.remove('open');
            nav.classList.remove('open');
            menuNav.classList.remove('open');
            for(var i = 0; i < menuNavItem.length; i++) {
                menuNavItem[i].classList.remove('open');
            };
            document.body.removeAttribute('style');
            showMenu = false;
        }
    });
}
/* ---- END Menu Burger Button ---- */  