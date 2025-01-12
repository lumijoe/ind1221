// or検索　どれか当てはまれば表示される
document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.filter-checkbox'); //検索バーの項目(例：電化)
    const productCards = document.querySelectorAll('.product-card_2test'); //各製品カード
    const resultCount = document.getElementById('result-count'); //結果数id

    const filterProducts = () => { //以下をfilterProductsとする
        const selectedTags = Array.from(checkboxes) //検索項目全てから配列へ
            .filter(checkbox => checkbox.checked)   //inputtypeのcheckboxがチェック済を.filterする
            .map(checkbox => checkbox.value);       //inputtypeのcheckboxの値を.mapする
            

        let visibleCount = 0; //0でvisibleCountを一旦設定

        productCards.forEach(card => {
            const tags = Array.from(card.querySelectorAll('.product-tag-product'))
                .map(tag => tag.textContent.trim());
            if (
                selectedTags.length === 0 ||
                selectedTags.some(tag => tags.includes(tag))
            ) {
                card.classList.remove('uinone');
                visibleCount++;
            } else {
                card.classList.add('uinone');
            }
        });

        resultCount.textContent = visibleCount;
    };

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });

    filterProducts();
});


