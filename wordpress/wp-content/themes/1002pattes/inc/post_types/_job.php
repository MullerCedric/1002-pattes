<?php
if ( $mmp_posts->have_posts() ) : ?>
    <div class="o-grid c-list"><?php
	while ( $mmp_posts->have_posts() ): $mmp_posts->the_post();
		setup_postdata( $mmp_posts ); ?>
        <div class="o-grid__col gd-4/12 o-grid__col--streched">
        <dl class="o-grid__cell c-bloc">
            <dt>
				<?= get_field( 'job_name' ); ?>
            </dt>
            <dd>
                De notre équipe : <?php
				$employees = get_posts( array(
					'post_type'  => 'employee',
					'meta_query' => array(
						array(
							'key'     => 'employee_job', // name of custom field
							'value'   => '"' . get_the_ID() . '"',
							'compare' => 'LIKE'
						)
					)
				) );
				if ( ! $employees ) {
					echo '/';
				} else {
					foreach ( $employees as $employee ) {
						echo ucfirst( strtolower( get_field( 'employee_first_name', $employee->ID ) ) )
						     . ' ' .
						     ucfirst( strtolower( get_field( 'employee_last_name', $employee->ID ) ) );
						if ( $employee !== end( $employees ) ) {
							echo ', ';
						}
					}
				} ?>
            </dd>
            <dd>
                Pathologies fréquemment traitées : <?php $diseases = get_field( 'job_diseases' );
				if ( ! $diseases ) {
					echo '/';
				} else {
					foreach ( $diseases as $disease ) {
						echo strtolower( get_field( 'disease_name', $disease->ID ) );
						if ( $disease !== end( $diseases ) ) {
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
        Il n'y a pas d'éléments à afficher pour le moment
    </p><?php
endif;