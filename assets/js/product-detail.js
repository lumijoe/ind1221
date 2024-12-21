document.addEventListener('DOMContentLoaded', function() {
    // サムネイル画像クリック時のメイン画像切り替え
    const mainImage = document.querySelector('.main-image');
    const thumbnails = document.querySelectorAll('.thumbnail');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            mainImage.src = thumb.src.replace('thumb', 'main');
            
            // アクティブなサムネイルのスタイリング
            thumbnails.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
        });
    });

    // 問い合わせボタンのイベント処理
    const inquiryButton = document.querySelector('.inquiry-button');
    if (inquiryButton) {
        inquiryButton.addEventListener('click', (e) => {
            // 製品情報を問い合わせフォームに引き継ぐ
            const productName = document.querySelector('h1').textContent;
            const productCode = document.querySelector('.spec-table td').textContent;
            
            // URLパラメータとして製品情報を付加
            e.preventDefault();
            const url = new URL(e.target.href);
            url.searchParams.append('product', productName);
            url.searchParams.append('code', productCode);
            window.location.href = url.toString();
        });
    }
}); 