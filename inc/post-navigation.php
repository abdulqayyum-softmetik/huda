<div class="d-flex flex-wrap justify-content-between mb-4">
    <?php
        if ( huda_previous_post() || huda_next_post()  ) :
            ?>
                <?php echo esc_html( huda_previous_post() ); ?>
                <?php echo esc_html( huda_next_post() ); ?>
            <?php
        endif;
    ?>
</div>