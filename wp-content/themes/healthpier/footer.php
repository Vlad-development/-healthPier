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
                        <?php echo do_shortcode('[contact-form-7 id="8f73d5a" title="Подписка"]'); ?>
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
            <?php echo do_shortcode('[contact-form-7 id="837c159" title="Модальное Окно"]'); ?>
        </div>
    </div>


    <div class="modalThanks">
        <div class="modalThanks-block">
        <svg width="100%" height="100%" viewBox="0 0 600 249" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1183 294.688C1003.27 320.164 849.629 334.06 751.067 273.844C652.506 213.628 643.809 167.308 487.27 169.624C330.73 171.94 226.371 222.892 156.798 141.832C87.2246 60.772 119.112 -34.184 -22.9327 -75.872C-164.978 -117.56 -40.326 -263.468 -220.056 -326" stroke="#235189" stroke-opacity="0.5"/>
            <path d="M1183 346.798C1003.27 372.274 849.629 386.17 751.067 325.954C652.506 265.738 643.809 219.418 487.27 221.734C330.73 224.05 226.371 275.002 156.798 193.942C87.2246 112.882 119.112 17.9263 -22.9327 -23.7617C-164.978 -65.4497 -40.326 -211.358 -220.056 -273.89" stroke="#235189" stroke-opacity="0.5"/>
            <path d="M1168.51 395.434C988.776 420.91 835.135 434.806 736.573 374.59C638.011 314.374 629.315 268.054 472.775 270.37C316.236 272.686 211.877 323.638 142.304 242.578C72.7305 161.518 104.618 66.5621 -37.4268 24.8741C-179.472 -16.8139 -54.8201 -162.722 -234.55 -225.254" stroke="#235189" stroke-opacity="0.5"/>
            <path d="M1167.06 439.438C987.326 464.914 833.686 478.81 735.124 418.594C636.562 358.378 627.866 312.058 471.326 314.374C314.787 316.69 210.427 367.642 140.854 286.582C71.2813 205.522 103.169 110.566 -38.8761 68.878C-180.921 27.19 -56.2693 -118.718 -236 -181.25" stroke="#235189" stroke-opacity="0.5"/>
        </svg>


            <button type="buttton" class="btn modalThanks-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                    <path d="M7.09668 21.2402L21.012 6.8749" stroke="#009A93" stroke-width="2"/>
                    <path d="M21.5566 20.8579L7.1913 6.94255" stroke="#009A93" stroke-width="2"/>
                </svg>
            </button>

            <div class="modalThanks-text">
            Спасибо за заявку!
Мы свяжемся с вами в ближайшее время
            </div>
        </div>
    </div>
</div><!-- #page -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
