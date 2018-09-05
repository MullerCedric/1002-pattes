<!--<div class="activites">-->
    <section class="blocactiv">
        <h2 class="hidden">
            Les activités de l'asbl "La maison du 1002 pattes"
        </h2>
        <div class="blocactiv__divimg">
            <?php if (have_rows('image')): while (have_rows('image')): the_row(); ?>
                <?php if (get_row_layout() == 'image_act'): ?>
                    <img src="<?= pattes_images(get_sub_field('img'), 'full'); ?>" alt="<?php the_sub_field('texte_desc'); ?>">
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
        <div itemscope itemtype="http://schema.org/Event" class="blocactiv__info">
            <section>
                <h3 class="blocactiv__content__title1">
                    <?= get_sub_field('main_title'); ?>
                </h3>
                <p class="blocactiv__info__title2">
                    <span itemprop="name"><?= get_sub_field('second_title'); ?></span>
                </p>
                <p class="blocactiv__info__text"><?= get_sub_field('content'); ?></p>
                <p class="hidden">Organisée ce
                    <meta itemprop="startDate" content="05/05/2018">
                    05 mai 2018 à la salle des coccinelles de Morhet. Début de la journée vers 14h :
                    Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous
                    réservation via <span class="hidden" itemprop="organizer">Gwénaëlle Melchior</span>Gwénaëlle
                    Melchior : 0496/40.36.13 ou <span class="hidden"
                                                      itemprop="organizer">Yoland Melchior</span>Yoland
                    Melchior: 0496/40.36.53) et soirée dansante seront au programme.
                </p>
                <div itemscope itemtype="http://schema.org/place" itemprop="location">
                    <meta itemprop="name" content="salle des coccinelles de Morhet">
                    <meta itemprop="address"
                          content="Chaussée de Neufchâteau 25, 6640 Vaux-sur-Sûre, Belgique">
                </div>
                <meta itemprop="description"
                      content="Début de la journée vers 14h : Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous réservation via Gwénaëlle Melchior : 0496/40.36.13 ou Yoland Melchior: 0496/40.36.53) et soirée dansante seront au programme.">
            </section>
        </div>
    </section>