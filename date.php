<?= get_header() ?>

<div id="container" class="wrapper">
    <main>
        <h1 class="page-title">
            <?= get_query_var('year') . '年' . get_query_var('monthnum') . '月' ?>
        </h1>

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
