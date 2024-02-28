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
                <a href="">Главная</a>
                <span></span>
                <a href="">Новости и акции</a>
                <span></span>
                <a href="">Новые программы</a>
            </div>
        </div>
    </section>

    <section class="pocedure">
        <div class="container">
            <h2 class="h2">Лицо</h2>

            <div class="service__list">
                <div class="service__item">
                    <div class="service-card">
                        <img src="<?php bloginfo('template_directory') ?>/img/service-img.jpg" alt="">

                        <a href="" class="service-card__link">
                            RSL - скульптурирование

                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <circle cx="30" cy="30" r="29.5" stroke="#235189"/>
                            <path d="M17.5864 30H42.414M42.414 30L35.8804 23.7931M42.414 30L35.8804 36.2069" stroke="#235189"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


    
<?php get_footer()?>