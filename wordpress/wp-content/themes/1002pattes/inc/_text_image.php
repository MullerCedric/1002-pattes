<section class="o-grid o-grid--h-centered o-grid--v-centered">
    <div class="o-grid__col gd-5/12">
        <div class="o-grid__cell c-bloc">
            <h3><?= get_sub_field( 'text_image_title' ) ?></h3><?php
			$group = get_sub_field( 'text_image_group' );
			if ( $group ) {
				echo $group['text_image_text'];
			} ?>
        </div>
    </div>
    <div class="o-grid__col o-grid__col--offset gd-6/12">
        <div class="o-grid__cell">
            <?php var_dump($group['text_image_img']); ?>
            <img class="c-textImage__img" src="<?= mmp_get_src( $group['text_image_img'], 'mmp-landing' ); ?>">
        </div>
    </div>
</section>