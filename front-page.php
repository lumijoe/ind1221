<?php

/**
 * Template Name: Front Page
 * Description: This is the template for the front page.
 */

get_header();
?>
<style>
    .bg-slide1 {
        background-image: url(https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/2025/06/1.jpeg);
        background-size: cover;
        background-position: center;
    }

    .bg-slide2 {
        background-image: url(https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&q=80);
        background-size: cover;
        background-position: center;
    }
</style>
<main>

    <!-- メインビジュアル -->
    <div class="main-visual">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-slide1">
                    <!-- <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80" alt="工場設備"> -->
                    <div class="slide-content">
                        <h2>未来を創る技術</h2>
                        <p>最先端の工業製品で社会に貢献</p>
                    </div>
                </div>
                <div class="swiper-slide bg-slide2">
                    <!-- <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/2025/06/1.jpeg" alt="自動化設備" loading="lazy"> -->
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
                            <a href="<?php echo get_post_type_archive_link('news'); ?>" class="more-link animationbutton">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px">
                                一覧を見る
                            </a>
                        </span>
                    </div>
                    <p class="news-toppage-ttl-en">NEWS</p>
                    <?php
                    $args = array(
                        'post_type'      => 'news',
                        'posts_per_page' => 4,
                        'post_status'    => 'publish',
                    );

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) : ?>
                        <div class="news-list">
                            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                                <!-- ニュース -->
                                <div class="news-list-wrapper">
                                    <div class="news-img-area">
                                        <img src="<?php the_field('post_imageurl'); ?>" alt="" class="news-cap">
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
                                    </div>
                                    <article class="news-item" style="border-bottom:none!important;">
                                        <div class="news-item-level1">
                                            <!-- 日付 -->
                                            <time><?php echo get_the_date('Y.m.d'); ?></time>
                                            <!-- カテゴリ -->
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'newscategory');
                                            if ($terms && !is_wp_error($terms)) :
                                                $first_term = $terms[0];
                                                $category_output = $first_term->name;
                                            else :
                                                $category_output = 'カテゴリなし';
                                            endif;
                                            ?>

                                            <span class="news-category"><?php echo esc_html($category_output); ?></span>
                                        </div>
                                        <!-- タイトル -->
                                        <a href="<?php the_permalink(); ?>" class="news-item-txt" style="overflow:hidden; display:-webkit-box; -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;"><?php the_field('post_title'); ?></a>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>お知らせはまだありません。</p>
                        <?php endif; ?>
                        </div>
                </div>

                <!-- 右側: IR情報 -->
                <div class="news-ir">
                    <div class="news-toppage-ttl">
                        <h2>IRニュース</h2>
                        <span>
                            <a href="<?php echo esc_url(home_url()); ?>/archives/news#newsNavtag-ir" class="more-link animationbutton">
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_right_blue.svg" alt="" width="20px" height="20px" style="fill: #007bff;">
                                一覧を見る
                            </a>
                        </span>
                    </div>
                    <p class="news-toppage-ttl-en">IR NEWS</p>
                    <?php
                    $args = array(
                        'post_type'      => 'irnews',
                        'posts_per_page' => 4,
                        'post_status'    => 'publish',
                    );

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) : ?>
                        <div class="news-list">
                            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                                <!-- ニュース -->
                                <div class="news-list-wrapper">
                                    <div class="news-img-area">
                                        <img src="<?php the_field('irpost_imageurl'); ?>" alt="" class="news-cap">
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
                                                <p class="mark-newsarrival text80">NEW</p>
                                        <?php
                                            endif;
                                        }
                                        ?>
                                    </div>
                                    <article class="news-item ir" style="border-bottom:none!important;">
                                        <div class="news-item-level1">
                                            <!-- 日付 -->
                                            <time><?php echo get_the_date('Y.m.d'); ?></time>
                                            <!-- カテゴリ -->
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'irnewscategory');
                                            if ($terms && !is_wp_error($terms)) :
                                                $first_term = $terms[0];
                                                $category_output = $first_term->name;
                                            else :
                                                $category_output = 'カテゴリなし';
                                            endif;
                                            ?>
                                            <span class="news-category"><?php echo esc_html($category_output); ?></span>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="news-item-txt" style="overflow:hidden; display:-webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;"><?php the_field('irpost_title'); ?><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px"></a>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>お知らせはまだありません。</p>
                        <?php endif; ?>
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