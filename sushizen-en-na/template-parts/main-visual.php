<?php
    $defaults = [
        'videoPc'    => '',
        'videoSp'    => '',
        'poster'     => '',
        'logo'       => '',
        'logoAlt'    => '',
        'texts'      => [],
        'scrollText' => '',

        'currentLang' => 'en',
        'jpUrl'       => '',
        'enUrl'       => '',
    ];

    $data = wp_parse_args($args ?? [], $defaults);

    $videoPc     = $data['videoPc'];
    $videoSp     = $data['videoSp'];
    $poster      = $data['poster'];
    $logo        = $data['logo'];
    $logoAlt     = $data['logoAlt'];
    $texts       = (array) $data['texts'];
    $scrollText  = $data['scrollText'];

    $currentLang = strtolower($data['currentLang']);
    $jpUrl       = $data['jpUrl'];
    $enUrl       = $data['enUrl'];

    $hasVideo = !empty($videoPc) || !empty($videoSp);
?>

<!-- main-visual -->
<div class="p-main-visual">
    <div class="p-main-visual__video">
        <?php if ($hasVideo) : ?>
            <?php if (!empty($videoPc)) : ?>
                <video
                    class="p-main-visual__movie p-main-visual__movie--pc"
                    <?php if (!empty($poster)) : ?>
                        poster="<?php echo esc_url($poster); ?>"
                    <?php endif; ?>
                    autoplay
                    muted
                    loop
                    playsinline
                    webkit-playsinline
                >
                    <source src="<?php echo esc_url($videoPc); ?>" type="video/mp4">
                </video>
            <?php endif; ?>

            <?php if (!empty($videoSp)) : ?>
                <video
                    class="p-main-visual__movie p-main-visual__movie--sp"
                    <?php if (!empty($poster)) : ?>
                        poster="<?php echo esc_url($poster); ?>"
                    <?php endif; ?>
                    autoplay
                    muted
                    loop
                    playsinline
                >
                    <source src="<?php echo esc_url($videoSp); ?>" type="video/mp4">
                </video>
            <?php endif; ?>
        <?php elseif (!empty($poster)) : ?>
            <img
                class="p-main-visual__img"
                src="<?php echo esc_url($poster); ?>"
                alt="thumbnail of mv">
        <?php endif; ?>

        <?php if (!empty($logo) || !empty($texts) || !empty($scrollText)) : ?>
            <div class="p-main-visual__overlay">
                <?php if (!empty($texts)) : ?>
                    <div class="p-main-visual__txt">
                        <?php foreach ($texts as $text) : ?>
                            <p><?php echo esc_html($text); ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($scrollText)) : ?>
                    <div class="p-main-visual__scroll">
                        <p><?php echo esc_html($scrollText); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($jpUrl || $enUrl) : ?>
            <div class="p-main-visual__lang" aria-label="Language">
                <?php if ($currentLang === 'en') : ?>
                    <span class="is-current" aria-current="page">EN</span>
                    <?php if (!empty($jpUrl)) : ?>
                        <a href="<?php echo esc_url($jpUrl); ?>">JP</a>
                    <?php endif; ?>
                <?php else : ?>
                    <?php if (!empty($enUrl)) : ?>
                        <a href="<?php echo esc_url($enUrl); ?>">EN</a>
                    <?php endif; ?>
                    <span class="is-current" aria-current="page">JP</span>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>