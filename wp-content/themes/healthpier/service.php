<?php 
/*
Template Name: Страница процедур
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

    <?php
// Получаем все категории из таксономии cat_procedure
$categories = get_terms(array(
    'taxonomy' => 'cat_procedure',
    'hide_empty' => false,
));

// Проходим по каждой категории
foreach ($categories as $category) {
    // Получаем записи (посты) из текущей категории
    $posts_query = new WP_Query(array(
        'post_type' => 'procedure',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'cat_procedure',
                'field' => 'slug',
                'terms' => $category->slug,
            ),
        ),
    ));

    // Если есть записи в текущей категории, выводим секцию
    if ($posts_query->have_posts()) {
?>
        <section class="pocedure">
            <div class="container">
                <h2 class="h2"><?php echo esc_html($category->name); ?></h2>

                <div class="pocedure__list">
                    <?php
                    // Выводим записи текущей категории
                    while ($posts_query->have_posts()) {
                        $posts_query->the_post();
                    ?>
                        <div class="pocedure__item">
                            <a href="<?php the_permalink(); ?>" class="pocedure-card">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <div>
                                    <h3><?php the_title(); ?></h3>
                                    <svg width="25.553711" height="13.138916" viewBox="0 0 25.5537 13.1389" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path id="arrow" d="M0 6.56958L24.8271 6.56958M18.2939 12.7764L24.8271 6.56958L18.2939 0.362549" stroke="#235189" stroke-opacity="1.000000" stroke-width="1.000000" />
                                    </svg>
                                </div>

                            </a>
                        </div>
                    <?php
                    }
                    // Сбрасываем запрос
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>
<?php
    }
}
?>


<?php get_template_part('template-parts/specialists') ?>

</main>


    
<?php get_footer()?>