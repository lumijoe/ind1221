<!-- page-product.php -->
<?php

/**
 * Template Name: page-ir
 * Description: This is the template
 */

get_header('product');
?>
<main class="products-top">
    <div style="display: flex; flex-direction: row; align-items: flex-end; justify-content: space-between;" >
        <h1 style="font-size:60px; margin:0px;">PRODUCTS</h1>
    </div>
    <h2 style="margin:0px;" id="topics">TOPICS</h2>
    <!-- カルーセル -->
    <div class="wrapper">
        <div class="swiper-container">
            <ul class="swiper-wrapper news-line" style="transition-timing-function: unset !important;">
            <li class="swiper-slide bgnone"><img src="https://images.unsplash.com/photo-1669707041081-dd4d51943041?auto=format&fit=crop&q=80" alt="" ><article class="news-item">
                <time>2024.03.20</time>
                <span class="category">新製品</span>
                <a href="#" class="news-line-txt">検査装置1313を4月より受注開始</a>
            </article></li>
            <li class="swiper-slide bgnone"><img src="https://images.unsplash.com/photo-1655562693681-ee2a0a81db88?auto=format&fit=crop&q=80" alt="" ><article class="news-item">
                <time>2024.03.20</time>
                <span class="category">新製品</span>
                <a href="#" class="news-line-txt">テキストが入ります</a>
            </article></li>
            <li class="swiper-slide bgnone"><img src="https://images.unsplash.com/photo-1716191300020-b52dec5b70a8?auto=format&fit=crop&q=80" alt="" ><article class="news-item">
                <time>2024.03.20</time>
                <span class="category">新製品</span>
                <a href="#" class="news-line-txt">新製品Aシリーズを発売開始しました</a>
            </article></li>
            <li class="swiper-slide bgnone"><img src="https://images.unsplash.com/photo-1682562031269-58a59c81432c?auto=format&fit=crop&q=80" alt=""><article class="news-item">
                <time>2024.03.20</time>
                <span class="category">新製品</span>
                <a href="#" class="news-line-txt">新製品Aシリーズを発売開始しました</a>
            </article></li>
            </ul>
        </div>
    </div>

    <!-- 課題から探す -->
        <!-- <div id="issue"></div>
    <section class="search-by-issue" style="padding-top:20px;">
        <h2>課題タグから探す</h2>
        <div class="search-wrapper-tag-all">
            <ul>
                <div class="tags-all">
                    <button class="hashtag" data-tag="電化">#電化</button>
                    <button class="hashtag" data-tag="脱炭素化">#脱炭素化</button>
                    <button class="hashtag" data-tag="次世代バーナ">#次世代バーナ</button>
                    <button class="hashtag" data-tag="環境改善リサイクル">#環境改善リサイクル</button>
                    <button class="hashtag" data-tag="現場改善">#現場改善</button>
                    <button class="hashtag" data-tag="IOT/ICT">#IOT/ICT</button>
                    <button class="hashtag" data-tag="電化">#電化</button>
                    <button class="hashtag" data-tag="脱炭素化">#脱炭素化</button>
                    <button class="hashtag" data-tag="次世代バーナ">#次世代バーナ</button>
                    <button class="hashtag" data-tag="環境改善リサイクル">#環境改善リサイクル</button>
                    <button class="hashtag" data-tag="現場改善">#現場改善</button>
                    <button class="hashtag" data-tag="IOT/ICT">#IOT/ICT</button>
                </div>
                <p class="addcomment">現場課題や社会課題にコミット</p>
            </ul>
        </div>

        <div class="product-results"> -->
            <!-- 製品一覧（初期状態では非表示） -->
            <!-- <div class="product-grid"></div>
        </div>
    </section> -->

    <!-- 製品分野バナー -->
    <section class="category-banners" id="category">
        <h2>分野別から探す</h2>
        <div class="banner-grid">
            <a href="/products/category-a/" class="category-banner">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80" alt="製品分野A">
                <div class="banner-content">
                    <h3>検査装置・設備</h3>
                </div>
            </a>
            <a href="/products/category-b/" class="category-banner">
                <img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&q=80" alt="製品分野B">
                <div class="banner-content">
                    <h3>工具・周辺機器</h3>
                </div>
            </a>
            <a href="/products/category-c/" class="category-banner">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80" alt="製品分野C">
                <div class="banner-content">
                    <h3>工業炉</h3>
                </div>
            </a>
        </div>
    </section>
</main>

<?php
    get_footer(); 
?>