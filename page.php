<?= get_header() ?>

<div id="container" class="wrapper">
    <main>
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
            <article>
                <h1 class="article-title"><?= the_title() ?></h1>
                <?= the_post_thumbnail() ?>
                <div class="text"><?= the_content() ?></div>
            </article>
        <?php endwhile; endif; ?>
    </main>

    <?= get_sidebar() ?>
</div>

<?= get_footer() ?>
