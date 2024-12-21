// ヘッダーの読み込み完了を待ってから実行
document.addEventListener('DOMContentLoaded', function() {
    // header.htmlの読み込み完了を待つ
    const initMegaMenu = setInterval(function() {
        const hamburger = document.querySelector('.hamburger');
        const header = document.querySelector('.header');
        
        if (hamburger && header) {
            clearInterval(initMegaMenu);
            
            // ハンバーガーメニューの処理
            hamburger.addEventListener('click', function() {
                header.classList.toggle('menu-open');
                this.classList.toggle('active');
            });

            // メガメニューの処理
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.classList.add('active');
                });
                
                item.addEventListener('mouseleave', function() {
                    this.classList.remove('active');
                });
            });
        }
    }, 100); // 100ミリ秒ごとにチェック
}); 