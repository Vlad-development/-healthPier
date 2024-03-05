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


        <section class="specialists">
            <div class="container">
                <div class="specialists__wrap">
                    <div class="specialists-content">
                        <h2 class="specialists-content__title h2">
                            Остались вопросы? Наши специалисты с удовольствием вам помогут.
                        </h2>
                        <p class="specialists-content__text">
                            Заполните форму ниже и мы свяжемся с вами в ближайшее время
                        </p>
                        <div class="specialists-form">
                            <div class="specialists-form__fields">
                                <label>
                            <span>Имя</span>
                            <input type="text" placeholder="Ирина">
                        </label>
                                <label>
                            <span>Телефон</span>
                            <input type="text" placeholder="+7 999 555 66 77">
                        </label>
                                <label>
                            <span>E-mail</span>
                            <input type="text" placeholder="Example@mail.com">
                        </label>
                            </div>
                            <div class="specialists-form__checkbox">
                                <label>
                            <input type="checkbox">
                            <span>Я даю согласие на обработку персональных данных</span>
                        </label>
                            </div>
                            <button type="button" class="btn specialists-form__btn btn-main">Отправить</button>

                        </div>
                    </div>
                    <div class="specialists__img">
                        <img src="<?php bloginfo('template_directory') ?>/img/specialists-img.jpeg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php get_footer()?>