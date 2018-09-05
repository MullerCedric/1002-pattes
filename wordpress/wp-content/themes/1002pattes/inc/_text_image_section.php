<div class="o-grid__col gd-<?= floor( $section['width'] / 2 ); ?>/12 <?= $streched; ?>">
    <div class="o-grid__cell c-bloc c-bloc--lg">
        <h2><?= $section['title'] ?></h2><?php
		$group = get_sub_field( 'text_image_group' );
		if ( $group ) {
			echo $group['text_image_text'];
		}

		if ( isset( $ctas ) AND is_array( $ctas ) ):
			foreach ( $ctas as $cta ): ?>
                <div class="c-cta">
                    <a href="<?= $cta['cta_url']; ?>"
                       class="c-cta__button"><?= $cta['cta_text']; ?></a>
                </div>
			<?php endforeach;
		endif;

		if ( isset( $links ) AND is_array( $links ) ):
			foreach ( $links as $link ): ?>
                <div class="c-cta">
                    <a href="<?= $link['link_url']; ?>"><?= $link['link_text']; ?></a>
                </div>
			<?php endforeach;
		endif; ?>
    </div>
</div>
<div class="o-grid__col o-grid__col--offset gd-<?= floor( $section['width'] / 2 ) + 1; ?>/12 <?= $streched; ?> unsetMargin@mobile">
    <div class="o-grid__cell">
        <img class="c-textImage__img" src="<?= mmp_get_src( $group['text_image_img'], 'mmp-landing' ); ?>">
    </div>
</div>