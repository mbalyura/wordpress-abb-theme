<div class="page-section__card">
    <div class="page-section__card-image">
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
    <div class="page-section__card-heading">
        <?= $args['heading'] ?>
    </div>
    <div class="page-section__card-text">
        <?= $args['text'] ?>
    </div>
    <a class="button" href="<?= $args['button_link'] ?>"><?= $args['button_text'] ?></a>
</div>
