<?php
//====================================================
//  Template Name: header-product-cat-a
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検査装置 | 会社名</title>
    <!-- noindex, nofollowを追加 -->
    <meta name="robots" content="noindex, nofollow">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->

    <!-- Swiperのスタイルシートを追加 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- 自サイトのスタイルシート -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/megamenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/breadcrumb.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/products.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/category.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">

    <!-- Bootstrap JS (必要に応じて) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

</head>
<div>
    <!-- component-header.php -->
    <?php get_template_part('component', 'header'); ?>

    <div class="wrapper-pageherobread">
        <div class="main-visual-products mvp-a">
            <h2>検査装置・設備</h2>
        </div>
        <nav class="breadcrumb" aria-label="パンくずリスト">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>/products/category-b/">製品情報</a></li>
                <li class="breadcrumb-item current">検査装置・設備</li>
            </ol>
        </nav>
    </div>
    <main>