<?php
$title = $args['title'] ?? get_the_title();

if (!empty($args['bg_pc'])) {
    $bg_pc = $args['bg_pc'];
} elseif (has_post_thumbnail()) {
    $bg_pc = get_the_post_thumbnail_url(get_the_ID(), 'full');
} else {
    $bg_pc = get_template_directory_uri() . '/img/no-image.jpg';
}

$bg_sp = $args['bg_sp'] ?? '';
?>

<!----------------------------------------------------------------------->
<!--##### 下層ページヘッダー #####-->
<div class="header-sub">
    <div id="header-sub__contents" class="flex">
        <div class="header-sub__bg">
        <img class="header-sub__bg--pc" src="<?php echo esc_url($bg_pc); ?>" alt="<?php echo esc_attr($title); ?>">
        <?php if ($bg_sp) : ?>
            <img class="header-sub__bg--sp" src="<?php echo esc_url($bg_sp); ?>" alt="<?php echo esc_attr($title); ?>">
        <?php endif; ?>
        </div>
        <div class="header-sub__overlay"></div>
        <div class="header-sub__ttl">
            <h2><span class="en"><?php echo esc_html($title); ?></span></h2>
        </div>
    </div>
</div><!-- /#header-sub -->
