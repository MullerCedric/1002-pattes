<?php
if ( $mmp_posts->have_posts() ) : ?>
    <div class="o-grid c-list"><?php
	while ( $mmp_posts->have_posts() ): $mmp_posts->the_post();
		setup_postdata( $mmp_posts ); ?>
        <div class="o-grid__col gd-4/12 o-grid__col--streched">
        <dl class="o-grid__cell c-bloc">
            <dt class="c-list__question">
				<?= get_field( 'question_entitled' ); ?>
            </dt>
            <dd>
				<?= get_field( 'question_answer' ); ?>
            </dd><?php
			if ( get_field( 'question_link' ) ):
				foreach ( get_field( 'question_link' ) as $link ): ?>
                    <dd>
                    <a href="<?= $link['question_link_url'] ?>"><?= $link['question_link_text'] ?></a>
                    </dd><?php
				endforeach;
			endif; ?>
        </dl>
        </div><?php
	endwhile;
	wp_reset_postdata(); ?></div><?php
else: ?>
    <p>
        Il n'y a pas de question à afficher pour le moment
    </p><?php
endif;