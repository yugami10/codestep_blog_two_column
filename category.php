<?php get_header() ?>

<div id="container" class="wrapper">
    <main>
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        ?>
        <h1 class="page-title"><?= $catname ?>一覧</h1>

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
