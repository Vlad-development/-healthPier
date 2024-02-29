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
                        <a href="">
                            <img src="<?php bloginfo('template_directory') ?>/img/logo.svg" alt="">
                        </a>
                    </div>
                    <p class="footer-text">
                        Политика конфиденциальности ООО “ФЕТА” ©2024 Все права защищены Лицензия №
                    </p>
                </div>
                <div class="footer__right">
                    <div class="footer-block">
                        <div class="footer-block__title">Меню</div>
                        <ul class="footer-block__menu">
                            <li>
                                <a href="">Программы
                                    </a>
                            </li>
                            <li>
                                <a href="">Процедуры
                                   </a>
                            </li>
                            <li>
                                <a href=""> О нас
                                    </a>
                            </li>
                            <li>
                                <a href="">
                                    Новости и акции
                                   </a>
                            </li>
                            <li>
                                <a href=""> Команда
                                  </a>
                            </li>
                            <li>
                                <a href="">  Контакты</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-block">
                        <div class="footer-block__title">Прораммы</div>
                        <ul class="footer-block__menu">
                            <li>
                                <a href="">Детокс
                                    </a>
                            </li>
                            <li>
                                <a href="">Оздоровление
                                    </a>
                            </li>
                            <li>
                                <a href="">Очищение</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-block">
                        <div class="footer-block__title">Популярные услуги</div>
                        <ul class="footer-block__menu">
                            <li>
                                <a href="">Эндосфера
                                    </a>
                            </li>
                            <li>
                                <a href="">Мезотерапия
                                    </a>
                            </li>
                            <li>
                                <a href="">Прессотерапия
                                    </a>
                            </li>
                            <li>
                                <a href="">Массаж
                                    </a>
                            </li>
                            <li>
                                <a href="">
                                    Криолиполиз</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </footer>
</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
