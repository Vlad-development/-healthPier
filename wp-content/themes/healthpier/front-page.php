<?php 
/*
Template Name: Главная страница
Template Post Type:  page
*/
?>
  
   <?php get_header()?>
   
    <main class="homePage"> 
        <section class="offer"> 

            <div class="container">
                
                <div class="offer-slider">
                    <div class="offer-slider__slid swiper-wrapper">
                        <?php if( have_rows('slajdy') ): ?>
                                <?php while( have_rows('slajdy') ): the_row(); 
                                    $text = get_sub_field('tekst');
                                    $img = get_sub_field('izobrazhenie');
                                    $ssylka_na_straniczu = get_sub_field('ssylka_na_straniczu');
                                    
                                ?>
                                <div class="swiper-slide">
                                    <div class="offer__title">
                                        <?php echo $text; ?>
                                    </div>
                                    <img src="<?php echo $img; ?>" alt="">

                                    <a href="<?php echo $ssylka_na_straniczu; ?>" class="offer__btn btn-main">Подробнее
                                        <svg xmlns="http://www.w3.org/2000/svg" width="31" height="32" viewBox="0 0 31 32" fill="none">
                                            <circle cx="15.5" cy="16" r="15" stroke="#FDFDFF"/>
                                            <path d="M10.5 15.5L20.5 15.5M20.5 15.5L17.8684 18M20.5 15.5L17.8684 13" stroke="#FDFDFF"/>
                                            </svg>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="offer-slider__button">
                        <button type="button" class="btn offer-slider__arrow offer-slider__arrow_prev swiper-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="98" height="76" viewBox="0 0 98 76" fill="none">
                                    <rect width="98" height="76" fill="#FDFDFF"/>
                                    <path d="M56 29L42 38L56 47" stroke="#235189"/>
                                  </svg>
                            </button>
                        <button type="button" class="btn offer-slider__arrow offer-slider__arrow_next swiper-button-next ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="98" height="76" viewBox="0 0 98 76" fill="none">
                                    <rect width="98" height="76" fill="#FDFDFF"/>
                                    <path d="M42 47L56 38L42 29" stroke="#235189"/>
                                  </svg>
                            </button>
                    </div>
                </div>

                

                <ul class="offer-menu">
                    <li>
                        <a href="https://pierhouse.ru/" target="_blank">ОТЕЛЬ</a>
                    </li>
                    <li>
                        <a href="https://pierhouse.ru/restaurant/" target="_blank">РЕСТОРАН</a>
                    </li>
                </ul>
            </div>

            <div class="offer-icons">
                <svg width="100%" height="100%" viewBox="0 0 1366 742" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-18 574.688C158.87 600.164 310.066 614.06 407.059 553.844C504.053 493.628 512.611 447.308 666.659 449.624C820.708 451.94 923.407 502.892 991.873 421.832C1060.34 340.772 1028.96 245.816 1168.74 204.128C1308.53 162.44 1185.86 16.532 1362.73 -46" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M-18 626.798C158.87 652.274 310.066 666.17 407.059 605.954C504.053 545.738 512.611 499.418 666.659 501.734C820.708 504.05 923.407 555.002 991.873 473.942C1060.34 392.882 1028.96 297.926 1168.74 256.238C1308.53 214.55 1185.86 68.6421 1362.73 6.11011" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M-3.73633 675.434C173.134 700.91 324.33 714.806 421.323 654.59C518.316 594.374 526.875 548.054 680.923 550.37C834.971 552.686 937.67 603.638 1006.14 522.578C1074.6 441.518 1043.22 346.562 1183.01 304.874C1322.79 263.186 1200.12 117.278 1376.99 54.7458" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M-2.31006 719.438C174.56 744.914 325.756 758.81 422.749 698.594C519.743 638.378 528.301 592.058 682.349 594.374C836.398 596.69 939.097 647.642 1007.56 566.582C1076.03 485.522 1044.65 390.566 1184.43 348.878C1324.22 307.19 1201.55 161.282 1378.42 98.75" stroke="#235189" stroke-opacity="0.5"/>
                </svg>
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
                <div class="benefits-icons">
                    <svg width="100%" height="100%" viewBox="0 0 1366 1173" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M189.686 1045.23C346.143 992.688 476.92 941.724 534.788 856.005C592.655 770.285 551.214 656.009 680 595C808.786 533.991 944.355 606.476 970.687 516.394C997.019 426.313 935.212 366.266 1035.59 277.318C1135.96 188.37 979.171 126.446 1102.49 6.39471" stroke="#235189" stroke-opacity="0.5"/>
