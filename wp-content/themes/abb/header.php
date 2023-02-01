<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__container container">
            <?php if (has_custom_logo()) : ?>
                <div class="site-logo">
                    <?php the_custom_logo(); ?>
                </div>
            <?php endif; ?>

            <input class="menu-checkbox" type="checkbox" id="menu-checkbox" />
            <label class="menu-checkbox-label" for="menu-checkbox"><div class="menu-mobile-icon"></div></label>
            <?php wp_nav_menu([
                'name' => 'primary',
                'container' => 'nav',
                'container_class' => 'main-menu',
                'theme_location' => 'primary',
                'items_wrap' => '<ul class="main-menu__container">%3$s</ul>',
            ]); ?>
        </div>
    </header>
    <main class="main">
