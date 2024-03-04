<?php 
/*
Template Name: О нас
Template Post Type:  page
*/
?>
  
   <?php get_header()?>
    <main>
        <section class="aboutPage">
            <div class="container">
                <div class="aboutPage__wrap">
                    <div class="aboutPage__block">
                        <h1 class="h1">О клинике</h1>
                        <div>
                            <p>
                                Клиника для комплексного оздоровления, коррекции веса и омоложения в Ленинградской области на берегу Финского залива вблизи Меншиковского дворца на базе комфортного отеля. Мы имеем медицинскую лицензию и все необходимые сертификаты. С вами работает команда
                                профессионалов, которая поддерживает вас на каждом этапе пребывания у нас в гостях.
                            </p>

                            <button type="button" class=" btn-main">Записаться


                                <svg width="100%" height="100%" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <circle id="back" cx="15.500000" cy="15.500000" r="15.000000" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                    <path id="arrow" d="M10.5 15L20.5 15M17.8682 12.5L20.5 15L17.8682 17.5" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                </svg>
                                
                            </button>
                        </div>
                    </div>
                    <img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg" alt="" class="aboutPage__img">
                </div>
            </div>
        </section>

        <section class="gallery">
            <div class="container">
                <div class="gallery__grid">
                    <img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg" alt="">
                    <img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg" alt="">
                    <img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg" alt="">
                    <img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="licenses">
            <div class="container">
                <h2 class="licenses__title h2 text-center">Лицензии </h2>
                <div class="licenses_grid">
                    <a href=""><img src="<?php bloginfo('template_directory') ?>/img/licenses.jpeg" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_directory') ?>/img/licenses.jpeg" alt=""></a>
                    <a href=""><img src="<?php bloginfo('template_directory') ?>/img/licenses.jpeg" alt=""></a>
                </div>
            </div>
        </section>



        <section class="specialists">
            <div class="container">
                <div class="specialists__wrap">
                    <div class="specialists-content">
                        <h2 class="specialists-content__title h2">
                            Остались вопросы? Наши специалисты с удовольствием вам помогут.
                        </h2>
                        <p class="specialists-content__text">
                            Заполните форму ниже и мы свяжемся с вами в ближайшее время
                        </p>
                        <div class="specialists-form">
                            <div class="specialists-form__fields">
                                <label>
                                <span>Имя</span>
                                <input type="text" placeholder="Ирина">
                            </label>
                                <label>
                                <span>Телефон</span>
                                <input type="text" placeholder="+7 999 555 66 77">
                            </label>
                                <label>
                                <span>E-mail</span>
                                <input type="text" placeholder="Example@mail.com">
                            </label>
                            </div>
                            <div class="specialists-form__checkbox">
                                <label>
                                <input type="checkbox">
                                <span>Я даю согласие на обработку персональных данных</span>
                            </label>
                            </div>
                            <button type="button" class="btn specialists-form__btn btn-main">Отправить</button>

                        </div>
                    </div>
                    <div class="specialists__img">
                        <img src="<?php bloginfo('template_directory') ?>/img/specialists-img.jpeg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer()?>