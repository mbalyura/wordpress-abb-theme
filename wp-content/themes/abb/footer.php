    </main>
    <footer class="footer">
        <div class="footer__container container">
            <?php wp_nav_menu([
                'container' => 'nav',
                'container_class' => 'footer-menu',
                'theme_location' => 'footer-menu',
                'items_wrap' => '<ul class="footer-menu__container">%3$s</ul>',
            ]); ?>
            <?php wp_nav_menu([
                'container' => 'nav',
                'container_class' => 'social-menu',
                'theme_location' => 'social-menu',
                'items_wrap' => '<ul class="social-menu__container">%3$s</ul>',
            ]); ?>
            <div class="footer__copyright"><?php the_field('footer_copyright'); ?></div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>
