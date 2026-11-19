<?php
$defaults = [
    'items' => [],
];
$data = wp_parse_args($args ?? [], $defaults);
$items = (array) $data['items'];
?>

<!-- contents1-4 / history -->
<div class="p-contents1-4">
    <?php foreach ($items as $index => $item) : ?>
        <div
            class="p-contents1-4__box p-contents1-4__box--<?php echo $index + 1; ?>"
            style="--bg-pc: url('<?php echo esc_url($item['image']); ?>'); --bg-sp: url('<?php echo esc_url($item['image_sp']); ?>');">
            <div class="p-contents1-4__num">
                <span><?php echo esc_html($item['num']); ?></span>
            </div>
            <div class="p-contents1-4__txt">
                <h3 data-anim="text-reveal">
                    <?php echo esc_html($item['title']); ?>
                </h3>
                <p class="is-pc-only" data-anim="text-reveal" role="text">
                    <?php echo nl2br(esc_html($item['text'])); ?>
                </p>
                <p class="is-sp-only" data-anim="text-reveal" role="text">
                    <?php echo nl2br(esc_html($item['text_sp'])); ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>