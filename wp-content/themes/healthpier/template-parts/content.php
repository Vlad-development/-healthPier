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

                if ($post_type === 'program' || $post_type === 'post') { // Если тип записи program или post
                    // Выводим блок "Программы"
                    ?>
                    <div class="newsContent-nav">
                        <h3 class="newsContent-nav__title">
                            Программы
                        </h3>
                        <ul class="newsContent-nav__list">
                            <li>
                                <a href="">Экспресс</a>
                            </li>
                            <li>
                                <a href="">Экспресс</a>
                            </li>
                            <li>
                                <a href="">Экспресс</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                } elseif ($post_type === 'procedure') { // Если тип записи procedure
                    // Выводим блок "Популярные процедуры"
                    ?>
                    <div class="newsContent-nav">
                        <h3 class="newsContent-nav__title">
                            Популярные процедуры
                        </h3>
                        <ul class="newsContent-nav__list">
                            <li>
                                <a href="">Экспресс</a>
                            </li>
                            <li>
                                <a href="">Экспресс</a>
                            </li>
                            <li>
                                <a href="">Экспресс</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                }
                ?>

            <h1><span style="text-transform: uppercase;"> <?php the_title();?></span>
            <?php
                $acf_field = get_field('podzagolovok');

                if ($acf_field) { ?>
                     <?php the_field('podzagolovok');?>
                <?php }
            ?>
        
        </h1>
           

            <?php the_content();?>
        </div>
    </div>
        </section>
