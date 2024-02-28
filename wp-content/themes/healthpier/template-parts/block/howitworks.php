<div class="howItWorks">
    <div class="howItWorks__block">
        <div class="howItWorks-table">
            <?php if( have_rows('list') ): ?>
            		<?php while( have_rows('list') ): the_row(); 
            			$title = get_sub_field('заголовок');
            			$text = get_sub_field('text');
            		?>
            		<div class="howItWorks-table__item">
                        <div class="howItWorks-table__title">
                           <?php echo $title; ?>
                        </div>
                        <div class="howItWorks-table__text">
                            <?php echo $text; ?>  
                        </div>
                    </div>
            	   <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="howItWorks-img">
            <img src="<?php the_field('list-img'); ?>" alt="">
        </div>
    </div>
</div>