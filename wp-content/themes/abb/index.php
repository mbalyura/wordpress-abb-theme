<?php get_header(); ?>
<main class="main">
    <div class="container">
        <h1>Hello from index</h1>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </div>
</main>
<?php get_footer(); ?>