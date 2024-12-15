<?php

if (!function_exists('pagination')) {
    /**
     * ぺぃじねーしよん^^
     *
     * @param string $pages
     * @param integer $range
     * @return void
     */
    function pagination(string $pages = '', int $range = 2): void
    {
        $showitems = ($range * 2) + 1;

        // 現在のページ数
        global $paged;
        if (empty($paged)) {
            $paged = 1;
        }

        // 全ページ数
        if ($pages == '') {
            global $wp_query; // なにこれ・・・
            $pages = $wp_query->max_num_pages;
            if (!$pages) {
                $pages = 1;
            }
        }

        // ページ数が2ページ以上の場合のみ、ページネーションを表示
        if (1 != $pages) {
            echo <<<EOF
                <div class="pagination">
                    <ul>
            EOF;

            // 1ページ目でなければ、「前のページ」リンクを表示
            if ($paged > 1) {
                $preview_link = esc_url(get_pagenum_link($paged - 1));
                echo <<<EOF
                        <li class="prev">
                            <a href="{$preview_link}">前のページ</a>
                        </li>
                EOF;
            }

            // ページ番号を表示（現在のページはリンクにしない）
            for ($i=1; $i<=$pages; $i++) {
                // if文何言ってんのか分かんね^ ^
                if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                    if ($paged == $i) {
                        echo '<li class="active">' . $i . '</li>';
                    } else {
                        echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
                    }
                }
            }

            // 最後ページでなければ、「次のページ」リンクを表示
            if ($paged < $pages) {
                echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
            }
            echo '</ul>';
            echo '</div>';
        }
    }
}
