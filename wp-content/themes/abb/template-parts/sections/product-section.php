<section class="page-section page-section--product">
    <div class="page-section__container container">
        <div class="page-section__row page-section__row--2">
            <div class="page-section__column">
                <div class="page-section__image">
                    <img
                        srcset="<?= $args['image']['sizes']['full-width-mobile'] . ' 740w' ?>,
                                <?= $args['image']['sizes']['section'] . ' 388w' ?>"
                        sizes="(max-width: 740px) 740px, 388px"
                        src="<?= $args['image']['sizes']['section'] ?>"
                        alt="<?= $args['image']['alt'] ?>"
                        width="<?= $args['image']['sizes']['section-width'] ?>"
                        height="<?= $args['image']['sizes']['section-height'] ?>"
                    >
                </div>
            </div>
            <div class="page-section__column page-section__column--content">
                <h2 class="page-section__heading"><?= $args['heading'] ?></h2>
                <div class="page-section__text">
                    <?= $args['text'] ?>
                </div>
                <a class="button" href="<?= $args['button_link'] ?>"><?= $args['button_text'] ?></a>
            </div>
        </div>
    </div>
</section>