<path d="M209.305 1085.2C365.762 1032.66 496.539 981.695 554.407 895.975C612.275 810.255 582.714 697.009 711.5 636C840.286 574.991 963.974 646.447 990.306 556.365C1016.64 466.284 954.831 406.237 1055.21 317.289C1155.58 228.34 998.79 166.417 1122.11 46.3657" stroke="#235189" stroke-opacity="0.5"/>
<path d="M239.461 1116.7C395.917 1064.15 526.695 1013.19 584.562 927.468C642.43 841.748 604.214 738.509 733 677.5C861.786 616.491 994.129 677.939 1020.46 587.858C1046.79 497.776 984.986 437.73 1085.36 348.781C1185.74 259.833 1028.95 197.91 1152.27 77.8583" stroke="#235189" stroke-opacity="0.5"/>
<path d="M257.212 1149.87C413.669 1097.32 544.446 1046.36 602.314 960.64C660.181 874.92 624.214 783.509 753 722.5C881.786 661.491 1011.88 711.111 1038.21 621.03C1064.54 530.948 1002.74 470.902 1103.11 381.954C1203.49 293.005 1046.7 231.082 1170.02 111.03" stroke="#235189" stroke-opacity="0.5"/>
</svg>


                </div>
                <div class="benefits__wrap">
                    <?php if( have_rows('preimushhestvo') ): ?>
                            <?php while( have_rows('preimushhestvo') ): the_row(); 
                                $title = get_sub_field('zagolovok');
                                $text = get_sub_field('tekst');
                                $link = get_sub_field('ssylka');
                                $img = get_sub_field('kartinka');
                            ?>
                            <div class="benefits-card">
                                <div class="benefits-card__content">
                                    <h2><?php echo $title; ?></h2>
        
                                    <p>
                                      <?php echo $text; ?>
                                    </p>
        
                                    <a href="<?php echo $link; ?>" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                            <circle cx="30" cy="30" r="29.5" stroke="#235189"/>
                                            <path d="M17.5864 29.9999H42.414M42.414 29.9999L35.8804 23.793M42.414 29.9999L35.8804 36.2068" stroke="#235189"/>
                                          </svg>
                                    </a>
                                </div>
                                <div class="benefits-card__img">
                                    <img src="<?php echo $img; ?>" alt="">
                                </div>
                            </div>
                           <?php endwhile; ?>
                    <?php endif; ?>

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

            <div class="program-icons">
            <svg width="100%" height="100%" viewBox="0 0 1366 1656" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-5.15381 413.244C103.391 573.515 202.067 705.281 317.007 743.848C431.947 782.416 472.72 758.555 582.104 884.934C691.487 1011.31 727.503 1128.41 837.436 1130C947.37 1131.6 995.666 1043.03 1127.63 1128.6C1259.6 1214.16 1280.11 1017.74 1454.39 1119.5" stroke="#235189" stroke-opacity="0.5"/>
                <path d="M-44.0786 447.89C64.4661 608.161 163.142 739.926 278.082 778.494C393.022 817.061 433.795 793.201 543.179 919.579C652.562 1045.96 688.578 1163.06 798.512 1164.65C908.445 1166.24 956.741 1077.68 1088.71 1163.24C1220.67 1248.81 1241.18 1052.39 1415.47 1154.15" stroke="#235189" stroke-opacity="0.5"/>
                <path d="M-70.1201 491.784C38.4246 652.055 137.1 783.821 252.041 822.388C366.981 860.956 407.754 837.095 517.137 963.474C626.521 1089.85 662.536 1206.95 772.47 1208.54C882.404 1210.14 930.699 1121.57 1062.66 1207.14C1194.63 1292.7 1215.14 1096.28 1389.42 1198.04" stroke="#235189" stroke-opacity="0.5"/>
                <path d="M-101.961 522.196C6.58331 682.467 105.259 814.233 220.199 852.8C335.14 891.368 375.912 867.507 485.296 993.886C594.679 1120.26 630.695 1237.37 740.629 1238.96C850.562 1240.55 898.858 1151.99 1030.82 1237.55C1162.79 1323.11 1183.3 1126.7 1357.58 1228.46" stroke="#235189" stroke-opacity="0.5"/>
            </svg>

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
   <?php 
   $block_counter = 1;
   foreach( $featured_posts as $post ): 
      // Проверяем, является ли устройство мобильным
      if (wp_is_mobile()) {
         // Если мобильное, то определяем классы в соответствии с новой логикой
         $block_class = ($block_counter % 4 == 2 || $block_counter % 4 == 3) ? 'big' : 'mini';
      } else {
         // Иначе используем вашу текущую логику для десктопной версии
         if ($block_counter == 1) {
            $block_class = 'mini';
         } else {
            $block_class = ($block_counter % 4 == 2 || $block_counter % 4 == 3) ? 'big' : 'mini';
         }
      }
      setup_postdata($post); ?>
      <div class="service__item <?= $block_class; ?>">
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
      <?php 
      $block_counter++;
   endforeach; ?>
   </div>
   <?php 
   wp_reset_postdata(); ?>
