(function() {

    var Menu = (function() {
        var burger = document.querySelector('.burger');
        var menu = document.querySelector('.menu');
        var menuList = document.querySelector('.menu_list');
        var brand = document.querySelector('.menu_brand');
        var menuItems = document.querySelectorAll('.menu_item');

        var active = false;

        var toggleMenu = function() {
            if (!active) {
                menu.classList.add('menu--active');
                menuList.classList.add('menu_list--active');
                brand.classList.add('menu_brand--active');
                burger.classList.add('burger--close');
                for (var i = 0, ii = menuItems.length; i < ii; i++) {
                    menuItems[i].classList.add('menu_item--active');
                }

                active = true;
            } else {
                menu.classList.remove('menu--active');
                menuList.classList.remove('menu_list--active');
                brand.classList.remove('menu_brand--active');
                burger.classList.remove('burger--close');
                for (var i = 0, ii = menuItems.length; i < ii; i++) {
                    menuItems[i].classList.remove('menu_item--active');
                }

                active = false;
            }
        };

        var bindActions = function() {
            burger.addEventListener('click', toggleMenu, false);
        };

        var init = function() {
            bindActions();
        };

        return {
            init: init
        };

    }());

    Menu.init();

}());

// Testimonials slider
// var flkty = new Flickity( '.main-gallery', {
//     cellAlign: 'left',
//     contain: true,
//     wrapAround: true,
//     prevNextButtons: false,
//     autoPlay: 5000,
//   });