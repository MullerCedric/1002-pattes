<?php
if ( have_rows( $ctaSelector . '_cta' ) ):
	while ( have_rows( $ctaSelector . '_cta' ) ) : the_row(); ?>
        <div class="c-cta">
            <a href="<?= get_sub_field( 'cta_url' ); ?>"
               class="c-cta__button"><?= get_sub_field( 'cta_text' ); ?></a>
        </div>
	<?php endwhile;
endif;

if ( have_rows( $ctaSelector . '_link' ) ):
	while ( have_rows( $ctaSelector . '_link' ) ) : the_row(); ?>
        <div class="c-cta">
            <a href="<?= get_sub_field( 'link_url' ); ?>"><?= get_sub_field( 'link_text' ); ?></a>
        </div>
	<?php endwhile;
endif;
