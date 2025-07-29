<div class="border border-border rounded-lg bg-background p-6 shadow-sm"><div class="prose prose-sm md:prose-base lg:prose-lg max-w-none prose-headings:font-bold prose-a:text-blue-600" style="user-select: none;"><div id="top" class="">

<div align="center" class="text-center">
<h1>IND1221</h1>
<p><em>Transforming Ideas Into Limitless Innovation</em></p>

<img alt="last-commit" src="https://img.shields.io/github/last-commit/lumijoe/ind1221?style=flat&amp;logo=git&amp;logoColor=white&amp;color=0080ff" class="inline-block mx-1" style="margin: 0px 2px;">
<img alt="repo-top-language" src="https://img.shields.io/github/languages/top/lumijoe/ind1221?style=flat&amp;color=0080ff" class="inline-block mx-1" style="margin: 0px 2px;">
<img alt="repo-language-count" src="https://img.shields.io/github/languages/count/lumijoe/ind1221?style=flat&amp;color=0080ff" class="inline-block mx-1" style="margin: 0px 2px;">
<p><em>Built with the tools and technologies:</em></p>
<img alt="Markdown" src="https://img.shields.io/badge/Markdown-000000.svg?style=flat&amp;logo=Markdown&amp;logoColor=white" class="inline-block mx-1" style="margin: 0px 2px;">
<img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&amp;logo=PHP&amp;logoColor=white" class="inline-block mx-1" style="margin: 0px 2px;">
</div>
<br>
<hr>
<h2>Table of Contents</h2>
<ul class="list-disc pl-4 my-0">
<li class="my-0"><a href="#overview">Overview</a></li>
<li class="my-0"><a href="#getting-started">Getting Started</a>
<ul class="list-disc pl-4 my-0">
<li class="my-0"><a href="#prerequisites">Prerequisites</a></li>
<li class="my-0"><a href="#installation">Installation</a></li>
<li class="my-0"><a href="#usage">Usage</a></li>
<li class="my-0"><a href="#testing">Testing</a></li>
</ul>
</li>
</ul>
<hr>
<h2>Overview</h2>
<p>ind1221 is a versatile developer toolset crafted to streamline the development of structured, content-rich websites. It offers a collection of reusable templates, dynamic components, and content organization features that ensure consistency and scalability across large sites.</p>
<p><strong>Why ind1221?</strong></p>
<p>This project simplifies maintaining a cohesive user experience and efficient content management. The core features include:</p>
<ul class="list-disc pl-4 my-0">
<li class="my-0">🧩 <strong>Modular Components:</strong> Reusable headers, footers, and navigation elements for consistent branding.</li>
<li class="my-0">📊 <strong>Dynamic Content:</strong> News, IR updates, and press releases with real-time querying and pagination.</li>
<li class="my-0">🛠️ <strong>Custom Templates:</strong> Category-specific pages with filtering, breadcrumbs, and tailored layouts.</li>
<li class="my-0">🌐 <strong>Responsive Design:</strong> Bootstrap integration ensures mobile-friendly, adaptable interfaces.</li>
<li class="my-0">🔧 <strong>Content Management Support:</strong> Custom post types and structured content organization.</li>
<li class="my-0">🚀 <strong>Scalable Architecture:</strong> Supports site expansion with flexible, maintainable templates.</li>
</ul>
<hr>
<h2>Getting Started</h2>
<h3>Prerequisites</h3>
<p>This project requires the following dependencies:</p>
<ul class="list-disc pl-4 my-0">
<li class="my-0"><strong>Programming Language:</strong> PHP</li>
<li class="my-0"><strong>Package Manager:</strong> Composer</li>
</ul>
<h3>Installation</h3>
<p>Build ind1221 from the source and install dependencies:</p>
<ol>
<li class="my-0">
<p><strong>Clone the repository:</strong></p>
<pre><code class="language-sh">❯ git clone https://github.com/lumijoe/ind1221
</code></pre>
</li>
<li class="my-0">
<p><strong>Navigate to the project directory:</strong></p>
<pre><code class="language-sh">❯ cd ind1221
</code></pre>
</li>
<li class="my-0">
<p><strong>Install the dependencies:</strong></p>
</li>
</ol>
<p><strong>Using <a href="https://www.php.net/">composer</a>:</strong></p>
<pre><code class="language-sh">❯ composer install
</code></pre>
<h3>Usage</h3>
<p>Run the project with:</p>
<p><strong>Using <a href="https://www.php.net/">composer</a>:</strong></p>
<pre><code class="language-sh">php {entrypoint}
</code></pre>
<h3>Testing</h3>
<p>Ind1221 uses the {<strong>test_framework</strong>} test framework. Run the test suite with:</p>
<p><strong>Using <a href="https://www.php.net/">composer</a>:</strong></p>
<pre><code class="language-sh">vendor/bin/phpunit
</code></pre>
<hr>
<div align="left" class=""><a href="#top">⬆ Return</a></div>
<hr></div></div></div>









## ind1221

