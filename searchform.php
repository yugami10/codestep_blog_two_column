<form action="<?= esc_url(home_url()) ?>" method="get" id="searchform">
    <input type="text" name="s" id="s" placeholder="入力するの面倒くさっ" />
    <button type="submit">
        <img src="<?= esc_url(get_theme_file_uri('img/common/search.png')) ?>" alt="" />
    </button>
</form>
