<?php
get_header(); ?>
<body class="<?= mmp_get_page_modifier( 'c-background' ); ?>">
<header class="<?= mmp_get_page_modifier( 'c-header' ); ?> o-wrapper">
    <h1 class="<?= mmp_hide_if( 'landing' ); ?>">
		<?php the_title(); ?>
    </h1>
	<?php get_template_part( 'template-parts/part', 'nav' ); ?>
</header>
<main class="o-wrapper" id="content"><?php $prevAlign = false;
	while ( have_rows( 'sections' ) ) :
		the_row();
		$section['title']   = get_sub_field( 'section_title' );
		$section['content'] = get_sub_field( 'content' );
		$section['width']   = get_sub_field( 'section_width' );
		$section['align']   = get_sub_field( 'section_align' );
		$ctaSelector        = 'ctas';
		if ( $section['align'] === 'v-streched' ) {
			$streched = 'o-grid__col--streched';
		} else {
			$streched = '';
		}

		if ( mmp_has_parent_section( $section['content'] ) ) {
			$ctas  = get_sub_field( $ctaSelector . '_cta' );
			$links = get_sub_field( $ctaSelector . '_link' );
			while ( have_rows( 'content' ) ) :
				the_row();
				if ( get_row_layout() === 'text_image' ) {
					if ( ! get_sub_field( 'is_sub_section' ) ) {
						if ( $prevAlign ) {
							echo '</div>';
						}
						if ( $section['align'] === 'v-centered' ) {
							echo '<section class="o-grid o-grid--v-centered c-textImage">';
						} else {
							echo '<section class="o-grid c-textImage">';
						}
						include 'inc/_text_image_section.php';
						echo '</section>';

						$prevAlign = false;
					}
				}
			endwhile;
		} else {
			if ( ! $prevAlign OR $prevAlign !== $section['align'] ) {
				if ( $prevAlign ) {
					echo '</div>';
				}
				if ( $section['align'] === 'v-centered' ) {
					echo '<div class="o-grid o-grid--v-centered">';
				} else {
					echo '<div class="o-grid">';
				}
			} ?>
            <section class="o-grid__col gd-<?= $section['width'] ?>/12 <?= $streched; ?>">
                <div class="o-grid__cell">
                    <h2><?= $section['title'] ?></h2>
					<?php
					while ( have_rows( 'content' ) ) :
						the_row();
						include 'inc/_' . get_row_layout() . '.php';
					endwhile;
					include 'inc/_cta.php'; ?>
                </div>
            </section>
			<?php
			$prevAlign = $section['align'];
		}
	endwhile; ?>
</main>

<?php get_footer(); ?>
</body>
</html>
