<!-- news -->
<?php

/**
 * Template Name: archive-news
 * Description: This is the template
 */

get_header('news');
?>
<main>
    <!-- カテゴリタブ -->
    <div class="l-category-tab">
        <button class="is-current"><a href="<?php echo home_url(''); ?>">すべて</a></button>
        <button><a href="<?php echo home_url(''); ?>">製品情報</a></button>
        <button><a href="<?php echo home_url(''); ?>">IR</a></button>
        <button><a href="<?php echo home_url(''); ?>">サステナビリティ</a></button>
        <button><a href="<?php echo home_url(''); ?>">お知らせ</a></button>
    </div>

    <!-- サイドバー -->
    <div class="l-side-grid">
        <!-- 記事セクション -->
        <section class="l-article">
            <?php if (have_posts()) : ?>
                <ul>
                    <hr class="article-top-hr">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="sp-article-wrapper">
                            <div class="sp-article">
                                <!-- ACF投稿日時 -->
                                <date class="post-date"><?php echo get_the_date('Y.m.d'); ?></date>

                                <!-- カテゴリ表示 -->
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
                                        <span class="tag_new">NEW</span>
                                <?php
                                    endif;
                                }
                                ?>
                                <!-- カテゴリタグ -->
                                <p class="item-category"><?php echo esc_html($category_output); ?></p>
                            </div>

                            <!-- ACFタイトル -->
                            <?php if (get_field('post_title')) : ?>
                                <a href="<?php the_permalink(); ?>"><?php the_field('post_title'); ?></a>
                            <?php endif; ?>

                        </li>
                        <hr>
                    <?php endwhile; ?>

                </ul>

                <?php the_posts_pagination(); ?>

            <?php else : ?>
                <p>お知らせはありません。</p>
            <?php endif; ?>
        </section>

        <section class="news-archive-section">
            <div class="container">
                <div class="news-toppage-ttl">
                    <h2 style="width: 100%;">お知らせ一覧</h2>
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
                    <p>お知らせはまだありません。</p>
                <?php endif; ?>
            </div>
        </section>


        <!-- サステナビリティニュースセクション -->
        <section class="news-section" style="padding-top:40px;" id="sustainabilitynews">
            <div class="container news-container">
                <div class="news-grid">

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