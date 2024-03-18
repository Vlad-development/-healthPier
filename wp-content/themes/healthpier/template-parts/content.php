<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package healthpier
 */

?>

<section class="newsContent">
    <div class="container">
        <div class="newsContent-block">
            <img src="<?php the_post_thumbnail_url();?>" alt="" class="newsContent__image">
            <?php
// Проверяем тип записи текущей страницы
$post_type = get_post_type();

if ($post_type === 'program' || $post_type === 'post') { // Если тип записи program
    // Получаем три случайные записи с типом program
    $args = array(
        'post_type' => 'program',
        'posts_per_page' => 3,
        'orderby' => 'rand' // Получаем случайные записи
    );
    $query = new WP_Query($args);

    // Если есть записи, выводим их
    if ($query->have_posts()) {
        ?>
        <div class="newsContent-nav">
            <h3 class="newsContent-nav__title">
                Программы
            </h3>
            <ul class="newsContent-nav__list">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <li>
                        <svg width="32.000000" height="32.000000" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            
                            <circle id="Ellipse" cx="16.000000" cy="16.000000" r="16.000000" fill="#009A93" fill-opacity="1.000000"/>
                            <path id="link/icon" d="M16.647 13.6252L17.5107 14.489C17.9077 14.886 18.2222 15.3569 18.437 15.8755C18.6519 16.394 18.7622 16.9497 18.7622 17.511C18.7622 18.0723 18.6519 18.6279 18.437 19.1465C18.2222 19.6648 17.9077 20.136 17.5107 20.5327L17.2949 20.7483C16.4932 21.5498 15.4062 22 14.2729 22C13.1396 22 12.0527 21.5498 11.2515 20.7483C10.4502 19.9468 10 18.8599 10 17.7263C10 16.593 10.4502 15.5061 11.2515 14.7046L12.1152 15.5684C11.8301 15.8513 11.603 16.188 11.4482 16.5588C11.293 16.9297 11.2129 17.3276 11.2119 17.7295C11.2109 18.1316 11.2896 18.5295 11.4429 18.9011C11.5962 19.2727 11.8218 19.6104 12.106 19.8945C12.3901 20.1787 12.7275 20.4041 13.0991 20.5576C13.4707 20.7109 13.8687 20.7896 14.2705 20.7886C14.6724 20.7876 15.0703 20.7075 15.4414 20.5525C15.812 20.3972 16.1484 20.1707 16.4316 19.885L16.6475 19.6689C17.2197 19.0967 17.541 18.3203 17.541 17.511C17.541 16.7017 17.2197 15.9253 16.6475 15.3528L15.7837 14.489L16.6475 13.6257L16.647 13.6252ZM20.748 17.2949L19.8848 16.4316C20.1699 16.1487 20.397 15.812 20.5518 15.4412C20.707 15.0703 20.7871 14.6724 20.7881 14.2705C20.7891 13.8684 20.7104 13.4705 20.5571 13.0989C20.4038 12.7273 20.1782 12.3896 19.894 12.1055C19.6099 11.8213 19.2725 11.5959 18.9009 11.4424C18.5293 11.2891 18.1313 11.2104 17.7295 11.2114C17.3276 11.2124 16.9297 11.2925 16.5586 11.4475C16.188 11.6028 15.8516 11.8293 15.5684 12.115L15.3525 12.3311C14.7803 12.9033 14.459 13.6797 14.459 14.489C14.459 15.2983 14.7803 16.0747 15.3525 16.6472L16.2163 17.511L15.3525 18.3743L14.4893 17.511C14.0923 17.114 13.7778 16.6431 13.563 16.1245C13.3481 15.606 13.2378 15.0503 13.2378 14.489C13.2378 13.9277 13.3481 13.3721 13.563 12.8535C13.7778 12.3352 14.0923 11.864 14.4893 11.4673L14.7051 11.2517C15.5068 10.4502 16.5938 10 17.7271 10C18.8604 10 19.9473 10.4502 20.7485 11.2517C21.5498 12.0532 22 13.1401 22 14.2737C22 15.407 21.5498 16.4939 20.7485 17.2954L20.748 17.2949Z" fill="#FDFDFF" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <?php
    }
} elseif ($post_type === 'procedure') { // Если тип записи procedure
    // Получаем три случайные записи с типом procedure
    $args = array(
        'post_type' => 'procedure',
        'posts_per_page' => 3,
        'orderby' => 'rand' // Получаем случайные записи
    );
    $query = new WP_Query($args);

    // Если есть записи, выводим их
    if ($query->have_posts()) {
        ?>
        <div class="newsContent-nav">
            <h3 class="newsContent-nav__title">
                Популярные процедуры
            </h3>
            <ul class="newsContent-nav__list">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <li>
                        <svg width="32.000000" height="32.000000" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            
                            <circle id="Ellipse" cx="16.000000" cy="16.000000" r="16.000000" fill="#009A93" fill-opacity="1.000000"/>
                            <path id="link/icon" d="M16.647 13.6252L17.5107 14.489C17.9077 14.886 18.2222 15.3569 18.437 15.8755C18.6519 16.394 18.7622 16.9497 18.7622 17.511C18.7622 18.0723 18.6519 18.6279 18.437 19.1465C18.2222 19.6648 17.9077 20.136 17.5107 20.5327L17.2949 20.7483C16.4932 21.5498 15.4062 22 14.2729 22C13.1396 22 12.0527 21.5498 11.2515 20.7483C10.4502 19.9468 10 18.8599 10 17.7263C10 16.593 10.4502 15.5061 11.2515 14.7046L12.1152 15.5684C11.8301 15.8513 11.603 16.188 11.4482 16.5588C11.293 16.9297 11.2129 17.3276 11.2119 17.7295C11.2109 18.1316 11.2896 18.5295 11.4429 18.9011C11.5962 19.2727 11.8218 19.6104 12.106 19.8945C12.3901 20.1787 12.7275 20.4041 13.0991 20.5576C13.4707 20.7109 13.8687 20.7896 14.2705 20.7886C14.6724 20.7876 15.0703 20.7075 15.4414 20.5525C15.812 20.3972 16.1484 20.1707 16.4316 19.885L16.6475 19.6689C17.2197 19.0967 17.541 18.3203 17.541 17.511C17.541 16.7017 17.2197 15.9253 16.6475 15.3528L15.7837 14.489L16.6475 13.6257L16.647 13.6252ZM20.748 17.2949L19.8848 16.4316C20.1699 16.1487 20.397 15.812 20.5518 15.4412C20.707 15.0703 20.7871 14.6724 20.7881 14.2705C20.7891 13.8684 20.7104 13.4705 20.5571 13.0989C20.4038 12.7273 20.1782 12.3896 19.894 12.1055C19.6099 11.8213 19.2725 11.5959 18.9009 11.4424C18.5293 11.2891 18.1313 11.2104 17.7295 11.2114C17.3276 11.2124 16.9297 11.2925 16.5586 11.4475C16.188 11.6028 15.8516 11.8293 15.5684 12.115L15.3525 12.3311C14.7803 12.9033 14.459 13.6797 14.459 14.489C14.459 15.2983 14.7803 16.0747 15.3525 16.6472L16.2163 17.511L15.3525 18.3743L14.4893 17.511C14.0923 17.114 13.7778 16.6431 13.563 16.1245C13.3481 15.606 13.2378 15.0503 13.2378 14.489C13.2378 13.9277 13.3481 13.3721 13.563 12.8535C13.7778 12.3352 14.0923 11.864 14.4893 11.4673L14.7051 11.2517C15.5068 10.4502 16.5938 10 17.7271 10C18.8604 10 19.9473 10.4502 20.7485 11.2517C21.5498 12.0532 22 13.1401 22 14.2737C22 15.407 21.5498 16.4939 20.7485 17.2954L20.748 17.2949Z" fill="#FDFDFF" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </svg>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
        <?php
    }
}
?>

