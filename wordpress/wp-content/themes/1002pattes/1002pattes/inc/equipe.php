<div itemscope itemtype="http://schema.org/Organization">
    <?php if(have_rows('specialistes')): while(have_rows('specialistes')): the_row(); ?>
        <section class="blocteam__spe">
            <h2 class="blocteam__spe__title1">
                <?= get_sub_field('title'); ?>
            </h2>
            <p class="blocteam__spe__text">
                <?= get_sub_field('text'); ?>
            </p>
            <ul class="blocteam__spe__list spe-list">
                <?php if(have_rows('image')): while(have_rows('image')): the_row(); ?>
                    <li class="list.item spe-item">
                        <a href="equipeperso.html" class="spe-item__link" title="Découvrir la fiche descriptive de cette spécialiste">
                            <div class="spe-item__div">
                                <img src="../assets/images/girl1.png" alt="Portrait d'une jeune femme" class="spe-item__img" width="318" height="200">
                                <p class="spe-item__text" itemprop="member">Gwénaëlle Melchior</p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; endif; ?>
            </ul>
        </section>
    <?php endwhile; endif; ?>
</div>