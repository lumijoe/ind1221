document.addEventListener('DOMContentLoaded', () => {
    // URLにハッシュが含まれている場合の処理
    if (window.location.hash) {
        const hash = window.location.hash;
        // 少し遅延させてスクロール
        setTimeout(() => {
            const target = document.querySelector(hash);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }, 100);
    }

    // 通常のアンカーリンクのクリック処理
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const hash = this.getAttribute('href').split('#')[1];
            const target = document.getElementById(hash);
            
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
                // URLを更新
                window.history.pushState(null, '', `#${hash}`);
            }
        });
    });
});