<?php if (is_singular('post')) : ?>
    <h1 class="post-title">
<?php else : ?>
    <h1>
<?php endif; ?>
    <span style="text-transform: uppercase;display:block;"><?php the_title();?></span>
    <?php
    $acf_field = get_field('podzagolovok');
    if ($acf_field) : ?>
        <?php the_field('podzagolovok');?>
    <?php endif; ?>
</h1>

        <div class="newsContent-elements_one">
            <svg width="100%" height="100%" viewBox="0 0 1366 789" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-30 621.688C149.73 647.164 303.371 661.06 401.933 600.844C500.494 540.628 509.191 494.308 665.73 496.624C822.27 498.94 926.629 549.892 996.202 468.832C1065.78 387.772 1033.89 292.816 1175.93 251.128C1317.98 209.44 1193.33 63.532 1373.06 1" stroke="#235189" stroke-opacity="0.5"/>
                <path d="M-30 673.798C149.73 699.274 303.371 713.17 401.933 652.954C500.494 592.738 509.191 546.418 665.73 548.734C822.27 551.05 926.629 602.002 996.202 520.942C1065.78 439.882 1033.89 344.926 1175.93 303.238C1317.98 261.55 1193.33 115.642 1373.06 53.1101" stroke="#235189" stroke-opacity="0.5"/>
                <path d="M-15.5059 722.434C164.224 747.91 317.865 761.806 416.427 701.59C514.989 641.374 523.685 595.054 680.225 597.37C836.764 599.686 941.123 650.638 1010.7 569.578C1080.27 488.518 1048.38 393.562 1190.43 351.874C1332.47 310.186 1207.82 164.278 1387.55 101.746" stroke="#235189" stroke-opacity="0.5"/>
                <path d="M-14.0562 766.438C165.674 791.914 319.315 805.81 417.876 745.594C516.438 685.378 525.135 639.058 681.674 641.374C838.214 643.69 942.573 694.642 1012.15 613.582C1081.72 532.522 1049.83 437.566 1191.88 395.878C1333.92 354.19 1209.27 208.282 1389 145.75" stroke="#235189" stroke-opacity="0.5"/>
            </svg>
        </div>

        <div class="newsContent-elements_two">
        <svg width="100%" height="100%" viewBox="0 0 1366 1299" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1434.02 735.064C1284 637.977 1152.46 562.144 1039.18 576.295C925.89 590.447 898.751 628.947 759.779 562.44C620.808 495.933 548.816 406.713 452.732 451.726C356.647 496.738 345.456 596.117 201.045 575.547C56.6337 554.978 107.068 738.807 -79.7464 721.668" stroke="#235189" stroke-opacity="0.5"/>
