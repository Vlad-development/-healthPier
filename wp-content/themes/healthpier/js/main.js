var swiper = new Swiper(".offer-slider", {
    slidesPerView: 1,
    loop: true,
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
    var mobMenuLinks = document.querySelectorAll('.mobMenu__list li:not(.menu-item-has-children) a');

    function toggleMobMenu() {
        mobMenu.classList.toggle('active');
    }

    mobMenuCloseBtn.addEventListener('click', toggleMobMenu);
    openMenuBtn.addEventListener('click', toggleMobMenu);
    mobMenuLinks.forEach(function(link) {
        link.addEventListener('click', toggleMobMenu);
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var openModal = document.querySelectorAll('.openModal');
    var openModalBtn = document.querySelector('.modalForm');
    var modalBtnCLose = document.querySelector('.modalForm__close');
    var btnOpenModal = document.querySelectorAll('.wp-block-button .wp-block-button__link');

    modalBtnCLose.addEventListener('click', function() {
        openModalBtn.classList.toggle('active');
    });

    btnOpenModal.forEach(function(btn) {
        btn.addEventListener('click', function() {
            openModalBtn.classList.toggle('active');
        });
    });

    openModal.forEach(function(btn) {
        btn.addEventListener('click', function() {
            openModalBtn.classList.toggle('active');
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var inputFields = document.querySelectorAll('input[type="text"][placeholder]');

    inputFields.forEach(function(inputField) {
        inputField.addEventListener('focus', function() {
            this.removeAttribute('placeholder');
        });

        inputField.addEventListener('blur', function() {
            if (!this.value.trim()) {
                this.setAttribute('placeholder', 'Ирина');
            }
        });
    });
});