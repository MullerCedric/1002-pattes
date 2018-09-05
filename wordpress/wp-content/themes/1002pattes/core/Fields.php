<?php
/*
 * Retrieves image URL in an image array for a given size
 */
function mmp_get_src( $arrImg, $size = 'full' ) {
	if ( is_array( $arrImg ) && isset( $arrImg['sizes'][ $size ] ) ) {
		return $arrImg['sizes'][ $size ];
	}

	return $arrImg['sizes']['url'] ?? null;
}

/*
 * Check if there is a parent section in an array of fields
 */
function mmp_has_parent_section( $arrFields ) {
	foreach ( $arrFields as $section ) {
		if ( in_array( 'text_image', $section ) ) {
			if ( !$section['is_sub_section'] ) return true;
			return false;
		}
	}
	return false;
}
