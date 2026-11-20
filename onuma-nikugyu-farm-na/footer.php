<!----------------------------------------------------------------------->
<!--##### フッター #####-->
<footer>
  <div class="index-contact">
    <div id="contact" class="contents--small contents--type01">
      <div class="index-contact__btn">
        <a class="contact-btn flex flex--center" href="<?php echo home_url('/contact/'); ?>"><p>お問い合わせ</p></a>
      </div>
    </div>
  </div>
  <div class="access-container contents--type03">
    <div class="access-container__bg access__images"></div>
    <div class="access-container__wrap">
      <div class="access-container__box">
        <div class="access-container__item">
          <div class="access-container__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo-ozawa.png" alt="小澤牧場株式会社"></div>
          <p class="access-container__txt">〒041-1352 <br class="br--sp">北海道亀田郡七飯町字軍川407</p>
          <p class="access-container__txt">TEL：0138-67-3600</p>
          <p class="access-container__txt">FAX：0138-67-3848</p>
        </div>
        <div class="access-container__item">
          <div class="access-container__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_onuma-logo.png" alt="株式会社大沼肉牛ファーム"></div>
          <p class="access-container__txt">〒041-1353 <br class="br--sp">北海道亀田郡七飯町字上軍川619-4</p>
          <p class="access-container__txt">TEL：0138-67-2127</p>
          <p class="access-container__txt">FAX：0138-67-3848</p>
        </div>
      </div>
      <div class="access-container__box">
        <div class="access-container__item">
          <p class="access-container__txt">小澤牧場(株)大沼本場</p>
          <p class="access-container__txt">〒041-1352 <br class="br--sp">北海道亀田郡七飯町字軍川407</p>
          <p class="access-container__txt">TEL：0138-67-3600</p>
          <p class="access-container__txt">FAX：0138-67-3848</p>
        </div>
        <div class="access-container__item">
          <p class="access-container__txt">小澤牧場(株)芽室分場</p>
          <p class="access-container__txt">〒082-0006 <br class="br--sp">北海道河西郡芽室町東芽室南3線8番地4</p>
          <p class="access-container__txt">TEL：0155-62-8460</p>
          <p class="access-container__txt">FAX：0155-62-8461</p>
        </div>
        <div class="access-container__item">
          <p class="access-container__txt">小澤牧場(株)長沼分場</p>
          <p class="access-container__txt">〒069-1464 <br class="br--sp">北海道夕張郡長沼町字幌内1720番56</p>
          <p class="access-container__txt">TEL：0123-76-7106</p>
          <p class="access-container__txt">FAX：0123-76-7109</p>
        </div>
      </div>
    </div>
    <p class="access-container__copyright">© 北海道小澤牧場グループ</p>
  </div>
</footer><!-- END / footer -->

</div><!-- END / #scroll__contents -->

<!--##### ページトップに戻るボタン #####-->
<div id="page_top">
  <a href="#">
    <span class="arrow">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="12" y1="20" x2="12" y2="4"></line>
        <polyline points="6 10 12 4 18 10"></polyline>
      </svg>
    </span>
    <span>トップへ</span>
  </a>
</div>

</div><!-- END / #page -->

<?php wp_footer(); ?>

<!----------------------------------------------------------------------->
<!-- ▼JS -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script><!-- jquery -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script><!-- slick slider -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easeScroll.js"></script><!-- easeScroll -->
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script><!-- custom script -->

</body>
</html>