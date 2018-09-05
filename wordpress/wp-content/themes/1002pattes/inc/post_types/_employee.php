<?php
if ( $mmp_posts->have_posts() ) : ?>
    <div class="o-grid c-list"><?php
	while ( $mmp_posts->have_posts() ): $mmp_posts->the_post();
		setup_postdata( $mmp_posts ); ?>
        <div class="o-grid__col gd-4/12 o-grid__col--streched">
        <dl class="o-grid__cell c-bloc">
            <dt>
				<?= get_field( 'employee_first_name' ) . ' ' . get_field( 'employee_last_name' ); ?>
            </dt><?php
			foreach ( get_field( 'employee_job' ) as $job ): ?>
                <dd>
				<?= get_field( 'job_name', $job->ID ) ?>
                </dd><?php
			endforeach; ?>
            <dd>
				<?= get_field( 'employee_sex' ); ?>
            </dd>
            <dd>
                Travaille avec : <?php $clients = get_field( 'employee_clients' );
				if ( ! $clients ) {
					echo '/';
				} else {
					foreach ( $clients as $client ) {
						echo strtolower( $client );
						if ( $client !== end( $clients ) ) {
							echo ', ';
						}
					}
				} ?>
            </dd>
        </dl>
        </div><?php
	endwhile;
	wp_reset_postdata(); ?>
    </div><?php
else: ?>
    <p>
        Il n'y a pas d'employé à afficher pour le moment
    </p><?php
endif;