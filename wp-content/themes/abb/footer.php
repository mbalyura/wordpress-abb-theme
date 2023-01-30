    <footer class="footer">
        <div class="footer__container container">
            <?php wp_nav_menu([
                'container' => 'nav',
                'container_class' => 'footer-menu',
                'theme_location' => 'footer',
                'items_wrap' => '<ul class="footer-menu__container">%3$s</ul>',
            ]); ?>
            <ul class="footer__social-links">
                <li class="footer__social-item">
                    <a class="footer__social-link" href=""><?= file_get_contents(get_template_directory() . '/assets/icons/facebook.svg') ?></a>
                </li>
                <li class="footer__social-item">
                    <a class="footer__social-link" href=""><?= file_get_contents(get_template_directory() . '/assets/icons/twitter.svg') ?></a>
                </li>
                <li class="footer__social-item">
                    <a class="footer__social-link" href=""><?= file_get_contents(get_template_directory() . '/assets/icons/linkedin.svg') ?></a>
                </li>
            </ul>
            <div class="footer__copyright">Copyright © ABB AG</div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>
