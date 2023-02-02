<?php

get_header();

get_template_part('template-parts/sections/hero-section', null, [
    'heading' => get_field('front_hero_heading'),
    'subheading' => get_field('front_hero_subheading'),
    'bg_image' => get_field('front_hero_image'),
]);

get_template_part('template-parts/sections/base-section', null, [
    'content' => get_field('front_page_description'),
]);

get_template_part('template-parts/sections/download-section', null, [
    'heading' => get_field('section_download_heading'),
    'image' => get_field('section_download_image'),
    'text' => get_field('section_download_text'),
    'button_link' => get_field('section_download_button_link'),
    'button_text' => get_field('section_download_button_text'),
]);

$cardsCount = 3;
$cards = [];
for ($i = 1; $i <= $cardsCount; $i++) {
    $cards[] = [
        'heading' => get_field("section_cards_card{$i}_heading"),
        'image' => get_field("section_cards_card{$i}_image"),
        'text' => get_field("section_cards_card{$i}_text"),
        'button_link' => get_field("section_cards_card{$i}_button_link"),
        'button_text' => get_field("section_cards_card{$i}_button_text"),
    ];
}
get_template_part('template-parts/sections/cards-section', null, [
    'heading' => get_field('section_cards_heading'),
    'cards' => $cards,
]);

$productSectionsCount = 4;
for ($i = 1; $i <= $productSectionsCount; $i++) {
    get_template_part('template-parts/sections/product-section', null, [
        'heading' => get_field("section_products{$i}_heading"),
        'image' => get_field("section_products{$i}_image"),
        'text' => get_field("section_products{$i}_text"),
        'button_link' => get_field("section_products{$i}_button_link"),
        'button_text' => get_field("section_products{$i}_button_text"),
    ]);
}

get_footer();
