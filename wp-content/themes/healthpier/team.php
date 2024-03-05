<?php 
/*
Template Name: Команда
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
        <section class="team">
            <div class="container">
                <h1 class="team__title h2 text-center">
                    Наша команда
                </h1>

                <div class="team__list">
                    <a href="#" class="team-card">
                        <div class="team-card__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/team.jpeg" alt="">
                        </div>
                        <h3 class="team-card__title">
                            Имя Отчество Фамилия
                        </h3>
                        <div class="team-card__description">
                            Главный врач
                        </div>
                    </a>
                    <a href="#" class="team-card">
                        <div class="team-card__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/team.jpeg" alt="">
                        </div>
                        <h3 class="team-card__title">
                            Имя Отчество Фамилия
                        </h3>
                        <div class="team-card__description">
                            Главный врач
                        </div>
                    </a>
                    <a href="#" class="team-card">
                        <div class="team-card__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/team.jpeg" alt="">
                        </div>
                        <h3 class="team-card__title">
                            Имя Отчество Фамилия
                        </h3>
                        <div class="team-card__description">
                            Главный врач
                        </div>
                    </a>
                    <a href="#" class="team-card">
                        <div class="team-card__img">
                            <img src="<?php bloginfo('template_directory') ?>/img/team.jpeg" alt="">
                        </div>
                        <h3 class="team-card__title">
                            Имя Отчество Фамилия
                        </h3>
                        <div class="team-card__description">
                            Главный врач
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <?php get_template_part('template-parts/specialists') ?>
    </main>


    <?php get_footer()?>