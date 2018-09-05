<section class="blocdons">
    <div class="blocdons__info">
        <h2 class="blocdons__title1">
            <?= get_sub_field('text'); ?>
        </h2>
        <p class="blocdons__text--merci">
            <?= get_sub_field('text_2'); ?>
        </p>
        <p class="blocdons__text catch">
            <?= get_sub_field('text_3'); ?>
        </p>
        <p class="blocdons__text locaux">
            <?= get_sub_field('text_4'); ?>
        </p>
        <p class="blocdons__text compte">
            <?= get_sub_field('text_5'); ?>
        </p>
    </div>
    <div class="blocdons__title--align">
        <h2 class="blocdons__title2">
            <?= get_sub_field('title'); ?>
        </h2>
    </div>
    <ul class="blocdons__list">
        <?php if(have_rows('partenaires')): while(have_rows('partenaires')): the_row(); ?>
            <li class="blocdons__list__item ditem">
                <p class="ditem__title1"><?= get_sub_field('title'); ?></p>
                <p class="ditem__text"><?= get_sub_field('text'); ?></p>
                <?php if(have_rows('bouton')): while(have_rows('bouton')): the_row(); ?>
                    <a href="<?= get_sub_field('url'); ?>" class="ditem__link" title="<?= get_sub_field('text'); ?>"><?= get_sub_field('label'); ?></a>
                <?php endwhile; endif; ?>
            </li>
        <?php endwhile; endif; ?>
    </ul>
</section>
