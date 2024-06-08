<?= get_header() ?>

<div id="container" class="wrapper">
    <main>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php
                $cat = get_the_category();
                $catname = $cat[0]->cat_name;
            ?>
            <article>
                <h1 class="article-title">
                    <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                </h1>
                <ul class="meta">
                    <li><?= the_time('Y/m/d') ?></li>
                    <li><?= $catname ?></li>
                </ul>
                <a href="<?= the_permalink() ?>"><?= the_post_thumbnail() ?></a>
                <div class="text"><?= the_content() ?></div>
            </article>
        <?php endwhile; endif; ?>

        <ul class="post-link">
            <li><?= previous_post_link('%link', '< 前の記事へ') ?></li>
            <li><?= next_post_link('%link', '次の記事へ >') ?></li>
        </ul>
    </main>

    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
