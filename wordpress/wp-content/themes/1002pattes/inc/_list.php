<?php
$displayType = get_sub_field( 'list_type' );
$mmp_posts   = new WP_Query( [ 'post_type' => $displayType, 'order' => 'ASC' ] );
include( 'post_types/_' . $displayType . '.php' );
