<section class="page-section page-section--download">
    <div class="page-section__container container">
        <h2 class="page-section__heading"><?= $args['heading'] ?></h2>
        <div class="page-section__row page-section__row--2">
            <div class="page-section__column">
                <div class="page-section__image">
                    <img
                        srcset="<?= $args['image']['sizes']['full-width-mobile'] . ' 740w' ?>,
                                <?= $args['image']['sizes']['section-download'] . ' 563w' ?>"
                        sizes="(max-width: 740px) 740px, 563px"
                        src="<?= $args['image']['sizes']['section-download'] ?>"
                        alt="<?= $args['image']['alt'] ?>"
                        width="<?= $args['image']['sizes']['section-download-width'] ?>"
                        height="<?= $args['image']['sizes']['section-download-height'] ?>"
                    >
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
