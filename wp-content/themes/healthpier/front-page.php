  <?php 
/*
Template Name: Главная страница
Template Post Type:  page
*/
?>
  
   <?php get_header()?>
   
    <main>
        <section class="offer">

            <div class="container">
                <div class="offer__title">
                    <h1>
                        <span>ОЗДОРОВЛЕНИЕ</span> ПРОГРАММА НА 7 ДНЕЙ
                    </h1>
                </div>
                <div class="offer-slider">
                    <div class="offer-slider__slid">
                        <img src="<?php bloginfo('template_directory') ?>/img/offer-img.jpg" alt="">
                        <img src="<?php bloginfo('template_directory') ?>/img/offer-img.jpg" alt="">
                        <img src="<?php bloginfo('template_directory') ?>/img/offer-img.jpg" alt="">
                        <img src="<?php bloginfo('template_directory') ?>/img/offer-img.jpg" alt="">
                    </div>

                    <div class="offer-slider__button">
                        <button type="button" class="btn offer-slider__arrow offer-slider__arrow_prev ">
								<svg xmlns="http://www.w3.org/2000/svg" width="98" height="76" viewBox="0 0 98 76" fill="none">
									<rect width="98" height="76" fill="#FDFDFF"/>
									<path d="M56 29L42 38L56 47" stroke="#235189"/>
								  </svg>
							</button>
                        <button type="button" class="btn offer-slider__arrow offer-slider__arrow_next ">
								<svg xmlns="http://www.w3.org/2000/svg" width="98" height="76" viewBox="0 0 98 76" fill="none">
									<rect width="98" height="76" fill="#FDFDFF"/>
									<path d="M42 47L56 38L42 29" stroke="#235189"/>
								  </svg>
							</button>
                    </div>
                </div>

                <button type="button" class="offer__btn btn-main">Подробнее
						<svg xmlns="http://www.w3.org/2000/svg" width="31" height="32" viewBox="0 0 31 32" fill="none">
							<circle cx="15.5" cy="16" r="15" stroke="#FDFDFF"/>
							<path d="M10.5 15.5L20.5 15.5M20.5 15.5L17.8684 18M20.5 15.5L17.8684 13" stroke="#FDFDFF"/>
						  </svg>
					</button>

            </div>

        </section>

        <section class="quote">
            <div class="container">
                <div class="quote__block">
                    Клиника для комплексного оздоровления, коррекции веса и омоложения в Ленинградской области на берегу Финского залива вблизи Меншиковского дворца на базе комфортного отеля
                </div>
            </div>
        </section>

        <section class="benefits">
            <div class="container">
                <div class="benefits__wrap">
                    <div class="benefits-card">
                        <div class="benefits-card__content">
                            <h2>Современный отель 3*</h2>

                            <p>
                                Расположен в историческом месте г. Ломоносов вблизи дворца Меншикова
                            </p>

                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
									<circle cx="30" cy="30" r="29.5" stroke="#235189"/>
									<path d="M17.5864 29.9999H42.414M42.414 29.9999L35.8804 23.793M42.414 29.9999L35.8804 36.2068" stroke="#235189"/>
								  </svg>
                            </a>
                        </div>
                        <div class="benefits-card__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/benefits-img.jpg" alt="">
                        </div>
                    </div>

                    <div class="benefits-card">
                        <div class="benefits-card__content">
                            <h2>Современный отель 3*</h2>

                            <p>
                                Расположен в историческом месте г. Ломоносов вблизи дворца Меншикова
                            </p>

                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
									<circle cx="30" cy="30" r="29.5" stroke="#235189"/>
									<path d="M17.5864 29.9999H42.414M42.414 29.9999L35.8804 23.793M42.414 29.9999L35.8804 36.2068" stroke="#235189"/>
								  </svg>
                            </a>
                        </div>
                        <div class="benefits-card__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/benefits-img.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="program">
            <div class="container">
                <h2 class="h2 text-center">
                    Программы
                </h2>

                <div class="program__grid">
                    <?php 
                        $args = array(
                            'numberposts' => -1,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'program',
                            'suppress_filters' => true, 
                        );
                        $posts = get_posts( $args );
                        foreach($posts as $post) { setup_postdata($post); ?>
                            <div class="program-card">
                                <h3 class="program-card__title"><?php the_title();?></h3>

                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="program-card__img">

                                <div class="program-card__content">
                                    <?php the_field('kratkoe_opisanie'); ?>
                                </div>

                                <div class="program-card__price">
                                    <span>Стоимость:</span>
                                    <span><?php the_field('czena'); ?> ₽</span>
                                </div>

                                <a href="<?php the_permalink();?>" class="program-card__link btn-main">
                                    Подробнее
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                        <g clip-path="url(#clip0_3455_1406)">
                                            <path d="M7.45298 2.77023L7.453 3.77815L11.9381 3.77817L1.98874 13.7276L2.70147 14.4403L12.6509 4.4909L12.6509 8.97601L13.6588 8.97604L13.6588 2.7702L7.45298 2.77023Z" fill="white" stroke="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3455_1406">
                                            <rect width="16" height="16" fill="white" transform="translate(0 0.427063)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        <?php }
                        wp_reset_postdata();          
                    ?>
                </div>
            </div>
        </section>

        <section class="service">
            <div class="container">
                <h2 class="h2 text-center">
                    Популярные услуги
                </h2>

                <?php
                    $featured_posts = get_field('vyberete_uslugi_kotorye_budut_vyvoditsya_na_sajte');
                    if( $featured_posts ): ?>
                       <div class="service__list">
                        <?php foreach( $featured_posts as $post ): 
                            setup_postdata($post); ?>
                            <div class="service__item">
                                <div class="service-card">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                                    <a href="<?php the_permalink(); ?>" class="service-card__link">
                                        <?php the_title();?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                            <circle cx="30" cy="30" r="29.5" stroke="#235189" />
                                            <path d="M17.5864 30H42.414M42.414 30L35.8804 23.7931M42.414 30L35.8804 36.2069" stroke="#235189" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>
                        <?php 
                        wp_reset_postdata(); ?>
                <?php endif; ?>

                <a href="" class="service__btn btn-more">
                    Смотреть все

                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7567_41)">
                        <path d="M7.45298 2.34317L7.453 3.35108L11.9381 3.35111L1.98874 13.3005L2.70147 14.0132L12.6509 4.06384L12.6509 8.54895L13.6588 8.54898L13.6588 2.34314L7.45298 2.34317Z" fill="#009A93" stroke="#009A93"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_7567_41">
                        <rect width="16" height="16" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        
                </a>
            </div>
        </section>

        <section class="about">
            <div class="container">
                <div class="about__wrap">
                    <div class="about__left">
                        <h2 class="h2">Об отеле</h2>
                        <p>Отель расположен на южном побережье Финского залива в одном из красивейших мест Ленинградской области - Ораниенбауме. Есть удобная парковка. Недалеко от отеля находится пляж.</p>
                        <img src="<?php bloginfo('template_directory') ?>/img/about-img.jpg" alt="">
                    </div>
                    <div class="about__right">
                        <ul class="about-list">
                            <li>
                                <img src="<?php bloginfo('template_directory') ?>/img/icon-kitchen.svg" alt="">
                                <h3>Изысканная кухня</h3>
                                <p>
                                    Сбалансированное вкусное меню от нашего шеф-повара
                                </p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory') ?>/img/icon-relax.svg" alt="">
                                <h3>Комфортный отдых</h3>
                                <p>
                                    После процедур вы можете провести время по своему вкусу
                                </p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory') ?>/img/icon-comfort.svg" alt="">
                                <h3>Полный комфорт</h3>
                                <p>
                                    Удобные номера с большими кроватями
                                </p>
                            </li>
                            <li>
                                <img src="<?php bloginfo('template_directory') ?>/img/icon-accompanying.svg" alt="">
                                <h3>Сопровождение врачей</h3>
                                <p>
                                    Наши доктора консультируют и сопровождают
                                </p>
                            </li>
                        </ul>
                        <a href="" class="btn about__btn btn-more">Подробнее
                            <svg width="16.000000" height="16.000000" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <clipPath id="clip6_49">
                                        <rect id="right-arrow 1" width="16.000000" height="16.000000" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <rect id="right-arrow 1" width="16.000000" height="16.000000" fill="#FFFFFF" fill-opacity="0"/>
                                <g clip-path="url(#clip6_49)">
                                    <path id="Vector" d="M7.45312 2.3429L7.45312 3.35083L11.938 3.35089L1.98877 13.3003L2.70166 14.013L12.6509 4.0636L12.6509 8.54871L13.6587 8.54871L13.6587 2.3429L7.45312 2.3429Z" fill="#009A93" fill-opacity="1.000000" fill-rule="nonzero"/>
                                    <path id="Vector" d="M7.45312 3.35083L11.938 3.35089L1.98877 13.3003L2.70166 14.013L12.6509 4.0636L12.6509 8.54871L13.6587 8.54871L13.6587 2.3429L7.45312 2.3429L7.45312 3.35083Z" stroke="#009A93" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                </g>
                            </svg>
                            
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <section class="news">
            <div class="container">
                <h2 class="news__title h2">
                    Новости
                </h2>

                <div class="news-wrap">
                    <div class="news-card">
                        <img src="<?php bloginfo('template_directory') ?>/img/news-photo.jpeg" alt="" class="news-card__img">

                        <div class="news-card__block">
                            <div class="news-card__subtitle">
                                Открываем новые программа
                            </div>
                            <h2 class="news-card__title">
                                Новые программы
                            </h2>
                            <div class="news-card__text">
                                тут анонс новости и еще несколько слов о том, как это важно тут анонс новости и еще несколько слов о том, как это важно тут анонс новости и еще несколько слов о том, как это важно
                            </div>
                            <div class="news-card__date">20.03.2024</div>

                            <div class="news-card__icon">
                                <svg width="26.000000" height="22.000000" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                            Created with Pixso.
                                    </desc>
                                    <defs/>
                                    <path id="share icon" d="M12.6831 14.8823L10.1465 14.8823C8.06592 14.8816 6.0249 15.4611 4.24365 16.5581C2.4624 17.6553 1.00928 19.2283 0.0405273 21.1071C0.0131836 20.7583 0 20.4087 0 20.0588C0 12.9114 5.67822 7.11768 12.6831 7.11768L12.6831 0L26 11L12.6831 22L12.6831 14.8823ZM10.1465 12.2941L15.2197 12.2941L15.2197 16.5751L21.9683 11L15.2197 5.42493L15.2197 9.70593L12.6831 9.70593C11.2246 9.70422 9.7832 10.024 8.45752 10.6433C7.13184 11.2627 5.95264 12.1671 5.00098 13.2944C6.63867 12.6322 8.38477 12.2927 10.1465 12.2941Z" fill="#163152" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg>

                            </div>
                        </div>

                    </div>
                    <div class="news-card">
                        <img src="<?php bloginfo('template_directory') ?>/img/news-photo.jpeg" alt="" class="news-card__img">

                        <div class="news-card__block">
                            <div class="news-card__subtitle">
                                Открываем новые программа
                            </div>
                            <h2 class="news-card__title">
                                Новые программы
                            </h2>
                            <div class="news-card__text">
                                тут анонс новости и еще несколько слов о том, как это важно тут анонс новости и еще несколько слов о том, как это важно
                            </div>
                            <div class="news-card__date">20.03.2024</div>

                            <div class="news-card__icon">
                                <svg width="26.000000" height="22.000000" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                            Created with Pixso.
                                    </desc>
                                    <defs/>
                                    <path id="share icon" d="M12.6831 14.8823L10.1465 14.8823C8.06592 14.8816 6.0249 15.4611 4.24365 16.5581C2.4624 17.6553 1.00928 19.2283 0.0405273 21.1071C0.0131836 20.7583 0 20.4087 0 20.0588C0 12.9114 5.67822 7.11768 12.6831 7.11768L12.6831 0L26 11L12.6831 22L12.6831 14.8823ZM10.1465 12.2941L15.2197 12.2941L15.2197 16.5751L21.9683 11L15.2197 5.42493L15.2197 9.70593L12.6831 9.70593C11.2246 9.70422 9.7832 10.024 8.45752 10.6433C7.13184 11.2627 5.95264 12.1671 5.00098 13.2944C6.63867 12.6322 8.38477 12.2927 10.1465 12.2941Z" fill="#163152" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg>

                            </div>
                        </div>

                    </div>
                    <div class="news-card">
                        <img src="<?php bloginfo('template_directory') ?>/img/news-photo.jpeg" alt="" class="news-card__img">

                        <div class="news-card__block">
                            <div class="news-card__subtitle">
                                Открываем новые программа
                            </div>
                            <h2 class="news-card__title">
                                Новые программы
                            </h2>
                            <div class="news-card__text">
                                тут анонс новости и еще несколько слов о том, как это важно тут анонс новости и еще несколько слов о том, как это важно
                                <div class="news-card__date">20.03.2024</div>

                                <div class="news-card__icon">
                                    <svg width="26.000000" height="22.000000" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <desc>
                                            Created with Pixso.
                                    </desc>
                                    <defs/>
                                    <path id="share icon" d="M12.6831 14.8823L10.1465 14.8823C8.06592 14.8816 6.0249 15.4611 4.24365 16.5581C2.4624 17.6553 1.00928 19.2283 0.0405273 21.1071C0.0131836 20.7583 0 20.4087 0 20.0588C0 12.9114 5.67822 7.11768 12.6831 7.11768L12.6831 0L26 11L12.6831 22L12.6831 14.8823ZM10.1465 12.2941L15.2197 12.2941L15.2197 16.5751L21.9683 11L15.2197 5.42493L15.2197 9.70593L12.6831 9.70593C11.2246 9.70422 9.7832 10.024 8.45752 10.6433C7.13184 11.2627 5.95264 12.1671 5.00098 13.2944C6.63867 12.6322 8.38477 12.2927 10.1465 12.2941Z" fill="#163152" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </svg>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>

        <section class="grafic">
            <div class="container">
                <h2 class="h2 grafic__title">График заездов</h2>

                <div class="grafic-table">
                    <div class="grafic-table__head">
                        <span>Название программы</span>
                        <span>Длительность</span>
                        <span>Дни заезда</span>
                        <span>Примечание</span>
                    </div>
                    <div class="grafic-table__content">
                        <div class="grafic-table__row">
                            <div class="grafic-table__column">
                                Экспресс
                            </div>
                            <div class="grafic-table__column">
                                3 дня
                            </div>
                            <div class="grafic-table__column">
                                Пятница - Воскресенье
                            </div>
                            <div class="grafic-table__column">
                                Еженедельно
                            </div>
                        </div>
                        <div class="grafic-table__row">
                            <div class="grafic-table__column">
                                Экспресс
                            </div>
                            <div class="grafic-table__column">
                                3 дня
                            </div>
                            <div class="grafic-table__column">
                                Пятница - Воскресенье
                            </div>
                            <div class="grafic-table__column">
                                Еженедельно
                            </div>
                        </div>
                        <div class="grafic-table__row">
                            <div class="grafic-table__column">
                                Экспресс
                            </div>
                            <div class="grafic-table__column">
                                3 дня
                            </div>
                            <div class="grafic-table__column">
                                Пятница - Воскресенье
                            </div>
                            <div class="grafic-table__column">
                                Еженедельно
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/specialists') ?>

        <section class="contact">
            <div class="container">
                <div class="contact__wrap">
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.7779194029954!2d29.771958077151286!3d59.919232974905356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4696440e11016503%3A0x7f0503fc1388817e!2z0L3QsNCxLiDQodC40LTQvtGA0L7QstGB0LrQvtCz0L4g0JrQsNC90LDQu9CwLCAzLCDQodCw0L3QutGCLdCf0LXRgtC10YDQsdGD0YDQsywg0KDQvtGB0YHQuNGPLCAxOTg0MTI!5e0!3m2!1sru!2sua!4v1707688093320!5m2!1sru!2sua"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact__content">
                        <h2 class="h2">Контакты</h2>

                        <ul class="contact-list">
                            <li>
                                <span>Адрес:</span>
                                <p>г. Ломоносов, наб.Сидоровского канала, 3</p>
                            </li>
                            <li>
                                <span>Телефон:</span>
                                <a href="">+7 (812) 362-07-07</a>
                            </li>
                            <li>
                                <span>E-mail:</span>
                                <a href=""></a>
                            </li>
                        </ul>

                        <div class="contact-social">
                            <span>Мы в социальных сетях:</span>

                            <ul>
                                <li>
                                    <a href="">
                                        <svg width="40.000000" height="40.000000" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                       
                                            <defs>
                                                <clipPath id="clip3457_133">
                                                    <rect id="Tilda_Icons_26snw_vk" width="27.000000" height="15.000000" transform="translate(6.000000 14.000000)" fill="white" fill-opacity="0"/>
                                                </clipPath>
                                            </defs>
                                            <path id="back" d="M40 20C40 31.0457 31.0459 40 20 40C8.9541 40 0 31.0457 0 20C0 8.95435 8.9541 0 20 0C31.0459 0 40 8.95435 40 20ZM27.2939 37.6086Q23.9351 39 20 39Q16.0649 39 12.7061 37.6089Q9.34766 36.2175 6.56494 33.4351Q3.78271 30.6526 2.39111 27.2937Q1 23.9351 1 20Q1 16.0649 2.39111 12.7063Q3.78271 9.34741 6.56494 6.56494Q9.34766 3.78247 12.7061 2.39136Q16.0649 1 20 1Q23.9351 1 27.2935 2.39111Q30.6523 3.78247 33.4351 6.56494Q36.2173 9.34741 37.6089 12.7061Q39 16.0649 39 20Q39 23.9351 37.6089 27.2937Q36.2173 30.6526 33.4351 33.4351Q30.6523 36.2175 27.2939 37.6086Z" fill="#009A93" fill-opacity="1.000000" fill-rule="evenodd"/>
                                            <rect id="Tilda_Icons_26snw_vk" width="27.000000" height="15.000000" transform="translate(6.000000 14.000000)" fill="#FFFFFF" fill-opacity="0"/>
                                            <g clip-path="url(#clip3457_133)">
                                                <path id="Vector" d="M32.8579 27.5461C32.8252 27.4778 32.7944 27.4204 32.7661 27.375C32.2974 26.5537 31.4023 25.5452 30.0811 24.3496L30.0527 24.3225L30.0391 24.3086L30.0249 24.2954L30.0112 24.2954C29.4111 23.7385 29.0317 23.3643 28.8726 23.1724C28.582 22.8079 28.5161 22.4382 28.6758 22.0642C28.7886 21.7812 29.2104 21.1836 29.9409 20.2708C30.3252 19.7876 30.6299 19.3999 30.855 19.1069C32.4761 17.0083 33.1787 15.6672 32.9634 15.0828L32.8789 14.946C32.8223 14.8635 32.6772 14.7883 32.4429 14.72C32.2085 14.6516 31.9087 14.6409 31.5435 14.686L27.4951 14.7141C27.4014 14.7048 27.3076 14.7073 27.2134 14.7205C27.1196 14.7344 27.0591 14.748 27.0308 14.7617C27.0024 14.7756 26.9795 14.7869 26.9604 14.7957L26.9043 14.8369C26.8574 14.864 26.8057 14.9121 26.7495 14.981C26.6934 15.0493 26.646 15.1289 26.6089 15.2205C26.1685 16.3247 25.6675 17.3511 25.105 18.3005C24.7583 18.8662 24.4395 19.3569 24.1494 19.772C23.8589 20.1875 23.6152 20.4932 23.4185 20.6887C23.2217 20.8848 23.0435 21.043 22.8843 21.1609C22.7246 21.28 22.603 21.3296 22.519 21.3118C22.4346 21.2937 22.3545 21.2754 22.2798 21.2566C22.1489 21.1746 22.043 21.0627 21.9634 20.9211C21.8838 20.78 21.8301 20.6021 21.8018 20.3875C21.7739 20.1731 21.7568 19.9883 21.7529 19.833C21.748 19.678 21.7505 19.459 21.7598 19.1763C21.769 18.8933 21.7739 18.7021 21.7739 18.6013C21.7739 18.2549 21.7808 17.8784 21.7949 17.4719C21.8091 17.0659 21.8208 16.7444 21.8301 16.5071C21.8394 16.2703 21.8438 16.019 21.8438 15.7542C21.8438 15.4902 21.8276 15.282 21.7944 15.1313C21.7617 14.981 21.7124 14.8352 21.647 14.6931C21.5815 14.552 21.4854 14.4424 21.3589 14.3652C21.2324 14.2876 21.0752 14.2258 20.8877 14.1804C20.3906 14.0708 19.7583 14.012 18.9902 14.0022C17.2471 13.9846 16.127 14.0942 15.6299 14.3311C15.4331 14.4319 15.2549 14.5684 15.0962 14.7419C14.9272 14.9429 14.9038 15.0527 15.0259 15.0701C15.5884 15.1526 15.9863 15.3489 16.2207 15.6589L16.3052 15.823C16.3706 15.9421 16.436 16.1519 16.502 16.4526C16.5679 16.7539 16.6094 17.0867 16.6284 17.4519C16.6753 18.1182 16.6753 18.6882 16.6284 19.1631C16.5815 19.6379 16.5371 20.0071 16.4951 20.2712C16.4526 20.5359 16.3892 20.75 16.3052 20.9146C16.2207 21.0793 16.1646 21.1797 16.1362 21.2161C16.1079 21.2524 16.085 21.2754 16.0659 21.2844C15.9438 21.3296 15.8179 21.3528 15.6865 21.3528C15.5552 21.3528 15.396 21.2888 15.208 21.1609C15.021 21.0337 14.8262 20.8577 14.6245 20.634C14.4229 20.4109 14.1963 20.0979 13.9429 19.6963C13.6895 19.2949 13.4272 18.8206 13.1558 18.2729L12.9307 17.8757C12.79 17.6204 12.5981 17.2483 12.3545 16.7603C12.1108 16.2722 11.895 15.8 11.7075 15.3433C11.6323 15.1521 11.5205 15.0061 11.3701 14.9053L11.3003 14.864C11.2534 14.8276 11.1782 14.7888 11.0747 14.748C10.9712 14.7068 10.8643 14.6772 10.7515 14.6587L6.8999 14.686C6.50635 14.686 6.23926 14.7732 6.09863 14.9465L6.04248 15.0286C6.01416 15.0745 6 15.1477 6 15.2478C6 15.3484 6.02832 15.4712 6.08447 15.6169C6.64697 16.9038 7.2583 18.1448 7.91895 19.3398C8.58008 20.5356 9.15381 21.4985 9.6416 22.2283C10.1289 22.9587 10.6255 23.6472 11.1318 24.2954C11.6377 24.9434 11.9727 25.3582 12.1367 25.5408C12.3003 25.7234 12.4292 25.8604 12.5234 25.9514L12.8745 26.2803C13.0991 26.4993 13.4302 26.7617 13.8657 27.0671C14.3013 27.3733 14.7837 27.6741 15.3135 27.9702C15.8428 28.2671 16.4595 28.5083 17.1616 28.6958C17.8647 28.8831 18.5488 28.9583 19.2139 28.9214L20.8306 28.9214C21.1592 28.8943 21.4072 28.7942 21.5757 28.6204L21.6318 28.5518C21.6694 28.4976 21.7046 28.4126 21.7373 28.2991C21.77 28.1851 21.7866 28.0593 21.7866 27.9226C21.7769 27.53 21.8076 27.176 21.8779 26.8616C21.9482 26.5469 22.0278 26.3096 22.1172 26.1494C22.2065 25.9902 22.3066 25.8555 22.4194 25.7458C22.5322 25.6362 22.6113 25.5706 22.6587 25.5474C22.7056 25.5251 22.7432 25.509 22.7715 25.4995C22.9961 25.4268 23.2607 25.4976 23.5654 25.7114C23.8701 25.9263 24.1558 26.1904 24.4229 26.5056C24.6899 26.8203 25.0107 27.1736 25.3857 27.5664C25.7607 27.959 26.0884 28.2507 26.3701 28.4421L26.6514 28.6072C26.8389 28.7163 27.0825 28.8167 27.3823 28.9082C27.6821 28.999 27.9448 29.0222 28.1694 28.9768L31.7681 28.9214C32.1245 28.9214 32.4009 28.8647 32.5977 28.7502C32.7944 28.637 32.9116 28.5107 32.9492 28.3738C32.9863 28.2371 32.9888 28.0825 32.9561 27.9087C32.9233 27.7354 32.8901 27.6145 32.8579 27.5461Z" fill="#000000" fill-opacity="1.000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="40.000000" height="40.000000" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                       
                                            <defs>
                                                <clipPath id="clip3457_135">
                                                    <rect id="Tilda_Icons_26snw_telegram" width="26.000000" height="22.000000" transform="translate(5.000000 10.000000)" fill="white" fill-opacity="0"/>
                                                </clipPath>
                                            </defs>
                                            <path id="back" d="M40 20C40 31.0457 31.0459 40 20 40C8.9541 40 0 31.0457 0 20C0 8.95435 8.9541 0 20 0C31.0459 0 40 8.95435 40 20ZM27.2939 37.6086Q23.9351 39 20 39Q16.0649 39 12.7061 37.6089Q9.34766 36.2175 6.56494 33.4351Q3.78271 30.6526 2.39111 27.2937Q1 23.9351 1 20Q1 16.0649 2.39111 12.7063Q3.78271 9.34741 6.56494 6.56494Q9.34766 3.78247 12.7061 2.39136Q16.0649 1 20 1Q23.9351 1 27.2935 2.39111Q30.6523 3.78247 33.4351 6.56494Q36.2173 9.34741 37.6089 12.7061Q39 16.0649 39 20Q39 23.9351 37.6089 27.2937Q36.2173 30.6526 33.4351 33.4351Q30.6523 36.2175 27.2939 37.6086Z" fill="#009A93" fill-opacity="1.000000" fill-rule="evenodd"/>
                                            <rect id="Tilda_Icons_26snw_telegram" width="26.000000" height="22.000000" transform="translate(5.000000 10.000000)" fill="#FFFFFF" fill-opacity="0"/>
                                            <g clip-path="url(#clip3457_135)">
                                                <path id="Vector" d="M30.1743 10.041L5.37939 19.3643C4.87988 19.5557 4.87256 20.3208 5.35986 20.5403L11.7114 23.1096L14.0767 30.4683C14.2173 30.8645 14.7183 30.9978 15.0415 30.7246L18.6743 27.3899L25.5811 31.9082C25.9395 32.1292 26.4116 31.9294 26.4956 31.521L30.9863 10.7166C31.082 10.2537 30.6206 9.87012 30.1743 10.041ZM15.2432 24.5032L14.8398 28.2859L12.9224 22.4629L26.4453 13.7034L15.2432 24.5032Z" fill="#000000" fill-opacity="1.000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>

                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php get_footer()?>