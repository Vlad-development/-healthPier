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
                    <?php 
                        $args = array(
                            'numberposts' => -1,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'team',
                            'suppress_filters' => true, 
                        );
                        $posts = get_posts( $args );
                        foreach($posts as $post) { setup_postdata($post); ?>
                            <a href="<?php the_permalink();?>" class="team-card">
                                <div class="team-card__img">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                                <h3 class="team-card__title">
                                    <?php the_title();?>
                                </h3>
                                <div class="team-card__description">
                                    <?php the_field('dolzhnost'); ?>
                                </div>
                            </a>
                        <?php }
                        wp_reset_postdata();          
                    ?>
                </div>
            </div>
        </section>


        <?php get_template_part('template-parts/specialists') ?>
    </main>


    <?php get_footer()?>