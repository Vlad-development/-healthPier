<div class="indications">
    <?php if( have_rows('blok_informaczii') ): ?>
            <?php while( have_rows('blok_informaczii') ): the_row(); 
                $selection = get_sub_field('pokazani');
                $indications = get_sub_field('indications');
            ?>
            <div class="indications-card <?php echo $selection; ?>">
                <?php echo $indications; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>