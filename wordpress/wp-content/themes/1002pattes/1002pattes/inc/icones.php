<section class="blocteamII-space">
    <div class="blocteamII-space__divborder">
        <h2 class="hidden">
            Découvrir notre équipe
        </h2>
        <div class="blocteamII-space__icons">
            <a href="<?= get_sub_field('lien'); ?>" title="Découvrir notre équipe">
                <?php if(have_rows('change')) : while(have_rows('change')): the_row(); ?>
                    <i class="<?=  get_sub_field('text'); ?>"></i>
                <?php endwhile; endif; ?>
            </a>
        </div>
        <p class="blocteamII-space__text">
            <?= get_sub_field('text'); ?>
        </p>
        <?php if(have_rows('bouton')) : while(have_rows('bouton')): the_row(); ?>
            <a href="<?= get_sub_field('url'); ?>" class="blocteamII-space__link" title="<?= get_sub_field('text'); ?>"><?= get_sub_field('label'); ?></a>
        <?php endwhile; endif; ?>
    </div>
</section>