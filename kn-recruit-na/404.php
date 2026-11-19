<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
    <div class="c__page-header-img--404"></div>
    <div class="c__page-header-detail">
        <div class="c__page-header-detail--passing">
        <h2 class="c__page-header-detail-ttl">
            <span class="c__page-header-detail-ttl--en">404 NOT FOUND</span>
            <span class="c__page-header-detail-ttl--jp">お探しのページが見つかりませんでした</span>
        </h2>
        </div>
    </div>
    <div class="c__page-header-scroll-btn" id="scroll-btn"><span>SCROLL</span></div>
</div>

<!-- contents -->
<div id="l__container">
    <main class="l__main">
        <div class="l__container-page">
            <div class="p__page-404">
                <div class="p__page-404--inner">
                    <h3 class="p__page-404--ttl">お探しのページが見つかりませんでした</h3>
                    <p class="p__page-404--txt">
                        お探しのページは存在しないか、または削除されました。<br>
                        メニューよりご覧になりたいページへ移動してください。
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>
