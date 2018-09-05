<footer class="c-footer">
    <div class="o-wrapper">
        <div class="o-grid o-grid--spaced">
            <div class="o-grid__col gd-2/12 c-footer__coord">
                <?= get_field('footer_contact_infos', 'option'); ?>
            </div>
            <div class="o-grid__col c-footer__nav">
                <nav class="hidden@phablet">
                    <h2 class="hidden">Navigation secondaire, complète</h2>
                    <ul>
                        <?php foreach ( mmp_get_menu( 'footer-menu' )->getItems() as $item ): ?>
                            <li>
                                <a href="<?= $item->url; ?>" class="c-footer__links"><?= $item->label; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <small>
                    La Maison du 1002 pattes &copy; by Cédric Müller
                </small>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
