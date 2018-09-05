<section class="o-wrapper">
	<h2><?= get_sub_field( 'section_title' ); ?></h2>
	<?= get_sub_field( 'list_text' );

	while ( have_rows( 'section_content' ) ) :
		the_row();
		include '_' . get_row_layout() . '.php';
	endwhile;

	$ctaSelector = 'section_ctas';
	include '_cta.php';
	?>
</section>