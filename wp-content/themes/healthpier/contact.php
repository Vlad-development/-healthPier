<?php 
/*
Template Name: Контакты
Template Post Type:  page
*/
?>
  
   <?php get_header()?>
    <main>
    <section class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__block">
                <a href="/">Главная</a>
                <span></span>
                <a href="#"><?php the_title();?></a>
            </div>
        </div>
    </section>
        <section class="aboutPage contactPage">
            <div class="contactPage-icon">
            <svg width="100%" height="100%" viewBox="0 0 1366 649" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-21 481.688C158.73 507.164 312.371 521.06 410.933 460.844C509.494 400.628 518.191 354.308 674.73 356.624C831.27 358.94 935.629 409.892 1005.2 328.832C1074.78 247.772 1042.89 152.816 1184.93 111.128C1326.98 69.44 1202.33 -76.468 1382.06 -139" stroke="#235189" stroke-opacity="0.5"/>
            <path d="M-21 533.798C158.73 559.274 312.371 573.17 410.933 512.954C509.494 452.738 518.191 406.418 674.73 408.734C831.27 411.05 935.629 462.002 1005.2 380.942C1074.78 299.882 1042.89 204.926 1184.93 163.238C1326.98 121.55 1202.33 -24.3579 1382.06 -86.8899" stroke="#235189" stroke-opacity="0.5"/>
            <path d="M-6.50586 582.434C173.224 607.91 326.865 621.806 425.427 561.59C523.989 501.374 532.685 455.054 689.225 457.37C845.764 459.686 950.123 510.638 1019.7 429.578C1089.27 348.518 1057.38 253.562 1199.43 211.874C1341.47 170.186 1216.82 24.2778 1396.55 -38.2542" stroke="#235189" stroke-opacity="0.5"/>
            <path d="M-5.05664 626.438C174.674 651.914 328.314 665.81 426.876 605.594C525.438 545.378 534.134 499.058 690.674 501.374C847.213 503.69 951.573 554.642 1021.15 473.582C1090.72 392.522 1058.83 297.566 1200.88 255.878C1342.92 214.19 1218.27 68.282 1398 5.75" stroke="#235189" stroke-opacity="0.5"/>
            </svg>

            </div>
            <div class="container">
                <div class="aboutPage__wrap">
                    <div class="aboutPage__block">
                        <h1 class="h1"><?php the_title();?></h1>
                        <div>
                            <?php the_content();?>

                            <button type="button" class=" btn-main openModal">Записаться


                                <svg width="100%" height="100%" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <circle id="back" cx="15.500000" cy="15.500000" r="15.000000" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                    <path id="arrow" d="M10.5 15L20.5 15M17.8682 12.5L20.5 15L17.8682 17.5" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                </svg>
                                
                            </button>
                        </div>
                    </div>
                    <div class="aboutPage__img">
                         <?php the_field('karta'); ?>
                    </div>
                </div>
            </div>
        </section>


        <section class="contactBlock">
            <div class="container">
                <ul class="contactBlock__list">
                    <li>
                        <span>Адрес:</span>
                        <p> <?php the_field('adress'); ?></p>
                    </li>
                    <li>
                        <span>Телефон:</span>
                        <a href="tel: <?php the_field('telefon'); ?>"> <?php the_field('telefon'); ?></a>
                    </li>
                    <li>
                        <span>E-mail:</span>
                        <a href="mailto: <?php the_field('e-mail'); ?>"> <?php the_field('e-mail'); ?></a>
                    </li>
                </ul>

                <ul class="contactBlock__social">
                    <li>
                        <a href=" <?php the_field('vk'); ?>" target="_blank">
                            <svg width="100%" height="100%" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <clipPath id="clip3578_936">
                                        <rect id="Tilda_Icons_26snw_vk" width="45.900002" height="25.500000" transform="translate(10.200195 23.800049)" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <path id="back" d="M68 34C68 52.7776 52.7773 68 34 68C15.2227 68 0 52.7776 0 34C0 15.2224 15.2227 0 34 0C52.7773 0 68 15.2224 68 34ZM46.668 64.5835Q40.835 67 34 67Q27.165 67 21.332 64.5835Q15.498 62.1672 10.665 57.3345Q5.83301 52.502 3.41602 46.6682Q1 40.8345 1 34Q1 27.1655 3.41602 21.3318Q5.83301 15.498 10.665 10.6655Q15.498 5.83276 21.332 3.41626Q27.165 1 34 1Q40.835 1 46.668 3.41626Q52.502 5.83276 57.335 10.6655Q62.167 15.498 64.584 21.3318Q67 27.1655 67 34Q67 40.8345 64.584 46.6682Q62.167 52.5017 57.335 57.3345Q52.502 62.1672 46.668 64.5835Z" fill="#009A93" fill-opacity="1.000000" fill-rule="evenodd"/>
                                <rect id="Tilda_Icons_26snw_vk" width="45.900002" height="25.500000" transform="translate(10.200195 23.800049)" fill="#FFFFFF" fill-opacity="0"/>
                                <g clip-path="url(#clip3578_936)">
                                    <path id="Vector" d="M55.8584 46.8284C55.8027 46.7122 55.751 46.6147 55.7031 46.5374C54.9062 45.1411 53.3848 43.4265 51.1387 41.3945L51.0898 41.3481L51.0664 41.3245L51.043 41.302L51.0186 41.302C49.999 40.3552 49.3535 39.7195 49.083 39.3928C48.5898 38.7734 48.4775 38.145 48.749 37.509C48.9414 37.0283 49.6572 36.0122 50.9004 34.4602C51.5527 33.6387 52.0703 32.9797 52.4531 32.4819C55.21 28.9141 56.4043 26.6345 56.0381 25.6409L55.8945 25.4082C55.7988 25.2681 55.5508 25.1404 55.1533 25.0239C54.7549 24.9077 54.2451 24.8894 53.624 24.9661L46.7412 25.0137C46.582 24.998 46.4229 25.0022 46.2627 25.0247C46.1035 25.0483 46 25.0715 45.9521 25.0947C45.9043 25.1184 45.8652 25.1375 45.833 25.1526L45.7373 25.2227C45.6572 25.2688 45.5703 25.3503 45.4746 25.4673C45.3789 25.5837 45.2988 25.719 45.2354 25.8748C44.4873 27.7517 43.6348 29.4968 42.6787 31.1108C42.0889 32.0725 41.5469 32.907 41.0537 33.6121C40.5605 34.3188 40.1455 34.8384 39.8115 35.1709C39.4766 35.5042 39.1738 35.7727 38.9033 35.9734C38.6328 36.176 38.4248 36.2605 38.2822 36.2297C38.1387 36.1992 38.0029 36.168 37.876 36.136C37.6533 35.9966 37.4727 35.8069 37.3379 35.5662C37.2031 35.3259 37.1113 35.0234 37.0625 34.6589C37.0156 34.2942 36.9873 33.98 36.9795 33.7163C36.9717 33.4524 36.9756 33.0803 36.9922 32.5996C37.0078 32.1187 37.0156 31.7937 37.0156 31.6223C37.0156 31.0332 37.0273 30.3933 37.0518 29.7024C37.0752 29.012 37.0957 28.4653 37.1113 28.062C37.127 27.6594 37.1348 27.2322 37.1348 26.782C37.1348 26.3333 37.1074 25.9795 37.0508 25.7231C36.9951 25.4673 36.9111 25.2197 36.8008 24.9785C36.6885 24.7383 36.5254 24.552 36.3096 24.4207C36.0947 24.2888 35.8281 24.1841 35.5098 24.1064C34.6641 23.9202 33.5898 23.8203 32.2832 23.804C29.3203 23.7739 27.416 23.9602 26.5713 24.363C26.2373 24.5344 25.9336 24.7661 25.6631 25.0613C25.376 25.4028 25.3369 25.5898 25.5439 25.6191C26.5 25.759 27.1768 26.093 27.5752 26.6201L27.7188 26.8989C27.8301 27.1016 27.9414 27.458 28.0537 27.9695C28.165 28.4814 28.2363 29.0474 28.2686 29.6682C28.3486 30.8008 28.3486 31.7698 28.2686 32.5771C28.1895 33.3843 28.1133 34.012 28.042 34.4609C27.9697 34.9111 27.8623 35.2749 27.7188 35.5544C27.5752 35.8347 27.4805 36.0054 27.4316 36.0674C27.3838 36.1292 27.3447 36.168 27.3125 36.1836C27.1055 36.2605 26.8906 36.2998 26.667 36.2998C26.4434 36.2998 26.1729 36.1912 25.8545 35.9734C25.5352 35.7571 25.2041 35.458 24.8623 35.0776C24.5195 34.6982 24.1338 34.1665 23.7031 33.4836C23.2725 32.8015 22.8262 31.9949 22.3643 31.064L21.9824 30.3884C21.7432 29.9546 21.417 29.322 21.0029 28.4924C20.5889 27.6628 20.2217 26.8601 19.9033 26.0835C19.7754 25.7585 19.585 25.5103 19.3301 25.3389L19.21 25.2688C19.1309 25.207 19.0029 25.1409 18.8271 25.0715C18.6514 25.0015 18.4697 24.9512 18.2783 24.9199L11.7295 24.9661C11.0605 24.9661 10.6064 25.1145 10.3682 25.4089L10.2725 25.5483C10.2236 25.6265 10.2002 25.751 10.2002 25.9209C10.2002 26.0923 10.248 26.3013 10.3438 26.5488C11.2998 28.7366 12.3398 30.8462 13.4629 32.8777C14.5869 34.9104 15.5615 36.5474 16.3906 37.7878C17.2188 39.0298 18.0635 40.2002 18.9238 41.302C19.7842 42.4038 20.3535 43.1089 20.6328 43.4189C20.9111 43.73 21.1299 43.9624 21.29 44.1174L21.8867 44.6765C22.2686 45.0486 22.8311 45.4946 23.5713 46.0144C24.3125 46.5347 25.1328 47.0459 26.0332 47.5493C26.9326 48.054 27.9805 48.4639 29.1748 48.783C30.3701 49.1013 31.5332 49.229 32.6641 49.1665L35.4121 49.1665C35.9707 49.1204 36.3926 48.9502 36.6787 48.6543L36.7744 48.5381C36.8379 48.4456 36.8984 48.3015 36.9541 48.1084C37.0088 47.9146 37.0381 47.7009 37.0381 47.4683C37.0215 46.8013 37.0732 46.1992 37.1934 45.6648C37.3125 45.1294 37.4482 44.7261 37.5996 44.4541C37.751 44.1836 37.9209 43.9543 38.1133 43.7681C38.3047 43.5815 38.4395 43.47 38.5195 43.4307C38.5996 43.3926 38.6641 43.3652 38.7109 43.3491C39.0938 43.2253 39.543 43.3457 40.0615 43.7095C40.5791 44.0747 41.0654 44.5234 41.5195 45.0593C41.9727 45.5947 42.5186 46.1953 43.1562 46.863C43.793 47.5303 44.3506 48.0259 44.8291 48.3518L45.3076 48.6318C45.626 48.8176 46.04 48.9883 46.5498 49.144C47.0596 49.2983 47.5059 49.3379 47.8887 49.2603L54.0059 49.1665C54.6113 49.1665 55.082 49.0698 55.416 48.8755C55.751 48.6829 55.9502 48.468 56.0137 48.2354C56.0771 48.0029 56.0811 47.7405 56.0254 47.4446C55.9697 47.1501 55.9141 46.9446 55.8584 46.8284Z" fill="#000000" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </g>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href=" <?php the_field('telegram'); ?>" target="_blank">
                            <svg width="100%" height="100%" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <clipPath id="clip3578_940">
                                        <rect id="Tilda_Icons_26snw_telegram" width="44.200001" height="37.400002" transform="translate(8.500000 17.000000)" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <path id="back" d="M68 34C68 52.7776 52.7773 68 34 68C15.2227 68 0 52.7776 0 34C0 15.2224 15.2227 0 34 0C52.7773 0 68 15.2224 68 34ZM46.668 64.5835Q40.835 67 34 67Q27.165 67 21.332 64.5835Q15.498 62.1672 10.665 57.3345Q5.83301 52.502 3.41602 46.6682Q1 40.8345 1 34Q1 27.1655 3.41602 21.3318Q5.83301 15.498 10.665 10.6655Q15.498 5.83276 21.332 3.41626Q27.165 1 34 1Q40.835 1 46.668 3.41626Q52.502 5.83276 57.335 10.6655Q62.167 15.498 64.584 21.3318Q67 27.1655 67 34Q67 40.8345 64.584 46.6682Q62.167 52.5017 57.335 57.3345Q52.502 62.1672 46.668 64.5835Z" fill="#009A93" fill-opacity="1.000000" fill-rule="evenodd"/>
                                <rect id="Tilda_Icons_26snw_telegram" width="44.200001" height="37.400002" transform="translate(8.500000 17.000000)" fill="#FFFFFF" fill-opacity="0"/>
                                <g clip-path="url(#clip3578_940)">
                                    <path id="Vector" d="M51.2959 17.0701L9.14453 32.9194C8.29492 33.2449 8.2832 34.5457 9.1123 34.9187L19.9092 39.2869L23.9307 51.7961C24.1699 52.4702 25.0205 52.6965 25.5703 52.2322L31.7461 46.5632L43.4873 54.2441C44.0967 54.6201 44.8994 54.2803 45.042 53.5859L52.6768 18.2185C52.8398 17.4314 52.0547 16.7793 51.2959 17.0701ZM25.9141 41.6558L25.2275 48.0864L21.9678 38.1873L44.957 23.2961L25.9141 41.6558Z" fill="#000000" fill-opacity="1.000000" fill-rule="nonzero"/>
                                </g>
                            </svg>

                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <?php get_template_part('template-parts/specialists') ?>
    </main>

    <?php get_footer()?>