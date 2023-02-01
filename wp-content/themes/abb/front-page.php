<?php get_header(); ?>
    <?php get_template_part('template-parts/sections/hero-section', null, [
        'heading' => get_field('front_hero_heading'),
        'subheading' => get_field('front_hero_subheading'),
    ]) ?>
    <?php get_template_part('template-parts/sections/base-section', null, [
        'content' => get_field('front_page_description'),
    ]) ?>
    <?php get_template_part('template-parts/sections/download-section', null, [
        'heading' => get_field('section_download_heading'),
        'text' => get_field('section_download_text'),
        'button_link' => get_field('section_download_button_link'),
        'button_text' => get_field('section_download_button_text'),
    ]) ?>
    <?php get_template_part('template-parts/sections/cards-section', null, [
        'cards' => [
            [
                'heading' => get_field('section_cards_heading'),
                'text' => get_field('section_cards_text'),
            ],
            [
                'heading' => get_field('section_cards_heading'),
                'text' => get_field('section_cards_text'),
            ],
            [
                'heading' => get_field('section_cards_heading'),
                'text' => get_field('section_cards_text'),
            ],
        ],
        'heading' => get_field('section_cards_heading'),
    ]) ?>
    <?php $productSectionsCount = 4; ?>
    <?php for ($i = 1; $i <= $productSectionsCount; $i++) : ?>
        <?php get_template_part('template-parts/sections/product-section', null, ['index' => $i]); ?>
    <?php endfor; ?>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>
<?php get_footer(); ?>
