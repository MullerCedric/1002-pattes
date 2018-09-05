<?php
if ( $mmp_posts->have_posts() ) : ?>
    <div class="o-grid c-list"><?php
	while ( $mmp_posts->have_posts() ): $mmp_posts->the_post();
		setup_postdata( $mmp_posts ); ?>
        <div class="o-grid__col gd-4/12 o-grid__col--streched">
        <dl class="o-grid__cell c-bloc">
            <dt>
				<?= get_field( 'disease_name' ); ?>
            </dt>
            <dd>
				<?= get_field( 'disease_desc' ); ?>
            </dd><?php
			if ( get_field( 'disease_link' ) ):
				foreach ( get_field( 'disease_link' ) as $link ): ?>
                    <dd>
                    <a href="<?= $link['disease_link_url'] ?>"><?= $link['disease_link_text'] ?></a>
                    </dd><?php
				endforeach;
			endif; ?>
        </dl>
        </div><?php
	endwhile;
	wp_reset_postdata(); ?>
    </div><?php
else: ?>
    <p>
        Il n'y a pas de maladie à afficher pour le moment
    </p><?php
endif;