https://lkcodetest.sakura.ne.jp/ind1221/
root:~themes/ind1221
Github:ind1221
最新 meld チェック 0607
メンテ：issue①〜⑦

## 0607 code

<!-- functions.php -->

function enqueue_custom_scripts()
{
$uri = get_template_directory_uri(); // $uri を定義

    // jQueryを読み込み
    wp_enqueue_script('jquery');

    // Bootstrap JSの読み込み
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // CSS（home.css）を読み込み
    wp_enqueue_style(
        'home-style',
        $uri . '/assets/css/top.css',
        array(), // 依存関係なし
        filemtime(get_template_directory() . '/assets/css/top.css') // キャッシュバスターを追加
    );

    // page-products01.php ページの場合に products.css を読み込む
    // if (is_page_template('page-products01.php')) {
    //     wp_enqueue_style(
    //         'products-style',
    //         $uri . '/assets/scss/products.css',
    //         array(),
    //         filemtime(get_template_directory() . '/assets/scss/products.css')
    //     );
    // }

}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
?>

<!-- front-page.php -->
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

## pdf-icon

<img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px">
⭕️記事のロゴ画像
    https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/2025/06/logo_news.png
⭕️pdf画像
    https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/2025/06/pdf_1.pdf
    https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/2025/06/pdf_4.pdf
⭕️海の活動
    https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/img_news_sus_01.png
⭕️環境風車
https://images.unsplash.com/photo-1451847251646-8a6c0dd1510c?auto=format&fit=crop&q=80

## issue

slider の挙動、デバイス width 変動時の挙動デバッグ

## products.css
レスポンシブヘッドライン画像位置制御
.mvp-p {
  background-image: url("https://images.unsplash.com/photo-1716194583732-0b9874234218?auto=format&amp;fit=crop&amp;q=80");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center top -280px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
バックグラウンド画像をcenter centerへ


## archive-news.php コンポーネント前
<!-- news -->
<?php

/**
 * Template Name: archive-news
 * Description: This is the template
 */

get_header('news');
?>
<style>
    .tab-pane {
        display: none;
    }

    .tab-pane.active.show {
        display: block;
    }

    .nav-link.active {
        font-weight: bold;
        border-bottom: 2px solid black;
    }
</style>
<main>
    <!-- カテゴリタブ component-tagnavnews.php -->
    <?php get_template_part('component', 'tagnavnews'); ?>
    
    <?php get_template_part('component', 'tagnavnews'); ?>

    <!-- お知らせ一覧 -->
    <section class="news-archive-section">
        <div class="container">
            <div class="news-toppage-ttl">
                <h2 style="width: 100%;">ニュースリリース</h2>
            </div>
            <p class="news-toppage-ttl-en">NEWS</p>
            <?php
            $args = array(
                'post_type'      => array('news', 'irnews'), // 両方を指定
                'posts_per_page' => 10,
                'post_status'    => 'publish',
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
            );

            $mixed_query = new WP_Query($args);
            ?>

            <?php if ($mixed_query->have_posts()) : ?>
                <div class="news-list">
                    <?php while ($mixed_query->have_posts()) : $mixed_query->the_post(); ?>
                        <div class="news-list-wrapper">
                            <div class="news-img-area">
                                <?php
                                $post_type = get_post_type(); // 投稿タイプ判定
                                $image = ($post_type === 'irnews') ? get_field('irpost_imageurl') : get_field('post_imageurl');
                                $title = ($post_type === 'irnews') ? get_field('irpost_title') : get_field('post_title');
                                $terms = get_the_terms(get_the_ID(), ($post_type === 'irnews') ? 'irnewscategory' : 'newscategory');
                                $category = ($terms && !is_wp_error($terms)) ? $terms[0]->name : 'カテゴリなし';
                                ?>

                                <?php if ($image) : ?>
                                    <img src="<?php echo esc_url($image); ?>" class="news-cap" alt="">
                                <?php endif; ?>

                                <?php
                                $post_date = get_the_date('Y-m-d');
                                $post_datetime = new DateTime($post_date);
                                $now = new DateTime();
                                $interval = $now->diff($post_datetime)->days;
                                if ($interval < 7) :
                                ?>
                                    <span class="mark-newsarrival text80">NEW</span>
                                <?php endif; ?>
                            </div>

                            <article class="news-item" style="border-bottom:none!important; align-items:flex-start;">
                                <div class="news-item-level1">
                                    <time><?php echo get_the_date('Y.m.d'); ?></time>
                                    <?php
                                    if ($terms && !is_wp_error($terms)) :
                                        $first_term = $terms[0];
                                        $category_output = $first_term->name;
                                    else :
                                        $category_output = 'カテゴリなし';
                                    endif;
                                    ?>
                                    <span class="news-category"><?php echo esc_html($category_output); ?></span>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="news-item-txt" style="overflow:hidden; display:-webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                                    <?php echo esc_html($title); ?>
                                    <?php if ($post_type === 'irnews') : ?>
                                        <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px">
                                    <?php endif; ?>
                                </a>
                            </article>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- ページネーション -->
                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'total' => $mixed_query->max_num_pages,
                    ));
                    ?>
                </div>

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p>ニュースはまだありません。</p>
            <?php endif; ?>
        </div>
    </section>


