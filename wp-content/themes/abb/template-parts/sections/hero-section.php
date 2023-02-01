<section class="hero">
    <div class="hero__container container">
        <div class="hero__content">
            <h1 class="hero__heading"><?= $args['heading'] ?></h1>
            <p class="hero__subheading"><?= $args['subheading'] ?></p>
        </div>
    </div>
    <img class="hero__image" src="<?= get_template_directory_uri() . '/assets/images/hero-bg.png'?>" alt="hero">
</section>