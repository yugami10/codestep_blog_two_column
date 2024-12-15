<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= bloginfo('name') ?></title>
    <meta name="description" content="<?= bloginfo('description') ?>" />
    <link rel="icon" href="<?= esc_url(get_theme_file_uri('img/common/favicon.ico')) ?>" />

    <?php wp_head(); ?>
</head>

<body>
    <header id="header">
        <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
        <?= '<' . $html_tag . ' class="site-title wrapper">' ?>
            <a href="<?= esc_url(home_url()) ?>">
                <img src="<?= esc_url(get_theme_file_uri('/img/common/logo.svg')) ?>" alt="Travel Blog" />
            </a>
        <?= '</' . $html_tag . '>' ?>

        <nav id="navi">
            <ul class="wrapper">
                <li><a href="<?= esc_url(home_url('/category/news')) ?>">NEWS</a></li>
                <li><a href="<?= esc_url(home_url('/category/column')) ?>">COLUMN</a></li>
                <li><a href="<?= esc_url(home_url('/category/hotel')) ?>">HOTEL</a></li>
                <li><a href="<?= esc_url(home_url('/contact')) ?>">CONTACT</a></li>
            </ul>
        </nav>
    </header>
