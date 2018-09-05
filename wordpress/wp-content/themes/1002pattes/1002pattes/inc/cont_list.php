<section class="blocteamI-space">
    <div class="blocteamI-space__divimg">
        <?php if(have_rows('image')) : while (have_rows('image')): the_row(); ?>
        <img src="<?= pattes_images(get_field('img'), 'full'); ?>" alt="<?= get_sub_field('alt'); ?>">
        <?php endwhile; endif; ?>

        <h2 class="hidden">
            Encart notre équipe
        </h2>
    </div>
    <div class="blocteamI-space__animation">
        <div class="blocteamI-space__animation__content ">
            <p class="blocteamI-space__text"><?= get_sub_field('title'); ?></p>
            <ul class="blocteamI-space__list">
                <?php
                if (have_rows('liste')): while (have_rows('liste')) : the_row(); ?>
                <li class="blocteamI-space__text--word"><?= get_sub_field('metier'); ?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <a href="./pages/equipe.html" class="blocteamI-space__link" title="Découvrir l'équipe de l'asbl 'La maison du 1002 pattes'">Découvrir notre équipe</a>
</section>