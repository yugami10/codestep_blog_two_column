<?php get_header() ?>

<div id="container" class="wrapper">
    <main>
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        ?>
        <h1 class="page-title"><?= $catname ?>一覧</h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2 class="article-title">
                        <a href="<?= the_permalink() ?>"><?= the_title() ?></a>
                    </h2>
                    <ul class="meta">
                        <li><?= the_time('Y/m/d') ?></li>
                    </ul>
                    <a href="<?= the_permalink() ?>"><?= the_post_thumbnail() ?></a>
                    <div class="text">
                        <?php
                        if (mb_strlen(strip_tags(get_the_content()), 'UTF-8') > 80) {
                            $content = mb_substr(strip_tags(get_the_content()), 0, 80, 'UTF-8');
                            echo $content . '…';
                        } else {
                            echo strip_tags(get_the_content());
                        }
                        ?>
                    </div>
                    <div class="readmore"><a href="<?= the_permalink() ?>">READ MORE</a></div>
                </article>
            <?php endwhile; ?>

            <?= pagination($wp_query->max_num_pages) ?>

        <?php endif; ?>
    </main>

    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
