<section class="blochelp-nojs">
    <h2 class="blochelp-nojs__title1">
        <?= get_sub_field('title'); ?>
    </h2>
    <p class="blochelp-nojs__text">
        <?= get_sub_field('contenu'); ?>
    </p>
    <p class="blochelp-nojs__text2">
        <?= get_sub_field('encart_info'); ?>
    </p>
    <div class="blochelp-nojs__div">
        <div class="blochelp-nojs__list">
            <?php if (have_rows('titre_texte_bouton')): while (have_rows('titre_texte_bouton')): the_row(); ?>
                <section class="blochelp-nojs__list__item hnjitem">
                    <h3 class="blochelp-nojs__title3">
                        <?= get_sub_field('title'); ?>
                    </h3>
                    <?php if (have_rows('paragraphe')) : while(have_rows('paragraphe')): the_row(); ?>
                        <p class="hnjitem__text">
                            <?php the_sub_field('text'); ?>
                        </p>
                    <?php endwhile; endif; ?>
                    <p class="hnjitem__span hnjitem__text">
                            <?php the_sub_field('text'); ?>
                    </p>
                    <?php if (have_rows('bouton_interne')) : while(have_rows('bouton_interne')): the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="hnjlink" title="<?php the_sub_field('text'); ?>"><?php the_sub_field('label'); ?></a>
                    <?php endwhile; endif; ?>
                    <?php if (have_rows('bouton_externe')) : while(have_rows('bouton_externe')): the_row(); ?>
                        <a href="<?php the_sub_field('url'); ?>" class="hnjlink" title="<?php the_sub_field('text'); ?>"><?php the_sub_field('label'); ?></a>
                    <?php endwhile; endif; ?>
                </section>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
