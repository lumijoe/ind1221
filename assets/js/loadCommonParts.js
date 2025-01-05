document.addEventListener('DOMContentLoaded', function() {
    // ヘッダーを読み込む
    fetch('/assets/includes/header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('commonHeader').innerHTML = data;
        });

    // フッターを読み込む
    fetch('/assets/includes/footer.html') // footer.htmlのパスを指定
        .then(response => response.text())
        .then(data => {
            document.getElementById('commonFooter').innerHTML = data;
        });

    // フォームお問い合わせを読み込む
    const formContactElement = document.getElementById('commonFormContact');
    if (formContactElement) { // 要素が存在する場合のみ読み込み
        fetch('/assets/includes/formcontact.html') // footer.htmlのパスを指定
            .then(response => response.text())
            .then(data => {
                formContactElement.innerHTML = data;
            });
    }
});