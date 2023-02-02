<section class="hero">
    <div class="hero__container container">
        <div class="hero__content">
            <h1 class="hero__heading"><?= $args['heading'] ?></h1>
            <p class="hero__subheading"><?= $args['subheading'] ?></p>
        </div>
    </div>
    <img
        class="hero__image"
        srcset="<?= $args['bg_image']['sizes']['hero-bg-mobile'] . ' 1440w' ?>,
                <?= $args['bg_image']['url'] . ' 1920w' ?>"
        sizes="(max-width: 1440px) 1440px, 1920px"
        src="<?= $args['bg_image']['url'] ?>"
        alt="<?= $args['bg_image']['alt'] ?>"
        width="<?= $args['bg_image']['width'] ?>"
        height="<?= $args['bg_image']['height'] ?>"
    >
</section>
