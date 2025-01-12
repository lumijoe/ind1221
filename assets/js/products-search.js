document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.filter-checkbox'); // 検索バーの項目(例：電化)
    const productCards = document.querySelectorAll('.product-card_2test'); // 各製品カード
    const resultCount = document.getElementById('result-count'); // 結果数id

    const filterProducts = () => {
        const selectedTags = Array.from(checkboxes) // 検索項目全てから配列へ
            .filter(checkbox => checkbox.checked)   // input type の checkbox がチェック済を.filterする
            .map(checkbox => checkbox.value);       // input type の checkbox の値を.mapする

        let visibleCount = 0; // 0でvisibleCountを一旦設定

        productCards.forEach(card => {
            const tags = Array.from(card.querySelectorAll('.product-tag-product')); // このカードに紐づくタグを取得
            const tagTexts = tags.map(tag => tag.textContent.trim()); // タグテキストをトリムして配列化
            
            if (
                selectedTags.length === 0 || // チェックなしは全て表示
                selectedTags.some(tag => tagTexts.includes(tag)) // 選択されたタグに一致するものがあれば表示
            ) {
                card.classList.remove('uinone'); // 非表示を解除
                tags.forEach(tag => {
                    if (selectedTags.includes(tag.textContent.trim())) {
                        tag.classList.add('uiblue'); // 該当タグの背景色を変更
                    } else {
                        tag.classList.remove('uiblue'); // 該当しない場合は背景色を戻す
                    }
                });
                visibleCount++;
            } else {
                card.classList.add('uinone'); // 非表示に設定
                tags.forEach(tag => tag.classList.remove('uiblue')); // 全タグの背景色を解除
            }
        });

        resultCount.textContent = visibleCount; // 結果数を更新
    };

    // チェックボックスの変更イベントにフィルター処理を登録
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });

    filterProducts(); // 初期状態のフィルタリングを実行
});
