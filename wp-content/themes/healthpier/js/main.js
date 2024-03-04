var swiper = new Swiper(".offer-slider", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

document.addEventListener("DOMContentLoaded", function() {
    var menuItems = document.querySelectorAll('li.menu-item-has-children');

    menuItems.forEach(function(item) {
        item.addEventListener('click', function() {
            var submenu = this.querySelector('.sub-menu');
            if (submenu) {
                submenu.classList.toggle('active');
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var mobMenu = document.querySelector('.mobMenu');
    var mobMenuCloseBtn = document.querySelector('.mobMenu__close');
    var openMenuBtn = document.querySelector('.openMenu');
    var mobMenuLinks = document.querySelectorAll('.mobMenu__list li a');

    function toggleMobMenu() {
        mobMenu.classList.toggle('active');
    }

    mobMenuCloseBtn.addEventListener('click', toggleMobMenu);
    openMenuBtn.addEventListener('click', toggleMobMenu);
    mobMenuLinks.forEach(function(link) {
        link.addEventListener('click', toggleMobMenu);
    });
});