<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Accueil | La maison du 1002 pattes</title>
    <meta name="description" content="La page d‘accueil de l'asbl 'La maison du 1002 pattes' comprenant les activités que propose l'asbl.">
    <meta name="keywords" content="jeunesse, aide, asbl, bastogne, famille, jeunes, adolescentes, enfants">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="<?= assets('assets/css/bundle.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<header class="blocheader">
    <h1 class="hidden">
        Le site de l'asbl "La maison du 1002 pattes"
    </h1>
    <div class="blocheader__flex">
        <div class="blocheader__flex__logo logo" itemscope itemtype="http://schema.org/Organization">
            <a href="#" class="logo__link" title="Aller sur la page d'accueil de l'asbl 'La maison du 1002 pattes'">
                <img itemprop="logo" src="<?= assets('assets/images/logo-2.jpg'); ?>" alt="Logo de l'asbl 'La maison du 1002 pattes'" width="105" height="128" class="logo__img">
                <meta itemprop="url" content="http://lamaisondu1002pattes.be">
            </a>
        </div>
        <input id="burger" type="checkbox" class="checkbox">
        <label for="burger" class="burgercss">
            <span class="hidden">Ouvrir/fermer le menu</span>
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="blocheader__nav">
            <h2 class="hidden">Ma navigation principale</h2>
            <ul class="blocheader__nav__list list">
                <?php foreach (pattes_get_menu('main')->getItems() as $item): ?>
                <li class="list__item">
                    <a href="<?= $item->url; ?>" class="list__item__link active"><?= $item->label; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    <div class="blocheader__desc__img">
        <div itemscope itemtype="http://schema.org/Organization" class="blocheader__desc">
            <p itemprop="description" class=" blocheader__desc__text">
                La maison du 1002 est une asbl qui aident les enfants, adolescents et familles en difficultés.
            </p>
        </div>
    </div>
</header>