<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package healthpier
 */

get_header();
?>

	<main id="primary" class="site-main">
	    <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__block">
                    <a href="/">Главная</a>
                    <span></span>
                    <?php 
                        $post_type = get_post_type();

                        if ($post_type === 'procedure') {
                            ?>
                        
                                <a href="/proczedury">Процедуры</a>
                                <span></span>
                            <?php
                        }
                    ?>
                    <a href=""><?php the_title();?></a>
                </div>
            </div>
        </section>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
		
<?php
// Получаем тип текущей записи
$post_type = get_post_type();

// Проверяем тип записи
if ($post_type == 'post') {
    // Если тип записи - 'post', исключаем вывод блока "template-parts/specialists"
    ?>
    <section class="article">
        <div class="container">
            <h2 class="article__title h2">
                Другие новости и акции
            </h2>

            <div class="article-list">
                <?php 
                    $args = array(
                		'numberposts'      => 4,
                		'orderby'          => 'rand',
                		'order'            => 'DESC',
                		'include'          => array(),
                		'exclude'          => array(),
                		'meta_key'         => '',
                		'meta_value'       => '',
                		'post_type'        => 'post',
                		'suppress_filters' => true, 
                    );
                    $posts = get_posts( $args );
                	foreach($posts as $post) { setup_postdata($post); ?>
                	    <a href="<?php the_permalink();?>" class="article-card">
                            <div class="article-card__img">
                                <img src="<?php the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="article-card__content">
                                <div>
                                    <h3>
                                        <?php the_title();?>
                                    </h3>
                                    <p>
                                      <?php 
                                            $excerpt = get_the_excerpt();
                                            $trimmed_excerpt = substr($excerpt, 0, 200); 
                                            echo $trimmed_excerpt . '...';
                                        ?>
                                    </p>
                                </div>
    
                                <div class="article-card__info">
                                    <div class="article-card__data">
                                        <?php the_date();?>
                                    </div>
                                    <svg width="100%" height="100%" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                         
                                        <path id="share icon" d="M8.29248 9.47058L6.63428 9.47058C5.27393 9.47009 3.93945 9.83887 2.77441 10.537C1.60986 11.2351 0.659668 12.2361 0.0263672 13.4318C0.00878906 13.2098 0 12.9873 0 12.7646C0 8.21631 3.7124 4.52942 8.29248 4.52942L8.29248 0L17 7L8.29248 14L8.29248 9.47058ZM6.63428 7.82349L9.95117 7.82349L9.95117 10.5477L14.3638 7L9.95117 3.45227L9.95117 6.17651L8.29248 6.17651C7.33936 6.17542 6.39697 6.37891 5.52979 6.77307C4.66309 7.16724 3.89209 7.74268 3.27002 8.46008C4.34082 8.0387 5.48242 7.82263 6.63428 7.82349Z" fill="#163152" fill-opacity="1.000000" fill-rule="nonzero"/>
                                    </svg>
                                </div>
                            </div>
                        </a>
                	<?php }
                	wp_reset_postdata();          
                ?>
            </div>
        </div>
    </section>
    <?php
} else {
    get_template_part('template-parts/price');
    get_template_part('template-parts/specialists');
    
}
?>


	</main><!-- #main -->

<?php
get_footer();
