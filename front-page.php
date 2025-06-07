<?php

/**
 * Template Name: Front Page
 * Description: This is the template for the front page.
 */

get_header();
?>
<main>

    <!-- メインビジュアル -->
    <div class="main-visual">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80" alt="工場設備">
                    <div class="slide-content">
                        <h2>未来を創る技術</h2>
                        <p>最先端の工業製品で社会に貢献</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&q=80" alt="自動化設備" loading="lazy">
                    <div class="slide-content">
                        <h2>革新的なソリューション</h2>
                        <p>自動化技術で産業の発展に貢献</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80" alt="研究開発" loading="lazy">
                    <div class="slide-content">
                        <h2>持続可能な未来へ</h2>
                        <p>環境に配慮した製品開発</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&q=80" alt="先端技術" loading="lazy">
                    <div class="slide-content">
                        <h2>次世代技術の追求</h2>
                        <p>IoT/ICTで製造業の未来を切り拓く</p>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- ニュース -->
    <section class="news-section">
        <div class="container news-container">
            <div class="news-grid">
                <!-- 左側: 全て/製品/サステナビリティ -->
                <div class="news-main">
                    <div class="news-toppage-ttl">
                        <h2>ニュース</h2>
                        <span>
                            <a href="<?php echo esc_url(home_url()); ?>/news/" class="more-link animationbutton">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px">
                                一覧を見る
                            </a>
                        </span>
                    </div>
                    <p class="news-toppage-ttl-en">NEWS</p>
                    <div class="news-list">
                        <!-- ニュース -->
                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://images.unsplash.com/photo-1542274368-443d694d79aa?auto=format&fit=crop&q=80" alt="" class="news-cap">
                                <p class="mark-newsarrival text80">NEW</p>
                            </div>
                            <article class="news-item product">
                                <div class="news-item-level1">
                                    <time>2024.03.20</time>
                                    <span class="news-category">製品A</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">新製品の発売に関するお知らせ「A群に対応する検査設備量産型『QE120』を開発フェーズから販売フェーズへ」</a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://images.unsplash.com/photo-1451847251646-8a6c0dd1510c?auto=format&fit=crop&q=80" alt="サステナビリティ" class="news-cap">
                                <p class="mark-newsarrival text80">NEW</p>
                            </div>
                            <article class="news-item sustainability">
                                <div class="news-item-level1">
                                    <time>2024.03.19</time>
                                    <span class="news-category">サステナビリティ</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">環境への取り組みについて更新しました「地域の海洋ゴミクリーンアップキャンペーン『CHANGE FOR FUTURE』を国内5カ所で展開」</a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&q=80" alt="" class="news-cap">
                                <!-- <p class="mark-newsarrival">NEW</p> -->
                            </div>
                            <article class="news-item product">
                                <div class="news-item-level1">
                                    <time>2024.03.10</time>
                                    <span class="news-category">製品B</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">新製品が記事に掲載されました<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&q=80" alt="" class="news-cap">
                                <!-- <p class="mark-newsarrival">NEW</p> -->
                            </div>
                            <article class="news-item product">
                                <div class="news-item-level1">
                                    <time>2024.03.10</time>
                                    <span class="news-category">製品B</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">新製品が記事に掲載されました<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- 右側: IR情報 -->
                <div class="news-ir">
                    <div class="news-toppage-ttl">
                        <h2>IRニュース</h2>
                        <span>
                            <a href="<?php echo esc_url(home_url()); ?>/ir/#irnews/" class="more-link animationbutton">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" style="fill: #007bff;">
                                一覧を見る
                            </a>
                        </span>
                    </div>
                    <p class="news-toppage-ttl-en">IR NEWS</p>
                    <div class="news-list">
                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_mtg.png" class="news-cap">
                                <p class="mark-newsarrival text80">NEW</p>
                            </div>
                            <article class="news-item ir">
                                <div class="news-item-level1">
                                    <time>2024.03.15</time>
                                    <span class="news-category">IR</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">2024年度第3四半期決算発表<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_data.png" alt="" class="news-cap">
                                <!-- <p class="mark-newsarrival">NEW</p> -->
                            </div>
                            <article class="news-item ir">
                                <div class="news-item-level1">
                                    <time>2024.03.08</time>
                                    <span class="news-category">IR</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">人事異動のお知らせ「海外拠点グループ会社の役員人事について決定いたしました」<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_library.png" alt="" class="news-cap">
                                <!-- <p class="mark-newsarrival">NEW</p> -->
                            </div>
                            <article class="news-item ir">
                                <div class="news-item-level1">
                                    <time>2024.01.01</time>
                                    <span class="news-category">IR</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">株主総会のお知らせ<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                            </article>
                        </div>

                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_ir_library.png" alt="" class="news-cap">
                                <!-- <p class="mark-newsarrival">NEW</p> -->
                            </div>
                            <article class="news-item ir">
                                <div class="news-item-level1">
                                    <time>2024.01.01</time>
                                    <span class="news-category">IR</span>
                                </div>
                                <a href="<?php echo esc_url(home_url()); ?>" class="news-item-txt">株主総会のお知らせ<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 製品分野 -->
    <section class="products-section">
        <div class="container" style="max-width:1000px!important;">
            <h2 class="text80">3つの事業分野</h2>
            <div class="product-categories text">
                <div href="/products/category-a/" class="category-card">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80" alt="検査装置" loading="lazy" style="height:auto;">
                    <div class="card-content">
                        <h3>検査装置・設備</h3>
                    </div>
                </div>
                <div href="/products/category-b/" class="category-card">
                    <img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&q=80" alt="製品分野B" loading="lazy" style="height:auto;">
                    <div class="card-content">
                        <h3>工具・周辺機器</h3>
                    </div>
                </div>
                <div href="/products/category-c/" class="category-card">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80" alt="製品分野C" loading="lazy" style="height:auto;">
                    <div class="card-content">
                        <h3>工業炉</h3>
                    </div>
                </div>
            </div>
            <p style="padding-right:5%; padding-left:5%; font-size:14px; padding-top:35px;" class="text">検査用装置や設備、工具や工具周辺機器、工業路など生産現場のあらゆる工程にわたる50以上の製品・技術を保有しています。
                高度な技術とエンジニアリングを活かしたソリューションを提供し、パートナーとともに世界の躍進のために貢献していきます。</p>
            <a href="<?php echo esc_url(home_url()); ?>/products/index.html" class="more-link animationbutton" style="color:#007bff; justify-content:center;">
                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="40px" height="40px" style="fill: #007bff;">
                製品情報をもっと見る
            </a>

        </div>
    </section>

    <!-- サステナビリティ -->
    <section class="sustainability-section">
        <div class="container">
            <h2 class=text80>サステナビリティ</h2>
            <div class="sus-grid">
                <div class="sustainability-content">
                    <h3>持続可能な社会の実現に向けて</h3>
                    <p style="font-size:14px; margin-top:0px;" class="text">ソリューションの提供だけでなく<br>当社の考え方や取り組みについて紹介しています。</p>
                    <a href="<?php echo esc_url(home_url()); ?>/sustainability/" class="more-link animationbutton" style="color:#007bff;/* justify-content:center; */">
                        <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="40px" height="40px" style="fill: #007bff;">
                        もっと見る
                    </a>
                </div>
                <div class="sustainability-image">
                    <img src="https://images.unsplash.com/photo-1451847251646-8a6c0dd1510c?auto=format&fit=crop&q=80" alt="サステナビリティ" loading="lazy" style="width:100%; border-radius: 8px;">
                </div>
            </div>
        </div>
    </section>
    <!-- お問い合わせ -->
    <?php get_template_part('component', 'formcontact'); ?>
</main>
<?php
get_footer(); // footer.php を読み込む
?>