<?php endif; ?>


                <a href="/proczedury/" class="service__btn btn-more">
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
                        <h2 class="h2"><?php the_field('about_zagolovok'); ?></h2>
                        <p><?php the_field('about_tekst'); ?></p>
                        <img src="<?php the_field('about_kartinka'); ?>" alt="">
                    </div>
                    <div class="about__right">
                        <ul class="about-list">
                            <?php while( have_rows('informaczionnye_bloki') ): the_row(); 
                    			$ikonka = get_sub_field('ikonka');
                    			$zagolovok = get_sub_field('zagolovok');
                    			$teks = get_sub_field('teks');
                    		?>
                    		<li>
                                <img src="<?php echo $ikonka; ?>" alt="">
                                <h3><?php echo $zagolovok; ?></h3>
                                <p>
                                   <?php echo $teks; ?>
                                </p>
                            </li>
                    	   <?php endwhile; ?>
                            
                           
                        </ul>
                        <a href="https://pierhouse.ru/" target="_blank" class="btn about__btn btn-more">Подробнее
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
            <div class="about-icons">
                <svg width="100%" height="100%" viewBox="0 0 1244 1119" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M159.051 957.796C336.544 937.098 486.252 911.787 564.577 828.727C642.901 745.667 639.304 698.7 788.803 661.464C938.301 624.228 1050.63 647.162 1096.04 551.264C1141.44 455.366 1086.78 371.622 1211.21 295.506C1335.65 219.39 1179.69 109.788 1334.63 4.02044" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M172.404 1008.17C349.897 987.469 499.605 962.157 577.93 879.097C656.254 796.037 652.657 749.07 802.156 711.834C951.654 674.598 1063.98 697.532 1109.39 601.634C1154.8 505.736 1100.13 421.992 1224.57 345.876C1349 269.76 1193.04 160.158 1347.98 54.3906" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M198.655 1051.52C376.148 1030.83 525.856 1005.51 604.18 922.453C682.505 839.393 678.908 792.427 828.406 755.191C977.904 717.955 1090.23 740.889 1135.64 644.991C1181.05 549.093 1126.38 465.349 1250.82 389.233C1375.25 313.117 1219.29 203.514 1374.23 97.7473" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M211.31 1093.69C388.803 1072.99 538.511 1047.68 616.835 964.623C695.16 881.563 691.563 834.596 841.061 797.36C990.559 760.124 1102.89 783.058 1148.29 687.16C1193.7 591.262 1139.04 507.518 1263.47 431.402C1387.91 355.286 1231.95 245.684 1386.89 139.917" stroke="#235189" stroke-opacity="0.5"/>
                </svg>

            </div>
        </section>

        <section class="news">
            <div class="container">
                <h2 class="news__title h2">
                    Новости
                </h2>

                <div class="news-wrap">
                    <?php 
                        $args = array(
                            'numberposts' => wp_is_mobile() ? 10 : 3,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, 
                        );
                        $posts = get_posts( $args );
                        foreach($posts as $post) { setup_postdata($post); ?>
                            <a href="<?php the_permalink();?>" class="news-card">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="news-card__img">
                                <div class="news-card__block">
                                    <h2 class="news-card__title">
                                        <?php the_title(); ?>
                                    </h2>
                                    <div class="news-card__text">
                                        <?php 
                                        $post_content = get_the_content();
                                        $trimmed_content = wp_trim_words($post_content, 20, '...');
                                        echo $trimmed_content;
                                        ?>
                                    </div>
                                    <div class="news-card__date">
                                        <?php echo get_the_date('d.m.Y'); ?>
                                    </div>
                                    <div class="news-card__icon">
                                        <svg width="26.000000" height="22.000000" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path id="share icon" d="M12.6831 14.8823L10.1465 14.8823C8.06592 14.8816 6.0249 15.4611 4.24365 16.5581C2.4624 17.6553 1.00928 19.2283 0.0405273 21.1071C0.0131836 20.7583 0 20.4087 0 20.0588C0 12.9114 5.67822 7.11768 12.6831 7.11768L12.6831 0L26 11L12.6831 22L12.6831 14.8823ZM10.1465 12.2941L15.2197 12.2941L15.2197 16.5751L21.9683 11L15.2197 5.42493L15.2197 9.70593L12.6831 9.70593C11.2246 9.70422 9.7832 10.024 8.45752 10.6433C7.13184 11.2627 5.95264 12.1671 5.00098 13.2944C6.63867 12.6322 8.38477 12.2927 10.1465 12.2941Z" fill="#163152" fill-opacity="1.000000" fill-rule="nonzero"/>
                                        </svg>
                                    </div>
                                </div>
                            </a>

                        <?php }
                        wp_reset_postdata();          
                    ?>
                </div>
        </section>

        <section class="grafic">
            <div class="container">
                <h2 class="h2 grafic__title">График заездов</h2>
               <div class="grafic-table-wrap">
                    <div class="grafic-table">
                        <div class="grafic-table__head">
                            <span>Название программы</span>
                            <span>Длительность</span>
                            <span>Дни заезда</span>
                            <span>Примечание</span>
                        </div>
                        <div class="grafic-table__content">
                            <?php while( have_rows('grafik') ): the_row(); 
                                    $nazvanie_programmy = get_sub_field('nazvanie_programmy');
                                    $dlitelnost = get_sub_field('dlitelnost');
                                    $dni_zaezda = get_sub_field('dni_zaezda');
                                    $primechanie = get_sub_field('primechanie');
                                ?>
                                <div class="grafic-table__row">
                                    <div class="grafic-table__column">
                                       <?php echo $nazvanie_programmy; ?>
                                    </div>
                                    <div class="grafic-table__column">
                                        <?php echo $dlitelnost; ?>
                                    </div>
                                    <div class="grafic-table__column">
                                       <?php echo $dni_zaezda; ?>
                                    </div>
                                    <div class="grafic-table__column">
                                       <?php echo $primechanie; ?>
                                    </div>
                                </div>
                           <?php endwhile; ?>
                            
                            
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
                        <?php the_field('karta', 110); ?>
                    </div>

                    <div class="contact__content">
                        <h2 class="h2">Контакты</h2>

                        <ul class="contact-list">
                            <li>
                                <span>Адрес:</span>
                                <p> <?php the_field('adress', 110); ?></p>
                            </li>
                            <li>
                                <span>Телефон:</span>
                                <a href="tel: <?php the_field('telefon', 110); ?>"> <?php the_field('telefon', 110); ?></a>
                            </li>
                            <li>
                                <span>E-mail:</span>
                                <a href="mailto: <?php the_field('e-mail', 110); ?>"> <?php the_field('e-mail', 110); ?></a>
                            </li>
                        </ul>

                        <div class="contact-social">
                            <span>Мы в социальных сетях:</span>

                            <ul>
                                <li>
                                    <a href=" <?php the_field('vk', 110); ?>" target="_blank">
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
                                    <a href=" <?php the_field('telegram', 110); ?>" target="_blank">
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
            <div class="contact-icons">
                <svg width="100%" height="100%" viewBox="0 0 1366 721" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-62 567.911C126.597 591.18 287.816 603.872 391.24 548.873C494.664 493.874 503.79 451.567 668.051 453.683C832.313 455.798 941.82 502.336 1014.83 428.299C1087.83 354.262 1054.37 267.533 1203.42 229.457C1352.47 191.381 1221.67 58.1142 1410.27 1" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M-62 615.506C126.597 638.775 287.816 651.467 391.24 596.468C494.664 541.469 503.79 499.163 668.051 501.278C832.313 503.393 941.82 549.931 1014.83 475.894C1087.83 401.857 1054.37 315.128 1203.42 277.052C1352.47 238.976 1221.67 105.709 1410.27 48.5952" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M-46.7905 659.928C141.806 683.197 303.026 695.889 406.45 640.89C509.873 585.891 518.999 543.585 683.261 545.7C847.522 547.815 957.03 594.353 1030.03 520.316C1103.04 446.279 1069.58 359.55 1218.63 321.474C1367.68 283.398 1236.88 150.131 1425.48 93.0171" stroke="#235189" stroke-opacity="0.5"/>
                    <path d="M-45.27 700.12C143.327 723.389 304.546 736.081 407.97 681.082C511.394 626.083 520.52 583.776 684.781 585.892C849.043 588.007 958.55 634.544 1031.56 560.507C1104.56 486.471 1071.1 399.742 1220.15 361.665C1369.2 323.589 1238.4 190.323 1427 133.209" stroke="#235189" stroke-opacity="0.5"/>
                </svg>

            </div>
        </section>
    </main>
    
    <?php get_footer()?>