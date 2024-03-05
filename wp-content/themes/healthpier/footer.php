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
                        <?php echo do_shortcode('[contact-form-7 id="e4e58f0" title="Подписка"]'); ?>
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
            <?php echo do_shortcode('[contact-form-7 id="59c4a51" title="Модальное Окно"]'); ?>
        </div>
    </div>
</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
