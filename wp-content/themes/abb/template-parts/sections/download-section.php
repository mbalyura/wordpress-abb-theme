<section class="page-section page-section--download">
    <div class="page-section__container container">
        <h2 class="page-section__heading"><?= $args['heading'] ?></h2>
        <div class="page-section__row page-section__row--2">
            <div class="page-section__column">
                <div class="page-section__image">
                    <img src="<?= get_template_directory_uri() . '/assets/images/ratgeber.png'?>" alt="ratgeber">
                </div>
            </div>
            <div class="page-section__column page-section__column--content">
                <div class="page-section__text">
                    <?= $args['text'] ?>
                </div>
                <a class="button" href="<?= $args['button_link'] ?>">
                    <?= $args['button_text'] ?>
                </a>
            </div>
        </div>
    </div>
</section>