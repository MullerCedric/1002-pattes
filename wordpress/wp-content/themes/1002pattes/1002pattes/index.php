<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="hidden">
            <?php the_field('description'); ?>
        </h1>
        <?php
        if (have_rows('page')): while (have_rows('page')) : the_row(); ?>
                <?php include 'inc/'.get_row_layout().'.php'; ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php endwhile; endif; ?>
</main>
    <?php get_footer(); ?>