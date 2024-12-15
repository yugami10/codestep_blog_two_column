<aside id="sidebar">
    <section class="author">
        <img src="<?= esc_url(get_theme_file_uri('img/sidebar/author.jpg')) ?>" alt="テキスト" />
        <h3 class="side-title">Name Name</h3>
        <p class="profile">
            プロフィールテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
            テキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
    </section>

    <?php get_search_form(); ?>

    <section class="archive">
        <?= dynamic_sidebar('sidebar') ?>
    </section>
</aside>
