<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="c__page-header">
    <div class="c__page-header-img--contact"></div>
    <div class="c__page-header-detail">
        <div class="c__page-header-detail--passing">
            <h2 class="c__page-header-detail-ttl">
            <span class="c__page-header-detail-ttl--en">CONTACT</span>
            <span class="c__page-header-detail-ttl--jp">お問い合わせ</span>
            </h2>
        </div>
    </div>
    <div class="c__page-header-scroll-btn" id="scroll-btn"><span>SCROLL</span></div>
</div>

<!-- breadcrumb -->
<div class="c__page-header-box">
    <!-- breadcrumb -->
    <div class="c__page-header-box-breadcrumb">
        <ol class="c__page-header-box-breadcrumb-list">
            <li class="c__page-header-box-breadcrumb-list-item"><a href="<?php echo home_url(); ?>">HOME</a></li>
            <li class="c__page-header-box-breadcrumb-list-item">お問い合わせ</li>
        </ol>
    </div>
</div>

<!-- contents -->
<div id="l__container">
    <main class="l__main">
        <div class="l__container-area-page">
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer(); ?>