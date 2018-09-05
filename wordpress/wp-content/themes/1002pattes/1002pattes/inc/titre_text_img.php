<section class="blocpropos">
    <h2 class="blocpropos__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <?php if(have_rows('text_img')): while (have_rows('text_img')): the_row(); ?>
        <p class="blocpropos__text">
            <?= get_sub_field('text'); ?>
        </p>
    <?php if(have_rows('image')): while (have_rows('image')): the_row(); ?>
        <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('alt'); ?>" width="3264" height="980" class="blocpropos__img">
    <?php endwhile; endif; ?>
    <?php endwhile; endif; ?>
</section>
