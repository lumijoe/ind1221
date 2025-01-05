document.addEventListener('DOMContentLoaded', function() {
    // ハインビジュアルスライダー
    new Swiper('.swiper', {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        }
    });

    // ニュースタブの処理
    const newsTabs = document.querySelectorAll('.news-tab');
    const newsItems = document.querySelectorAll('.news-item');

    newsTabs.forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            
            // アクティブクラスの切り替え
            newsTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            // ニュース項目の表示/非表示
            const category = this.getAttribute('data-tab');
            newsItems.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // ホバー時の処理を追加
        tab.addEventListener('mouseenter', function() {
            newsTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const category = this.getAttribute('data-tab');
            newsItems.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // 初期表示時に「すべて」タブをアクティブに
    document.querySelector('.news-tab[data-tab="all"]').classList.add('active');

    // フッターのアニメーションを適用
    const footer = document.querySelector('.footer-inner'); // フッターの要素を選択
    function animateFooter() {
        footer.classList.remove('animate'); // アニメーションクラスを一旦削除
        void footer.offsetWidth; // 再フローを強制してアニメーションをリセット
        footer.classList.add('animate'); // アニメーションクラスを再追加
    }
    animateFooter();

}); 

$(function() {
    // アラートを利用するとjsが反映されているかがすぐわかる
    // alert();
    // スクロールしたとき
    $(window).scroll(function() {
        // スクロール量を取得
        const scroll = $(window).scrollTop();
        // 画面の高さを取得
        const windowHeight = $(window).height();
        // 各.boxに対して処理を行う
        $(".box, .text, .text80").each(function() {
            // それぞれの.boxの上端の座標を取得
            const boxTop = $(this).offset().top;
            // 条件を満たす場合はis-activeクラスを付与し、そうでない場合は削除する
            if (scroll + windowHeight > boxTop + 300) {
                $(this).addClass("is-active");
            } else {
                $(this).removeClass("is-active");
            }
        });
    });
});
