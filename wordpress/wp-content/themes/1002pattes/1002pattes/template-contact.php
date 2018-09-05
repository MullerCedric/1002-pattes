<?php
/*
  * Template Name: Page de contact
  */

get_header(); ?>
    <main class="main" role="main">

    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div>
                <h2><?php //the_field('test1', get_the_ID()); ?></h2>
        </div>
        <?php

        endwhile;

    endif;

    ?>




<div id="main">
<section>
    <h1 class="hidden">
        Les activitées de l'asbl "La maison du 1002 pattes"
    </h1>
</section>
<section class="blocabout">
    <h2 class="blocabout__title1">
        Qui sommes nous&nbsp;?
    </h2>
    <p class="blocabout__text">
        Notre société accorde de plus en plus d’importance au domaine de la santé mentale. Celle de nos enfants et de nos adolescents                 (y compris celle des individus porteurs de handicaps) est une condition essentielle pour la construction d’une société                        stable, entreprenante et innovante.
    </p>
    <a href="./pages/apropos.html" class="blocabout__link">En savoir plus <span class="hidden">sur l'asbl la maison du 1002 pattes</span></a>
</section>
<section class="blocteamI-space">
    <div class="blocteamI-space__divimg">
        <h2 class="hidden">
            Encart notre équipe
        </h2>
    </div>
    <div class="blocteamI-space__animation">
        <div class="blocteamI-space__animation__content ">
            <p class="blocteamI-space__text">Nous sommes</p>
            <ul class="blocteamI-space__list">
                <li class="blocteamI-space__text--word">psychothérapeutes</li>
                <li class="blocteamI-space__text--word">logopèdes</li>
                <li class="blocteamI-space__text--word">psychologues</li>
                <li class="blocteamI-space__text--word">psychomotriciens</li>
                <li class="blocteamI-space__text--word">neurologues</li>
            </ul>
        </div>
    </div>
    <a href="./pages/equipe.html" class="blocteamI-space__link">Découvrir notre équipe</a>
</section>
<section class="blocactiv">
    <h2 class="hidden">
        Les activitées de l'asbl "La maison du 1002 pattes"
    </h2>
    <div class="blocactiv__divimg">
        &nbsp;
    </div>
    <div class="blocactiv__info" itemscope itemtype="http://schema.org/Corporation">
        <h3 class="blocactiv__content__title1">
            Activitées
        </h3>
        <h4 class="blocactiv__info__title2">
            Journée famille annuelle
        </h4>
        <p class="blocactiv__info__text" itemprop="event">
            Organisée ce 05 mai 2018 à la salle des coccinelles de Morhet.
            Début de la journée vers 14h : Spectacle de magie, karaoké pour enfant, grimage, ateliers cupcakes, repas (sous réservation via                Gwénaëlle Melchior : 0496/40.36.13 ou Yoland Melchior : 0496/40.36.53) et soirée dansante seront au programme.
        </p>
    </div>
</section>
<section class="blocsponsor" itemscope itemtype="http://schema.org/Corporation">
    <h2 class="blocsponsor__title1">
        Merci à nos sponsors
    </h2>
    <ul class="blocsponsor__list">
        <li class="blocsponsor__list__item sitem">
            <p itemprop="sponsor" class="hidden">
                Euromillion
            </p>
            <img src="<?=assets("assets/images/euro.png");?>" alt="Logo Euromillion partenaire" width="500" height="500" class="sitem__img">
                </li>
                <li class="blocsponsor__list__item">
                    <p itemprop="sponsor" class="hidden">
                        Lotto
                    </p>
                    <img src="<?=assets("assets/images/lotto.png") ;?>" alt="Logo Lotto partenaire" width="500" height="500" class="sitem__img">
                </li>
                <li class="blocsponsor__list__item">
                    <p itemprop="sponsor" class="hidden">
                        Joker
                    </p>
                    <img src="<?=assets("assets/images/joker.png") ;?>" alt="Logo Joker partenaire" width="500" height="500" class="sitem__img">
                </li>
                <li class="blocsponsor__list__item">
                    <p itemprop="sponsor" class="hidden">
                        Win
                    </p>
                    <img src="<?=assets("assets/images/win.png") ;?>" alt="Logo win partenaire" width="500" height="500" class="sitem__img">
                </li>
            </ul>
        </section>
        <section class="blochelp-space">
            <div class="blochelp-space__divimg">
                &nbsp;
            </div>
            <h2 class="blochelp-space__title1">
                On peut vous aider&nbsp;!
            </h2>
            <p class="blochelp-space__text">
                L’importance des relations précoces entre les parents et leur bébé, la compréhension réciproque parents-enfants n’est plus à                  démontrer. De même pour le dépistage le plus précoce possible des troubles de l’apprentissage.
            </p>
            <a href="./pages/aide.html" class="blochelp-space__link">En savoir plus <span class="hidden">sur notre aide</span></a>
        </section>
    </div>
<?php get_footer(); ?>