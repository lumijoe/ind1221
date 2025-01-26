<?php
//====================================================
//  Template Name: header-ir
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IR情報 | 会社名</title>
    <!-- Swiperのスタイルシートを追加 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css"> 
   
   <!-- JS  -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
   
</head>
<div>
    <!-- component-header.php -->
<?php get_template_part('component', 'header'); ?>

<div class="wrapper-pageherobread">
    <div class="main-visual-products2 mvp-ir">
        <h2>IR情報</h2>
    </div>
    <nav class="breadcrumb" aria-label="パンくずリスト">
        <ol class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
            <li class="breadcrumb-item current">IR情報</li>
        </ol>
    </nav>
</div>
<main>
