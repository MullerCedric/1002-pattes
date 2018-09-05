<section class="blocdons-space">
    <div class="blocdons-space__divimg">
        <?php if(have_rows('image')): while(have_rows('image')): the_row(); ?>
            <img src="<?= get_sub_field('img'); ?>" alt="<?= get_sub_field('texte'); ?>">
        <?php endwhile; endif; ?>
    </div>
    <h2 class="hidden">
        Aidez-nous
    </h2>
    <p class="blocdons-space__text">
        <?= get_sub_field('text'); ?>
    </p>
    <?php if(have_rows('bouton')): while(have_rows('bouton')): the_row(); ?>
        <a href="<?= get_sub_field('url'); ?>" class="blocdons-space__link" title="<?= get_sub_field('text'); ?>"><?=get_sub_field('label'); ?></a>
    <?php endwhile; endif; ?>
</section>