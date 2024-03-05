<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package healthpier
 */

?>

    <footer class="footer">
        <div class="container">
            <div class="footer__wrap">
                <div class="footer__left">
                    <div class="footer-logo">
                       <?php the_custom_logo();?>
                    </div>

                </div>
                <div class="footer__right">
                    <div class="footer-block">
                        <div class="footer-block__title">Меню</div>
                        <?php wp_nav_menu( array(
                            'theme_location'  => '',
                            'menu'            => 'Menu Footer',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'footer-block__menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => '',
                        ) ); ?>
                    </div>

                    <div class="footer-block">
                        <div class="footer-block__title">Прораммы</div>
                            <?php wp_nav_menu( array(
                                'theme_location'  => '',
                                'menu'            => 'Программы',
                                'container'       => false,
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'footer-block__menu',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ) ); ?>
                        
                    </div>

                    <div class="footer-form">
                        <div class="footer-form__title">
                            Подпишитесь на нашу рассылку
                        </div>
                        <div class="footer-form__text">
                            Мы будем присылать только самое важное, не чаще 1-2 раз в месяц
                        </div>

                        <div class="footer-form__block">
                            <input type="text" class="footer-form__field" placeholder="Введите вашу почту">

                            <div class="footer-form__btn btn-main">
                                <input type="submit" value="Подписаться">
                                <svg width="100%" height="100%" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <circle id="back" cx="15.500000" cy="15.500000" r="15.000000" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                    <path id="arrow" d="M10.5 15L20.5 15M17.8682 12.5L20.5 15L17.8682 17.5" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                </svg>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer-text">
                    <p>
                        Лицензия №78-01-003396
                    </p>
                    <a href=""> Политика конфиденциальности</a>
                </div>
                <span>
                    ООО “ФЕТА” ©2024 Все права защищены
                </span>
            </div>
        </div>

    </footer>

    <div class="modalForm">
        <div class="modalForm-block">
            <button type="button" class="btn modalForm__close">
                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.09668 21.2397L21.012 6.87441" stroke="#009A93" stroke-width="2"></path>
                <path d="M21.5566 20.8574L7.1913 6.94207" stroke="#009A93" stroke-width="2"></path>
                </svg>
            </button>
            <h2 class="modalForm-block__title">
                Оставьте свой телефон, и мы вас запишем
            </h2>

            <div class="modalForm-block__form">
                <label>
                    <span>Имя</span>
                    <input type="text" placeholder="Ирина">
                </label>

                <label>
                    <span>Телефон</span>
                    <input type="text" placeholder="+7 999 555 66 77">
                </label>

                <div class="modalForm-block__checkbox">
                    <input type="checkbox">
                    <span>Я даю согласие на обработку персональных данных</span>
                </div>
                <button type="submit" class="btn modalForm-block__btn">Отправить</button>
            </div>
        </div>
    </div>
</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