## page-sustainability.php
 <!-- サステナビリティニュースセクション -->
    <section class="news-section" style="padding-top:40px;" id="sustainabilitynews">
        <div class="container news-container">
            <div class="news-grid">
                <!-- 左側: 全て/製品/サステナビリティ -->
                <div class="news-main" style="width:70%!important; padding-left:0px; padding-right:0px;">
                    <div class="news-toppage-ttl">
                        <h2 style="width:auto">サステナビリティニュース</h2>
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


## single-news.php 別案
<!-- titleview -->
<section class="l-titleview">
    <!-- タイトル -->
    <div class="l-titleview-ttl">
        <p class="l-page-caption">
            <?php the_field('post_title'); ?>
        </p>
    </div>
    <!-- 画像 -->
    <?php if (get_field('post_image')) : ?>
        <img src="<?php the_field('post_image'); ?>"
            alt="ニュース画像"
            width="300"
            data-src="<?php the_field('post_image'); ?>"
            decoding="async"
            class="lazyloaded"
            style="width:100%;">
    <?php endif; ?>
    <?php if (get_field('post_imageurl')) : ?>
        <img src="<?php the_field('post_imageurl'); ?>"
            alt="ニュース画像"
            width="300"
            data-src="<?php the_field('post_imageurl'); ?>"
            decoding="async"
            class="lazyloaded"
            style="width:100%;">
    <?php endif; ?>
</section>

<!-- 記事セクション2 -->
<div class="l-side-grid single-wrapper">
    <section class="l-article article-single-wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <div class="date-category-wrapper">
                        <!-- ACF投稿日時 -->
                        <time><?php echo get_the_date('Y.m.d'); ?></time>
                        <!-- ACFカテゴリ -->
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'newscategory');
                        if ($terms && !is_wp_error($terms)) :
                            $first_term = $terms[0];
                            $category_output = $first_term->name;
                        else :
                            $category_output = 'カテゴリなし';
                        endif;
                        ?>
                        <!-- span新着タグ -->
                        <?php
                        // 投稿日と現在の日付を取得
                        $post_date = get_the_date('Y-m-d');
                        $post_datetime = new DateTime($post_date);
                        $now = new DateTime();

                        // 投稿が過去の日付かチェック（未来記事を除外）
                        if ($post_datetime <= $now) {
                            $interval = $now->diff($post_datetime)->days;

                            // 7日以内ならNEWを表示
                            if ($interval < 7) :
                        ?>
                                <span class="mark-newsarrival text80">NEW</span>
                        <?php
                            endif;
                        }
                        ?>
                        <p class="item-category"><?php echo esc_html($category_output); ?></p>
                    </div>
                    <!-- ACFタイトル -->
                    <h2><?php the_field('post_title, irpost_title'); ?></h2>

                    <hr>
                    <!-- ACF本文 -->
                    <p><?php the_field('post_text, irpost_text'); ?></p>

                    <!-- 画像 -->
                    <?php if (get_field('post_image')) : ?>
                        <img src="<?php the_field('post_image'); ?>"
                            alt="ニュース画像"
                            width="300"
                            data-src="<?php the_field('post_image'); ?>"
                            decoding="async"
                            class="lazyloaded">
                    <?php endif; ?>
                    <?php if (get_field('post_imageurl')) : ?>
                        <img src="<?php the_field('post_imageurl'); ?>"
                            alt="ニュース画像"
                            width="300"
                            data-src="<?php the_field('post_imageurl'); ?>"
                            decoding="async"
                            class="lazyloaded">
                    <?php endif; ?>
                    <!-- PDF -->
                    <?php if (get_field('post_pdf') && get_field('post_pdf_title')) : ?>
                        <p class="pdf-title">
                            <a href="<?php the_field('post_pdf'); ?>" target="_blank" rel="noopener noreferrer">
                                <?php the_field('post_pdf_title'); ?>
                            </a>
                        </p>
                    <?php endif; ?>
                    <!-- 外部リンク -->
                    <?php if (get_field('post_url')) : ?>
                        <p class="post-url">
                            <a href="<?php the_field('post_url'); ?>" target="_blank" rel="noopener noreferrer">
                                <?php the_field('post_url'); ?>
                            </a>
                        </p>
                    <?php endif; ?>
                    <hr>
                </article>

                <!-- 前後の記事ナビゲーション -->
                <nav>
                    <p><?php previous_post_link('« %link'); ?></p>
                    <p><a href="<?php echo get_post_type_archive_link('news'); ?>">一覧へ戻る</a></p>
                    <p><?php next_post_link('%link »'); ?></p>
                </nav>

            <?php endwhile;
        else : ?>
            <p>お知らせはありません</p>
        <?php endif; ?>
    </section>
