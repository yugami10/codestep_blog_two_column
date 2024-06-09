<?= get_header() ?>


<div id="container" class="wrapper">
    <main>
        <?php
        if (have_posts()) {
            get_template_part('loop');

            pagination($wp_query->max_num_pages);
        }
        ?>
    </main>

    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
