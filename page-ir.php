<!-- ir -->
<?php

/**
 * Template Name: page-ir
 * Description: This is the template
 */

get_header('ir');
?>
<main>
    <!-- ニュースセクション -->
    <section class="news-section" style="margin-top:0px; margin-bottom:0px;" id="irnews">
        <div class="container news-container">
            <div class="news-grid">
                <div class="news-main" style="width:80%!important; padding-left:0px; padding-right:0px; max-width:600px;">
                    <div class="news-toppage-ttl">
                        <h2 style="width:auto">IRニュース</h2>
                        <span>
                            <a href="<?php echo esc_url(home_url()); ?>/archives/news#newsNavtag-ir" class="more-link animationbutton">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" style="fill: #007bff;">
                                一覧を見る
                            </a>
                        </span>
                    </div>
                    <p class="news-toppage-ttl-en">IR NEWS</p>
                    <div class="news-list">
                        <div class="news-list-wrapper">
                            <article class="news-item-row product">
                                <div class="news-item-level1">
                                    <time>2024.11.01</time>
                                    <span class="news-category-row">決算短信</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt-row">2025年3月期 第2四半期決算短信を掲載しました。</a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <article class="news-item-row product">
                                <div class="news-item-level1">
                                    <time>2024.11.01</time>
                                    <span class="news-category-row">決算説明会</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt-row">2025年3月期 第2四半期決算説明会資料を掲載しました。</a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <article class="news-item-row product">
                                <div class="news-item-level1">
                                    <time>2024.03.19</time>
                                    <span class="news-category-row">その他</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt-row">人事異動のお知らせ</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- その他 -->
    <section class="section-tight" id="irabout">
        <div class="l-grid--4">

            <div style="display: flex; flex-direction: column;" id="irlibrary">
                <a href="<?php echo esc_url(home_url()); ?>" class="category-banner-ir">
                    <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_libraryfile.jpg" alt="IRライブラリー">
                    <div class="banner-content-ir">
                        <h3 class="cdh3"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_white.svg" alt="" class="cd">IRライブラリー</h3>
                    </div>
                    <ul class="ir-buttons text80" style="padding-left:0px; padding-top:10px;">
                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">決算短信</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">有価証券報告書</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">決算説明資料</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">IR資料</a></li>

                    </ul>
                </a>
            </div>
            <div style="display: flex; flex-direction: column;" id="irreport">
                <a href="<?php echo esc_url(home_url()); ?>" class="category-banner-ir">
                    <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_office.png" alt="統合報告書">
                    <div class="banner-content-ir">
                        <h3 class="cdh3"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_white.svg" alt="" class="cd">統合報告書</h3>
                    </div>
                    <ul class="ir-buttons text80" style="padding-left:0px; padding-top:10px;">
                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>/ir/stock/index.php" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">統合報告書</a></li>

                    </ul>
                </a>
            </div>
            <div style="display: flex; flex-direction: column;" id="irfinancial">
                <a href="<?php echo esc_url(home_url()); ?>" class="category-banner-ir">
                    <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_office.jpg" alt="経営情報">
                    <div class="banner-content-ir">
                        <h3 class="cdh3"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_white.svg" alt="" class="cd">財務情報</h3>
                    </div>
                    <ul class="ir__topLinkBox01_linkList text80" style="padding-left:0px; padding-top:10px;">
                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">株主・投資家の皆様へ</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">コーポレート・ガバナンス</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">ディスクロージャーポリシー</a></li>

                    </ul>
                </a>
            </div>
            <div style="display: flex; flex-direction: column;" id="irstocks">
                <a href="<?php echo esc_url(home_url()); ?>" class="category-banner-ir">
                    <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_mtg.png" alt="株式について">
                    <div class="banner-content-ir">
                        <h3 class="cdh3"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_white.svg" alt="" class="cd">株式について</h3>
                    </div>
                    <ul class="ir__topLinkBox01_linkList text80" style="padding-left:0px; padding-top:10px;">
                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">株式情報</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">株主総会</a></li>

                        <li class="ir-banner-li"><a href="<?php echo esc_url(home_url()); ?>" target="_blank" rel="noopener noreferrer" class="ir-button ir-banner-a"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" class="ir-banner-img">株価情報</a></li>

                    </ul>
                </a>
            </div>
        </div>
    </section>


    <!-- よくあるご質問セクション -->
    <section class="faq" id="iffaq" style="background-color:#f5f5f5; padding:0!important;">
        <!-- アコーディオン -->
        <div class="accordion section-tight" id="accordionExample">
            <h2 class="text80" style="padding-bottom:8px;">よくあるご質問</h2>
            <p class="news-toppage-ttl-en">FAQ</p>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Q1. どのような会社ですか。事業内容について教えてください。
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>A1. 機器製造から、メーカー取扱製品の販売まで総合的な産業サービスを提供しています。
                            事業内容や理念等について、詳しくは「企業案内」ページをご覧ください。</p>
                        <a href="<?php echo esc_url(home_url()); ?>/company/"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20" height="20">企業案内</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Q2. 会社の設立時期や沿革について教えてください。
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>A2. 設立は1949年4月です。当社沿革については、「沿革」ページをご覧ください。</p>
                        <a href="<?php echo esc_url(home_url()); ?>/company/#history"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.png" alt="" width="20" height="20"> 沿革</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Q3. コーポレート・ガバナンス体制はどうなっていますか。
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>コーポレートガバナンスページをご覧ください。</p>
                        <a href="<?php echo esc_url(home_url()); ?>/company/#history"><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.png" alt="" width="20" height="20">コーポレートガバナンス</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- お問い合わせ -->
    <?php get_template_part('component', 'formcontact'); ?>
</main>
<?php
get_footer();
?>