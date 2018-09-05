<section class="blocsponsor" itemscope itemtype="http://schema.org/Organization">
    <h2 class="blocsponsor__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <ul class="blocsponsor__list">
        <?php if (have_rows('image')): while (have_rows('image')): the_row(); ?>
            <?php if (get_row_layout() == 'image_sp'): ?>
                <li class="blocsponsor__list__item sitem">
                    <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('alt'); ?>"
                         width="200" height="200" class="sitem__img">
                </li>
            <?php endif; ?>
        <?php endwhile; endif; ?>
        <?php if (have_rows('image_2')): while (have_rows('image_2')): the_row(); ?>
            <?php if (get_row_layout() == 'image_sp_2'): ?>
                <li class="blocsponsor__list__item">
                    <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('alt'); ?>"
                         width="200" height="200" class="sitem__img">
                </li>
            <?php endif; ?>
        <?php endwhile; endif; ?>
        <?php if (have_rows('image_3')): while (have_rows('image_3')): the_row(); ?>
            <?php if (get_row_layout() == 'image_sp_3'): ?>
                <li class="blocsponsor__list__item">
                    <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('alt'); ?>"
                         width="200" height="200" class="sitem__img">
                </li>
            <?php endif; ?>
        <?php endwhile; endif; ?>
        <?php if (have_rows('image_4')): while (have_rows('image_4')): the_row(); ?>
            <?php if (get_row_layout() == 'image_sp_4'): ?>
                <li class="blocsponsor__list__item">
                    <img src="<?php the_sub_field('img'); ?>" alt="<?php the_sub_field('alt'); ?>"
                         width="200" height="200" class="sitem__img">
                </li>
            <?php endif; ?>
        <?php endwhile; endif; ?>
    </ul>
</section>