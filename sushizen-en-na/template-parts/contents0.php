<?php
$defaults = [
    'image'       => '',
    'imageAlt'    => '',
    'name'        => '',
    'profile'     => '',
    'awardTitle'  => '',
    'awards'      => [],
];
$data = wp_parse_args($args ?? [], $defaults);
$image       = $data['image'];
$imageAlt    = $data['imageAlt'];
$name        = $data['name'];
$profile     = $data['profile'];
$awardTitle  = $data['awardTitle'];
$awards      = (array) $data['awards'];
?>

<!-- contents0 / profile -->
<div class="p-contents0">
    <?php if (!empty($image)) : ?>
        <div class="p-contents0__img" data-anim="img-reveal" data-depth-y="10" data-depth-x="10">
            <img
                src="<?php echo esc_url($image); ?>"
                alt="<?php echo esc_attr($imageAlt); ?>"
            >
        </div>
    <?php endif; ?>
    <div class="p-contents0__main">
        <?php if (!empty($name) || !empty($profile)) : ?>
            <div class="p-contents0__profile">
                <?php if (!empty($name)) : ?>
                    <h3 data-anim="text-reveal"><?php echo esc_html($name); ?></h3>
                <?php endif; ?>
                <?php if (!empty($profile)) : ?>
                    <p data-anim="text-reveal" role="text"><?php echo nl2br( esc_html( $profile ) ); ?></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($awardTitle) || !empty($awards)) : ?>
            <div class="p-contents0__awards">
                <?php if (!empty($awardTitle)) : ?>
                    <p class="p-contents0__awards-title"><?php echo esc_html($awardTitle); ?></p>
                <?php endif; ?>
                <?php if (!empty($awards)) : ?>
                    <ul>
                        <?php foreach ($awards as $award) : ?>
                            <li data-anim="text-reveal"><?php echo esc_html($award); ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>