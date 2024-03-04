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