<?php
//====================================================
//  Template Name: header-newssingle
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ニュースリリース | 会社名</title>

    <!-- Swiperのスタイルシートを追加 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- 自サイトのスタイルシート -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/megamenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/breadcrumb.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css2/sustainability.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/products.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css2/ir2.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">

    <!-- JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</head>
<div>
    <!-- component-header.php -->
    <?php get_template_part('component', 'header'); ?>

    <div class="wrapper-pageherobread">
        <div class="main-visual-products mvp-news">
            <h2><?php
                $title = get_field('post_title');
                echo mb_strimwidth($title, 0, 50, '…', 'UTF-8');
                ?></h2>
        </div>

        <nav class="breadcrumb" aria-label="パンくずリスト">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>/archives/news/">ニュースリリース</a></li>
                <li class="breadcrumb-item current" style="overflow: hidden; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1;">
                    <?php
                    $title = get_field('post_title');
                    echo mb_strimwidth($title, 0, 50, '…', 'UTF-8');
                    ?>
                </li>
            </ol>
        </nav>
    </div>

    <main>
