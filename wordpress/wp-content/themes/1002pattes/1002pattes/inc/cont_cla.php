<section class="blocabout">
    <h2 class="blocabout__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <p class="blocabout__text">
        <?= get_sub_field('content'); ?>
    </p>
    <?php
    if (have_rows('button')): while (have_rows('button')) : the_row(); ?>
            <a href="<?= get_sub_field('url'); ?>" class="blocabout__link"
               title="<?= get_sub_field('text'); ?>"><?= get_sub_field('label'); ?> <span
                    class="hidden"><?= get_sub_field('text'); ?></span></a>
        <?php endwhile; ?>
    <?php endif; ?>
</section>