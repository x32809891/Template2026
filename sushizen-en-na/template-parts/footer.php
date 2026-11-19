<?php
    $footerLogoImage = 'logo/logo-footer.png'; // フッターロゴ
    $copyrightText   = '© Sushizen All Rights Reserved.';
    $shops = [
        [
            'name'       => 'honten',
            'address'    => '2-7, Kita 1-jo Nishi 27-chome, Chuo-ku, Sapporo, Hokkaido',
            'tel'        => '011-612-0068',
            'reserveUrl' => 'https://sushizen-reserve.com/rsv_en/honten/',
            'mapUrl'     => 'https://maps.app.goo.gl/9zAnAs1o4msHozyp6',
        ],
        [
            'name'       => 'susukino',
            'address'    => '1F TSUMUGI Bldg. 10-1, Minami 4-jo Nishi 5-chome, Chuo-ku, Sapporo, Hokkaido',
            'tel'        => '011-805-0069',
            'reserveUrl' => 'https://sushizen-reserve.com/rsv_en/susukino/',
            'mapUrl'     => 'https://maps.app.goo.gl/hH7YnY5Lu5zRPE3d7',
        ],
        [
            'name'       => 'ginza',
            'address'    => 'B1F FUKUHARA GINZA Bldg. 7-8-10 Ginza, Chuo-ku, Tokyo',
            'tel'        => '03-3569-0068',
            'reserveUrl' => 'https://sushizen-reserve.com/rsv_en/ginza/',
            'mapUrl'     => 'https://maps.app.goo.gl/PETAasieLFLZHGgK9',
        ],
    ];

    function render_footer_logo($imageRelPath) {
        if (empty($imageRelPath)) return;
        $logo_url = get_template_directory_uri() . '/img/' . $imageRelPath;
        ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
        </a>
        <?php
    }

    function format_tel_link($tel) {
        $digits = preg_replace('/[^0-9]/', '', $tel);
        if (strpos($digits, '0') === 0) {
            $digits = '81' . substr($digits, 1);
        }
        return '+' . $digits;
    }

    function render_shop_item($shop) {
        ?>
        <li>
            <h3><?php echo esc_html($shop['name']); ?></h3>
            <p><?php echo esc_html($shop['address']); ?></p>
            <p>TEL <a href="tel:<?php echo esc_attr(format_tel_link($shop['tel'])); ?>"><?php echo esc_html($shop['tel']); ?></a></p>
            <div class="footer__btn-r">
                <a href="<?php echo esc_url($shop['reserveUrl']); ?>" target="_blank" rel="noopener noreferrer">reserve</a>
            </div>
            <div class="footer__btn-g">
                <a href="<?php echo esc_url($shop['mapUrl']); ?>" target="_blank" rel="noopener noreferrer">google map</a>
            </div>
        </li>
        <?php
    }
?>

<!-- footer -->
<footer class="l-footer">
    <div class="footer__container">
        <div class="footer__logo">
            <?php render_footer_logo($footerLogoImage); ?>
        </div>
        <div class="footer__list">
            <ul>
                <?php foreach ($shops as $shop) : ?>
                    <?php render_shop_item($shop); ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="footer__menu">
        <?php if (has_nav_menu('footer-menu1')) : ?>
            <div class="footer__menu-col footer__menu-col--1">
                <?php
                    wp_nav_menu([
                        'theme_location'  => 'footer-menu1',
                        'menu_class'      => 'footer__menu-list',
                        'container'       => false,
                        'walker'          => new Term_Url_Walker(),
                    ]);
                ?>
            </div>
        <?php endif; ?>
    <div class="footer__copyright">
        <p><?php echo esc_html($copyrightText); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>