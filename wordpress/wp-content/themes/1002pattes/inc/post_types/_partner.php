<?php
if ( $mmp_posts->have_posts() ) : ?>
    <div class="o-grid c-list"><?php
	while ( $mmp_posts->have_posts() ): $mmp_posts->the_post();
		setup_postdata( $mmp_posts ); ?>
        <div class="o-grid__col gd-4/12 o-grid__col--streched">
        <a class="o-grid__cell c-bloc c-bloc--item" href="<?= get_field( 'partner_url' ); ?>"
           title="vers le site partenaire">
            <dl>
                <dt>
					<?= get_field( 'partner_name' ); ?>
                </dt>
                <dd>
					<?= get_field( 'partner_desc' ); ?>
                </dd>
            </dl>
        </a>
        </div><?php
	endwhile;
	wp_reset_postdata(); ?>
    </div><?php
else: ?>
    <p>
        Il n'y a pas de partenaire à afficher pour le moment
    </p><?php
endif;