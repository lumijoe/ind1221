<?php
//====================================================
//  Template Name: Header
//====================================================
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会社名 | 工業製品メーカー</title>
    <!-- noindex, nofollowを追加 -->
    <meta name="robots" content="noindex, nofollow">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Swiperのスタイルシートを追加 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- 自サイトのスタイルシート -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/megamenu.css">
    <link rel="stylesheet" href="/assets/css/top.css">
    <link rel="stylesheet" href="/assets/css2/ir2.css">
    <link rel="stylesheet" href="/assets/css/footer.css">

    <!-- Bootstrap JS (必要に応じて) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- プリロード -->
    <link rel="preload" href="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80" as="image">
    <?php wp_head(); ?>
</head>

<body>
<header class="header">
    <div class="header-inner" id="header-inner">
        <div class="header-top">
            <a href="<?php echo esc_url(home_url()); ?>" class="logo">
                <img src="/assets/images/logo.png" alt="会社名">
            </a>
            <nav class="mega-menu">
                <ul class="menu-list header-levelOne">
                    <!-- お知らせ -->
                    <span class="navpanel-line"></span>
                    <li class="menu-item">
                        <a href="<?php echo esc_url(home_url('/news')); ?>" class="item-level0ne">お知らせ</a>
                    </li>
    
                    <!-- 企業案内 -->
                    <span class="navpanel-line"></span>
                    <li class="menu-item">
                        <a href="<?php echo esc_url(home_url('/company')); ?>" class="item-level0ne">企業情報</a>
                        <div class="mega-content-level1">
                            <div class="mega-inner">
                                <div class="mega-category">
                                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80" alt="企業案内" loading="lazy">
                                    <a href="<?php echo esc_url(home_url('/company')); ?>"><h3>企業情報トップ</h3></a>
                                    <ul>
                                        <li><a href="<?php echo esc_url(home_url('/company/#message')); ?>">メッセージ</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/company/#about')); ?>">会社概要</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/company/#history')); ?>">沿革</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
    
                    <!-- IR情報 -->
                    <span class="navpanel-line"></span>
                    <li class="menu-item">
                        <a href="<?php echo esc_url(home_url('/ir')); ?>" class="item-level0ne">IR情報</a>
                        <div class="mega-content-level1">
                            <div class="mega-inner">
                                <div class="mega-category">
                                    <img src="https://images.unsplash.com/photo-1531972111231-7482a960e109?auto=format&fit=crop&q=80" alt="IR情報" loading="lazy">
                                    <h3><a href="<?php echo esc_url(home_url('/ir')); ?>">IRトップ</a></h3>
                                    <ul>
                                        <li><a href="<?php echo esc_url(home_url('/ir/#irnews')); ?>">IRニュース</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/ir/#irlibrary')); ?>">IRライブラリー</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/ir/#irreport')); ?>">統合報告書</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/ir/#irfinancial')); ?>">財務情報</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/ir/#irstocks')); ?>">株式について</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
    
                    <!-- サステナビリティ -->
                    <span class="navpanel-line"></span>
                    <li class="menu-item">
                        <a href="<?php echo esc_url(home_url('/sustainability')); ?>" class="item-level0ne">サステナビリティ</a>
                        <div class="mega-content-level1">
                            <div class="mega-inner">
                                <div class="mega-category">
                                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&q=80" alt="サステナビリティ" loading="lazy">
                                    <h3><a href="<?php echo esc_url(home_url('/sustainability')); ?>">サステナビリティ</a></h3>
                                    <ul>
                                        <li><a href="<?php echo esc_url(home_url('/sustainability/#sustainabilitynews')); ?>">サステナニュース</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/sustainability/#initiatives')); ?>">取り組み</a></li>
                                    </ul>
                                </div>
                                <div class="mega-category">
                                    <img src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&fit=crop&q=80" alt="ESG" loading="lazy">
                                    <h3><a href="<?php echo esc_url(home_url('/sustainability/#esg')); ?>">ESG情報</a></h3>
                                    <ul>
                                        <li><a href="<?php echo esc_url(home_url('/sustainability/#environment')); ?>">E 環境</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/sustainability/#society')); ?>">S 社会</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/sustainability/#governance')); ?>">G ガバナンス</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- 採用情報 -->
                    <span class="navpanel-line"></span>
                    <li class="menu-item">
                        <a href="https://ikkosha.co.jp/staff/" target="_blank" rel="noopener noreferrer" class="item-level0ne">採用情報</a>
                    </li>

                    <!-- icon -->
                    <span class="navpanel-line"></span>
                    <li class="menu-item">
                        <a href="https://ikkosha-co-jp.translate.goog/?_x_tr_sl=ja&_x_tr_tl=en&_x_tr_hl=ja&_x_tr_pto=wapp" target="_blank" rel="noopener noreferrer" class="item-level0ne"><img src="../../assets/images/icon_language.svg" width="20" height="20"></a>
                    </li>
                    <!-- ボタン -->
                    <!-- <li class="menu-item menu-item-button">
                        <a href="#" class="button item-level0ne">カタログ一覧</a>
                    </li>
                    <li class="menu-item menu-item-button">
                        <a href="/contact/" class="button item-level0ne">お問い合わせ</a>
                    </li> -->            
                </ul>
            </nav>
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- メガメニューは前回のコードと同じ -->
        <nav class="mega-menu megamenu-change-footer-nav" id="megamenu-change-footer-nav">
            <ul class="menu-list">
                <!-- 検査装置・設備 -->
                <span class="navpanel-line"></span>
                <li class="menu-item">
                    <a href="<?php echo esc_url(home_url('/products/category-a/')); ?>" style="display: flex; align-items:center;"><img src="../../assets/images/icon_01.svg" alt="" style="margin-right:3px; background-color: #e6ebf0;">検査装置・設備</a>
                    <div class="mega-content">
                        <div class="mega-inner">
                            <!-- <div class="mega-category">
                                <img src="../../assets/images/img_product_top.png" alt="製品分野A" loading="lazy">
                                <h3><a href="/products/">製品情報トップ</a></h3>
                            </div> -->
                            <div class="mega-category">
                                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80" alt="製品分野A" loading="lazy">
                                <h3><a href="<?php echo esc_url(home_url('/products/category-a/')); ?>">検査装置・設備</a></h3>
                                <ul>
                                    <li><a href="<?php echo esc_url(home_url('/products/category-a/a1/')); ?>">A-1製品群</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/category-a/a2/')); ?>">A-2製品群</a></li>
                                    <li><a href="<?php echo esc_url(home_url('/products/category-a/a3/')); ?>">A-3製品群</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 工具・周辺機器 -->
                <span class="navpanel-line"></span>
                <li class="menu-item">
                    <a href="/products/category-b/" style="display: flex; align-items:center;"><img src="../../assets/images/icon_02.svg" alt="" style="margin-right:3px; background-color: #e6ebf0;">工具・周辺機器</a>
                    <div class="mega-content">
                        <div class="mega-inner">
                            <div class="mega-category">
                                <img src="https://images.unsplash.com/photo-1537462715879-360eeb61a0ad?auto=format&fit=crop&q=80" alt="製品分野B" loading="lazy">
                                <h3><a href="/products/category-b/">工具・周辺機器</a></h3>
                                <ul>
                                    <li><a href="/products/category-b/b1/">B-1製品群</a></li>
                                    <li><a href="/products/category-b/b2/">B-2製品群</a></li>
                                    <li><a href="/products/category-b/b3/">B-3製品群</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- 工業炉 -->
                <span class="navpanel-line"></span>
                <li class="menu-item">
                    <a href="/products/category-c/" style="display: flex; align-items:center;"><img src="../../assets/images/icon_031.svg" alt="" style="margin-right:3px; background-color: #e6ebf0;">工業炉</a>
                    <div class="mega-content">
                        <div class="mega-inner">
                            <div class="mega-category">
                                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&q=80" alt="製品分野C" loading="lazy">
                                <h3><a href="/products/category-c/">工業炉</a></h3>
                                <ul>
                                    <li><a href="/products/category-c/c1/">C-1製品群</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- ボタン -->
                <li class="menu-item menu-item-button">
                    <a href="#" class="button item-level0ne" style="color: #fff !important;"><img src="../../assets/images/icon_book_white.svg" alt="" width="30" height="30">カタログ一覧</a>
                </li>
                <li class="menu-item menu-item-button">
                    <a href="https://atrail.co.jp/contact" class="button item-level0ne" style="color: #fff !important;"><img src="../../assets/images/icon_mail_white.svg" alt="" width="30" height="30">お問い合わせ</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main>
