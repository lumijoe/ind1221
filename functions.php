<!-- functions.php -->
<?php
function enqueue_custom_scripts() {
    $uri = get_template_directory_uri(); // $uriを定義

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