<?php
$shops = $args['shops'] ?? [];
if ( empty( $shops ) ) return;
?>

<!-- contents5 / restaurant list -->
<div class="p-contents5">
    <div class="p-ttl">
        <div class="p-ttl__img">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo/logo-img2.png' ); ?>" alt="sushizen logo">
        </div>
        <h2 class="p-ttl__h2">restaurant list</h2>
    </div>
    <div class="p-contents5__tab">
        <ul>
            <span class="p-contents5__tab-indicator"></span>
            <?php foreach ( $shops as $index => $shop ) : ?>
            <li>
                <a href="#<?php echo esc_attr( $shop['id'] ?? '' ); ?>"
                    class="js-contents5-tab<?php echo $index === 0 ? ' is-active' : ''; ?>"
                    data-target="<?php echo esc_attr( $shop['id'] ?? '' ); ?>">
                    <?php echo esc_html( $shop['tab'] ?? '' ); ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php foreach ( $shops as $index => $shop ) : ?>
    <div class="p-contents5__list js-contents5-panel<?php echo $index === 0 ? ' is-active' : ''; ?>"
        id="<?php echo esc_attr( $shop['id'] ?? '' ); ?>">
        <div class="p-contents5__details">
            <div class="p-contents5__shop">
                <h4 data-anim="text-reveal">
                <?php echo esc_html( $shop['name'] ?? '' ); ?><span><?php echo esc_html( $shop['area'] ?? '' ); ?></span>
                </h4>
                <p data-anim="text-reveal" role="text"><?php echo esc_html( $shop['address'] ?? '' ); ?></p>
                <?php if ( ! empty( $shop['mapUrl'] ) ) : ?>
                <a href="<?php echo esc_url( $shop['mapUrl'] ); ?>" data-anim="text-reveal" target="_blank" rel="noopener noreferrer">google map</a>
                <?php endif; ?>
            </div>
            <div class="p-contents5__txt">
                <p data-anim="text-reveal" role="text"><?php echo wp_kses_post( $shop['text'] ?? '' ); ?></p>
            </div>
            <?php if ( ! empty( $shop['detailsUrl'] ) ) : ?>
            <div class="p-contents5__btn">
                <a class="--details" href="<?php echo esc_url( $shop['detailsUrl'] ); ?>">view details</a>
            </div>
            <?php endif; ?>
            <div class="p-contents5__schedule">
                <ul>
                    <?php if ( ! empty( $shop['hours'] ) ) : ?>
                    <li>
                        <p>Opening Hours</p>
                        <table>
                            <?php foreach ( $shop['hours'] as $hour ) : ?>
                            <tr>
                                <th data-anim="text-reveal"><?php echo esc_html( $hour['label'] ?? '' ); ?></th>
                                <td data-anim="text-reveal"><?php echo esc_html( $hour['value'] ?? '' ); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </li>
                    <?php endif; ?>
                    <?php if ( ! empty( $shop['closed'] ) ) : ?>
                    <li>
                        <p>Closed</p>
                        <p data-anim="text-reveal" role="text"><?php echo esc_html( $shop['closed'] ); ?></p>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if ( ! empty( $shop['reserveUrl'] ) ) : ?>
            <div class="p-contents5__btn">
                <a class="--reserve" href="<?php echo esc_url( $shop['reserveUrl'] ); ?>" target="_blank" rel="noopener noreferrer">reserve</a>
            </div>
            <?php endif; ?>
        </div>
        <div class="p-contents5__img js-img-slideshow" data-anim="img-reveal">
            <?php foreach ( $shop['images'] ?? [] as $i => $img ) : ?>
            <img
                src="<?php echo esc_url( $img['src'] ?? '' ); ?>"
                alt="<?php echo esc_attr( $img['alt'] ?? '' ); ?>"
                class="<?php echo $i === 0 ? 'is-active' : ''; ?>"
            >
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>