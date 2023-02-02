<section class="page-section page-section--cards">
    <div class="page-section__container container">
        <h2 class="page-section__heading"><?= $args['heading'] ?></h2>
        <div class="page-section__row page-section__row--3">
            <?php foreach ($args['cards'] as $i => $card) : ?>
                <div class="page-section__column">
                    <?php get_template_part('template-parts/blocks/card', null, $card); ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
