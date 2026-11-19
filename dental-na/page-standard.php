<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

<!-- header -->
<div class="l-container p-header">
    <div class="p-header standard">
        <div class="p-header__item"></div>
        <div class="p-header__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/page/header_standard.jpg" alt="施設基準ヘッダー画像">
        </div>
        <div class="p-header__txt">
            <p>standard</p>
            <h2>施設基準</h2>
        </div>
    </div>
</div>

<!-- breadcrumb -->
<nav class="l-container breadcrumb" aria-label="パンくずリスト">
    <div class="p-breadcrumb">
        <ol>
            <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
            <li>施設基準</li>
        </ol>
    </div>
</nav>

<!-- contents -->
<main class="l-main page" id="main">
    <div class="l-main__inner">
        <!-- standard-list -->
        <section class="l-container standard-list">
            <div class="p-standard-list">
                <div class="p-standard-list__contents">
                    <h3 class="fade-up">当医院は、以下の施設基準等に適合している旨、厚生労働省地方厚生（支）局に届出を行っています。</h3>
                    <ul>
                        <li class="fade-left">
                            <h4>歯科初診料の注1に規定する基準</h4>
                            <p>歯科外来診療における院内感染防止対策に十分な体制の整備、十分な機器を有し、研修を受けた常勤の歯科医師およびスタッフが在籍しています。</p>
                        </li>
                        <li class="fade-left">
                            <h4>明細書発行体制等加算</h4>
                            <p>診療の透明性を高めるため、すべての患者さまに診療報酬の算定項目が記載された診療明細書を無償で発行しています。<br>明細書の発行を希望されない方は、受付へその旨をお申し出ください。</p>
                        </li>
                        <li class="fade-left">
                            <h4>医療情報取得加算</h4>
                            <p>マイナンバーカードによるオンライン資格確認システムを導入しています。このシステムにより、患者さまの医療情報（受診歴、服薬情報、特定健診情報その他必要な診療情報）を取得し、より安全で適切な診療を提供できる体制を整えています。<br>マイナンバーカードをお持ちの患者さまは、受付時にご提示いただくことでスムーズな確認が可能になります。</p>
                        </li>
                        <li class="fade-left">
                            <h4>医療DX推進体制整備加算</h4>
                            <p>医療のデジタル化を通じて質の高い医療を提供できるよう、オンライン資格確認や電子カルテ、電子処方箋などのシステムを導入しています。</p>
                        </li>
                        <li class="fade-left">
                            <h4>情報通信機器を用いた診療</h4>
                            <p>情報通信機器を活用したオンライン診療に対応しています。直接の来院が難しい患者さまでも、必要な診療を受けていただける環境を整えています。</p>
                        </li>
                        <li class="fade-left">
                            <h4>口腔管理体制強化加算</h4>
                            <p>
                                当院は「口腔管理体制強化加算」の施設基準を満たした医院に認定されています。<br>
                                ・虫歯や歯周病予防のためのPMTC（専門的な歯のクリーニング）やフッ素塗布を保険適用で提供しています。<br>
                                ・訪問診療による口腔ケアやリハビリを、保険適用で提供しています。<br>
                                ・歯科疾患の重症化予防や、高齢者対応に関する研修を受けた歯科医師が在籍しています。
                            </p>
                        </li>
                        <li class="fade-left">
                            <h4>歯科外来診療医療安全対策加算</h4>
                            <p>
                                ・安心で安全な歯科医療環境の提供を行うにつき十分な装置や器具等（自動体外式除細動器（AED）<br>
                                ・経皮的動脈血酸素飽和度測定器（パルスオキシメーター）、酸素（人工呼吸・酸素吸入用のもの）、血圧計・救急蘇生セット）を整備しています。<br>
                                ・医療安全対策に係わる研修の受講ならびに従業者への研修の実施を行っています。
                            </p>
                        </li>
                        <li class="fade-left">
                            <h4>CAD/CAM冠及びCAD/CAMインレー</h4>
                            <p>
                                CAD/CAMとよばれるコンピューター支援設計・製造ユニットを用いて作製される冠（被せ物）やインレー（詰め物）を用いて治療を行なっています。
                            </p>
                        </li>
                        <li class="fade-left">
                            <h4>クラウン・ブリッジの維持管理</h4>
                            <p>
                                当院で装着した冠（被せ物）やブリッジについて、2年間の維持管理を行っています。
                            </p>
                        </li>
                        <li class="fade-left">
                            <h4>一般名での処方について</h4>
                            <p>
                                特定の薬が不足した場合でも、必要な薬を確保しやすくするため、後発医薬品がある薬については、患者さまに説明したうえで商品名ではなく、一般名（有効成分の名称）で処方する場合があります。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>