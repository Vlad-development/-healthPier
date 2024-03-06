<?php
get_header();
?>
	<main id="primary" class="site-main">
	    <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__block">
                    <a href="/">Главная</a>
                    <span></span>
                    <a href="/team/">Команда</a>
                    <span></span>
                    <a href="#"><?php the_title();?></a>
                </div>
            </div>
        </section>
        
        <section class="profile">
            <div class="container">
                <div class="profile__wrap">
                    <div class="profile-content">
                        <h1 class="profile-content__title h1">
                            <?php the_title();?>
                        </h1>
                        <div class="profile-content__text">
                            <?php the_content();?>
                        </div>
                        <button type="button" class="openModal btn-main">Записаться


                            <svg width="100%" height="100%" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <circle id="back" cx="15.500000" cy="15.500000" r="15.000000" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                                <path id="arrow" d="M10.5 15L20.5 15M17.8682 12.5L20.5 15L17.8682 17.5" stroke="#FDFDFF" stroke-opacity="1.000000" stroke-width="1.000000"/>
                            </svg>
                            
                        </button>
                    </div>
                    <img src="<?php the_post_thumbnail_url();?>" alt="" class="profile__img">
                </div>
            </div>
        </section>

	</main><!-- #main -->

<?php
get_footer();