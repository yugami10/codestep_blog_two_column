<?= get_header() ?>

<div id="container" class="wrapper">
    <main>
        <?php if (have_posts()) : ?>
            <?php if (!$_GET['s']) : ?>
                <p>検索キーワードが未入力です</p>
            <?php else : ?>
                <h1 class="page-title">
                    <?= '「' . esc_html($_GET['s'] . '」の検索結果：') . $wp_query->found_posts . '件' ?>
                </h1>

                <?php
                get_template_part('loop');

                pagination($wp_query->max_num_pages);
                ?>
            <?php endif; ?>
        <?php else : ?>
            <p>検索されたキーワードに一致する記事はありませんでした</p>
        <?php endif; ?>
    </main>

    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
