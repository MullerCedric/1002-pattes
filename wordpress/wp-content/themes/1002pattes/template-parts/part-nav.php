<nav class="<?= mmp_get_page_modifier( 'c-headerNav' ); ?>">
    <div class="o-wrapper">
        <div class="o-grid o-grid--v-centered">
            <h2 class="hidden">
                Navigation principale
            </h2>
            <div class="hidden">
                <a href="#content">Accéder directement au contenu du site</a>
            </div>

            <div class="o-grid__col <?= mmp_get_page_modifier( 'c-logo' ); ?> c-headerNav__logo">
                <a href="index.php" title="vers la page d'accueil"
                   class="<?= mmp_get_page_modifier( 'c-logo__link' ); ?> o-grid__cell">
                    La Maison du 1002 pattes
                </a>
            </div>
            <div class="o-grid__col">
                <input type="checkbox" class="c-headerNav__burger-check c-headerNav__burger" />
                <span class="c-headerNav__burger-line c-headerNav__burger"></span>
                <span class="c-headerNav__burger-line c-headerNav__burger"></span>
                <span class="c-headerNav__burger-line c-headerNav__burger"></span>
                <ul class="c-headerNav__list o-grid__cell">
					<?php
					foreach ( mmp_get_menu( 'header-menu' )->getItems() as $item ):
						$current = ( $item->url === get_permalink() ) ? ' c-headerNav__links--current' : ''; ?>
                        <li class="c-headerNav__item">
                            <a href="<?= $item->url; ?>"
                               class="c-headerNav__links<?= $current; ?>"><?= $item->label; ?></a>
                        </li>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>