<path d="M1455.81 687.726C1305.78 590.64 1174.25 514.806 1060.96 528.958C947.676 543.109 920.536 581.609 781.565 515.102C642.593 448.596 570.601 359.375 474.517 404.388C378.433 449.401 367.241 548.779 222.83 528.21C78.4189 507.64 128.853 691.469 -57.9613 674.33" stroke="#235189" stroke-opacity="0.5"/>
<path d="M1463.18 637.582C1313.16 540.495 1181.62 464.662 1068.34 478.813C955.052 492.964 927.912 531.464 788.94 464.958C649.969 398.451 577.977 309.23 481.893 354.243C385.809 399.256 374.617 498.634 230.206 478.065C85.7949 457.496 136.229 641.324 -50.5853 624.186" stroke="#235189" stroke-opacity="0.5"/>
<path d="M1480.28 597.011C1330.26 499.925 1198.72 424.091 1085.44 438.243C972.152 452.394 945.013 490.894 806.041 424.387C667.069 357.881 595.077 268.66 498.993 313.673C402.909 358.686 391.717 458.064 247.306 437.495C102.895 416.925 153.33 600.754 -33.4847 583.615" stroke="#235189" stroke-opacity="0.5"/>
</svg>

        </div>
           

            <?php the_content();?>
        </div>
    </div>
        </section>
