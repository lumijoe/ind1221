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
});