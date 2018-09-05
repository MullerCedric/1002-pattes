<section class="blochelp-space">
    <div class="blochelp-space__divimg">
        <?php if (have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php if (get_row_layout() == 'image_help'): ?>
                <img src="<?= $test = pattes_images(get_sub_field('img'), 'full'); ?>" alt="<?php the_sub_field('alt'); ?>"
                     class="blochelp_img">
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
    <h2 class="blochelp-space__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <p class="blochelp-space__text">
        <?= get_sub_field('text'); ?>
    </p>
    <?php
    if (have_rows('button')): while (have_rows('button')) : the_row(); ?>
            <a href="<?= get_sub_field('url'); ?>" class="blochelp-space__link"
               title="<?= get_sub_field('text'); ?>"><?= get_sub_field('label'); ?></a>
        <?php endwhile; ?>
    <?php endif; ?>
</section>