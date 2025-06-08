<!-- sustainability -->
<?php

/**
 * Template Name: page-sustainability
 * Description: This is the template
 */

get_header('sustainability');
?>
<main>
    <!-- サステナビリティの考え方と取り組み -->
    <section class="sustainability-intro">
        <div class="container">
            <h2 style="font-weight:500; font-size:14px;">サステナビリティへの考え方</h2>
            <p style="font-weight:300; font-size:14px; padding-right:5%; padding-left:5%;">私たちは、持続可能な社会の実現に向けて<br>環境保護、社会貢献、経済成長のバランスを重視しています。<br>次世代に向けた持続可能な未来を築くため<br>日々、以下の活動にも取り組んでいます。</p>
        </div>
    </section>

    <!-- サステナビリティニュースセクション -->
    <div style="background-color:#f9f9f9;">
        <section class="news-archive-section">
            <div class="container archive-container">
                <div class="news-toppage-ttl">
                    <h2 style="width: 100%;">サステナビリティニュース</h2>
                    <span>
                        <a href="<?php echo esc_url(home_url()); ?>/archives/news#newsNavtag-sustainability" class="more-link animationbutton">
                            <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" style="fill: #007bff;">
                            一覧を見る
                        </a>
                    </span>
                </div>
                <p class="news-toppage-ttl-en">SUSTAINABILITY NEWS</p>
                <?php get_template_part('component', 'tagnavnews-sustainability'); ?>
            </div>


            <!-- ESGセクション -->
            <section class="esg-section" id="initiatives">
                <div class="container" style="max-width:1000px!important;">
                    <h2>ESG（環境・社会・ガバナンス）への取り組み</h2>
                    <div class="sustainability-grid" style="grid-template-columns: 1fr 1fr 1fr!important;">
                        <div class="sustainability-content" id="environment">
                            <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_sus_e.png" alt="環境" loading="lazy" width="213" height="319">
                            <h3>環境</h3>
                            <p>環境保護に向けた取り組みとして、エネルギー効率の向上や廃棄物の削減に努めています。</p>
                        </div>
                        <div class="sustainability-content" id="society">
                            <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_sus_s.png" alt="社会" loading="lazy">
                            <h3>社会</h3>
                            <p>地域社会への貢献や多様性の尊重を通じて、持続可能な社会の実現を目指しています。</p>
                        </div>
                        <div class="sustainability-content" id="governance">
                            <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_sus_g.png" alt="ガバナンス" loading="lazy">
                            <h3>ガバナンス</h3>
                            <p>透明性のある経営と倫理的なビジネス慣行を通じて、信頼される企業を目指します。</p>
                        </div>
                    </div>
                </div>
            </section>
</main>
<?php
get_footer();
?>