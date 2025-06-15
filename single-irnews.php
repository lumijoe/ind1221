<!-- single-irnews -->
<?php

/**
 * Template Name: single-irnews
 * Description: This is the template
 */

get_header('irnewssingle');
?>

<style>
    .news-list-wrapper img.news-cap-wide {
        width: 100%;
        height: auto;
        border-radius: 4px;
        object-fit: cover;
        margin-right: 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<!-- test2 -->
<section class="news-archive-section" style="width: 100%; display: flex; justify-content: center;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 2rem; display: flex; flex-direction: column; justify-content: center; width: 90%;">
        <div class="news-toppage-ttl">
            <h2 style="width: 100%;">ニュースリリース</h2>
        </div>
        <p class="news-toppage-ttl-en">NEWS</p>

        <div class="news-list">
            <div class="news-list-wrapper">
                <div>
                    <?php
                    $post_type = get_post_type(); // 投稿タイプ判定
                    $image = ($post_type === 'irnews') ? get_field('irpost_imageurl') : get_field('post_imageurl');
                    $title = ($post_type === 'irnews') ? get_field('irpost_title') : get_field('post_title');
                    $text = ($post_type === 'irnews') ? get_field('irpost_text') : get_field('post_text');
                    $terms = get_the_terms(get_the_ID(), ($post_type === 'irnews') ? 'irnewscategory' : 'newscategory');
                    $category = ($terms && !is_wp_error($terms)) ? $terms[0]->name : 'カテゴリなし';
                    ?>


                    <article class="news-item" style="border-bottom:none!important; align-items:flex-start;">
                        <div class="news-item-level1">
                            <time><?php echo get_the_date('Y.m.d'); ?></time>
                            <span class="news-category"><?php echo esc_html($category); ?></span>
                        </div>

                        <div class="news-item-txt">
                            <!-- <div class="news-item-txt" style="overflow:hidden; display:-webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;"> -->
                            <?php echo esc_html($title); ?>
                            <?php if ($post_type === 'irnews') : ?>
                                <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px">
                            <?php endif; ?>
                        </div>
                    </article>
                    <div class="news-img-area">


                        <?php if ($image) : ?>
                            <img src="<?php echo esc_url($image); ?>" class="news-cap-wide" alt="">
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
                </div>

            </div>
            <div>
                <!-- ACF本文 -->
                <p><?php echo esc_html($text); ?></p>
                <!-- PDF -->
                <?php if (get_field('irpost_pdf') && get_field('irpost_pdf_title')) : ?>
                    <p class="pdf-title">
                        <a href="<?php the_field('ripost_pdf'); ?>" target="_blank" rel="noopener noreferrer">
                            <?php the_field('irpost_pdf_title'); ?><img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px">
                        </a>
                    </p>
                <?php endif; ?>
                <!-- 外部リンク -->
                <?php if (get_field('irpost_url')) : ?>
                    <p class="post-url">
                        <a href="<?php the_field('irpost_url'); ?>" target="_blank" rel="noopener noreferrer">
                            <?php the_field('irpost_url'); ?>
                        </a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<!-- ページナビ -->
<div class="l-side-grid single-wrapper">
    <section class="l-article article-single-wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


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
</div>


<nav class="post-nav">
    <div class="post-nav-prev">
        <?php
        $prev_post = get_previous_post();
        if (!empty($prev_post)) :
            $prev_title = get_field('irpost_title', $prev_post->ID);
            $prev_img = get_field('irpost_imageurl', $prev_post->ID);
        ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>">
                <?php if ($prev_img): ?>
                    <img src="<?php echo esc_url($prev_img); ?>" alt="<?php echo esc_attr($prev_title); ?>" style="width:100px;height:auto;">
                <?php endif; ?>
                <span><?php echo esc_html($prev_title); ?></span>
            </a>
        <?php endif; ?>
    </div>

    <div class="post-nav-archive">
        <a href="<?php echo esc_url(get_post_type_archive_link('news')); ?>">一覧へ戻る</a>
    </div>

    <div class="post-nav-next">
        <?php
        $next_post = get_next_post();
        if (!empty($next_post)) :
            $next_title = get_field('irpost_title', $next_post->ID);
            $next_img = get_field('irpost_imageurl', $next_post->ID);
        ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>">
                <?php if ($next_img): ?>
                    <img src="<?php echo esc_url($next_img); ?>" alt="<?php echo esc_attr($next_title); ?>" style="width:100px;height:auto;">
                <?php endif; ?>
                <span><?php echo esc_html($next_title); ?></span>
            </a>
        <?php endif; ?>
    </div>
</nav>



<!-- nav -->
<section class="news-archive-section">
    <div class="container">
        <div class="news-toppage-ttl">
            <h2 style="width: 100%;">ニュースリリース</h2>
        </div>
        <p class="news-toppage-ttl-en">NEWS</p>

        <div class="news-list">
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
                        <span class="news-category"><?php echo esc_html($category); ?></span>
                    </div>

                    <div class="news-item-txt" style="overflow:hidden; display:-webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                        <?php echo esc_html($title); ?>
                        <?php if ($post_type === 'irnews') : ?>
                            <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px">
                        <?php endif; ?>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
