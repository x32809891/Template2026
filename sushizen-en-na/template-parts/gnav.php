<?php
    $homeUrl     = home_url('/');
    $logoType    = 'image';
    $logoWhite   = 'logo/logo-white.png';
    $logoBlack   = 'logo/logo-black.png';
    function render_logo_picture($imageRelPath, $extraClass = '', $width = 208, $height = 60) {
        $logo_url  = get_template_directory_uri() . '/img/' . $imageRelPath;
        $logo_path = get_template_directory() . '/img/' . $imageRelPath;
        $logo_webp_url  = $logo_url . '.webp';
        $logo_webp_path = $logo_path . '.webp';
        ?>
        <picture class="gnav__logo--picture <?php echo esc_attr($extraClass); ?>">
            <?php if (file_exists($logo_webp_path)) : ?>
                <source srcset="<?php echo esc_url($logo_webp_url); ?>" type="image/webp">
            <?php endif; ?>
            <img
                src="<?php echo esc_url($logo_url); ?>"
                alt="<?php echo esc_attr(get_bloginfo('name')) . ' logo'; ?>"
                width="<?php echo esc_attr($width); ?>"
                height="<?php echo esc_attr($height); ?>"
                decoding="async"
            >
        </picture>
        <?php
    }
?>

<!-- loading -->
<div class="c-loading" id="loading"></div>
<!-- gnav -->
<div class="l-gnav">
    <div class="gnav__container">
        <div class="gnav__container--inner">
            <div class="gnav__box">
                <!-- logo -->
                <div class="gnav__logo">
                    <a href="<?php echo esc_url($homeUrl); ?>" class="gnav__logo--link">
                        <?php if ($logoType === 'image') : ?>
                            <?php render_logo_picture($logoWhite, 'is-white'); ?>
                            <?php render_logo_picture($logoBlack, 'is-black'); ?>
                        <?php endif; ?>
                    </a>
                </div>
                <!-- pc-nav -->
                <div class="gnav__list">
                    <?php if (has_nav_menu('header-menu')) : ?>
                        <?php
                            wp_nav_menu([
                                'theme_location'  => 'header-menu',
                                'menu_class'      => 'gnav__menu',
                                'container'       => 'nav',
                                'container_class' => 'gnav__menu',
                                'walker'          => new Term_Url_Walker(),
                            ]);
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- sp-nav -->
<div class="gnav__modal">
    <div class="gnav__modal__toggle" id="js-gnav-toggle" aria-label="メニューを開く" role="button" tabindex="0">
        <span></span>
        <span></span>
    </div>
    <div class="gnav__overlay" id="js-gnav-overlay"></div>
    <div class="gnav__modal__menu" id="js-gnav-modal" data-lenis-prevent>
        <div class="gnav__modal__content">
            <?php if (has_nav_menu('modal-menu')) : ?>
                <?php
                    wp_nav_menu([
                        'theme_location' => 'modal-menu',
                        'menu_class'     => 'gnav__modal__list',
                        'container'      => false,
                        'walker'         => new Term_Url_Walker(),
                    ]);
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>