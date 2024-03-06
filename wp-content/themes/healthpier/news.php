<?php 
/*
Template Name: Новости и Акции
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
<section class="news">
    <div class="container">
        <h2 class="news__title h2">
            Акции
        </h2>

        <div class="news-wrap">
            <?php 
                $args = array(
                    'numberposts' => 3,
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
                    <div class="news-card">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="news-card__img">
                        <div class="news-card__block">
                            <h2 class="news-card__title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="news-card__text">
                                <?php 
                                $post_content = get_the_content();
                                $trimmed_content = wp_trim_words($post_content, 18, '...');
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
                    </div>

                <?php }
                wp_reset_postdata();          
            ?>
        </div>
</section>


<section class="news">
    <div class="container">
        <h2 class="news__title h2">
            Новости
        </h2>

        <div class="news-wrap news-wrap_all">
            <?php 
                $args = array(
                    'numberposts' => -1,
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
                    <div class="news-card">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="news-card__img">
                        <div class="news-card__block">
                            <h2 class="news-card__title">
                                <?php the_title(); ?>
                            </h2>
                            <div class="news-card__text">
                                <?php 
                                $post_content = get_the_content();
                                $trimmed_content = wp_trim_words($post_content, 18, '...');
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
                    </div>

                <?php }
                wp_reset_postdata();          
            ?>
        </div>
</section>
</main>



<?php get_footer()?>