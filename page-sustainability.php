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
        <section class="news-section" style="padding-top:40px;" id="sustainabilitynews">
            <div class="container news-container">
                <div class="news-grid">
                    <!-- 左側: 全て/製品/サステナビリティ -->
                    <div class="news-main" style="width:70%!important; padding-left:0px; padding-right:0px;">
                        <div class="news-toppage-ttl">
                            <h2 style="width:auto">サステナビリティニュース</h2>
                            <!-- <span>
                                <a href="/news/" class="more-link animationbutton">
                                    <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="40px" height="40px" >
                                    一覧を見る
                                </a>
                            </span> -->
                        </div>
                        <p class="news-toppage-ttl-en">SUSTAINABILITY NEWS</p>
                        <div class="news-list">
                            <div class="news-list-wrapper">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_news_sus_01.png" alt="" class="news-cap">
                                <article class="news-item product" style="align-items:flex-start;">
                                    <div class="news-item-level1">
                                        <time>2024.03.20</time>
                                        <span class="news-category">サステナビリティ</span>
                                    </div>
                                    <a href="#" class="news-item-txt">地域の清掃活動支援について</a>
                                </article>
                            </div>

                            <div class="news-list-wrapper">
                                <img src="https://images.unsplash.com/photo-1451847251646-8a6c0dd1510c?auto=format&fit=crop&q=80" alt="サステナビリティ" class="news-cap">
                                <article class="news-item product" style="align-items:flex-start;">
                                    <div class="news-item-level1">
                                        <time>2024.03.10</time>
                                        <span class="news-category">サステナビリティ</span>
                                    </div>
                                    <a href="#" class="news-item-txt">環境への取り組みについて</a>
                                </article>
                            </div>

                            <div class="news-list-wrapper">
                                <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&q=80" alt="" class="news-cap">
                                <article class="news-item product" style="align-items:flex-start;">
                                    <div class="news-item-level1">
                                        <time>2024.03.19</time>
                                        <span class="news-category">サステナビリティ</span>
                                    </div>
                                    <a href="#" class="news-item-txt">当社の取り組みが新聞に掲載されました</a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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