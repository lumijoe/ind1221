document.addEventListener('DOMContentLoaded', function() {
    // ハインビジュアルスライダー
    new Swiper('.swiper', {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 5000,
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
}); 