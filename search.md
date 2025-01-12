## and 検索

// and 検索
// function filterProducts() {
// チェックされた項目を取得
// const selectedValues = Array.from(document.querySelectorAll('input[type="checkbox"]:checked')).map(input => input.value);

    // フィルター対象の製品カードを取得
    // const productCards = document.querySelectorAll('.product-card_2test');

    // let visibleCount = 0;

    // productCards.forEach(card => {
        // 各カードに含まれるタグを取得
        // const productTags = Array.from(card.querySelectorAll('.product-tag-product')).map(tag => tag.textContent);

        // 全ての選択した条件を満たしているか確認
        // const matchesAll = selectedValues.every(value => productTags.includes(value));

    //     if (matchesAll) {
    //         card.style.display = 'block'; // すべての条件に合うものを表示
    //         visibleCount++;
    //     } else {
    //         card.style.display = 'none'; // 合わないものを非表示
    //     }
    // });

    // 件数を更新

// document.getElementById('result-count').textContent = visibleCount;
// }

// チェックボックスが変更されるたびにフィルター処理を実行
// document.querySelectorAll('.filter-checkbox').forEach(input => {
// input.addEventListener('change', filterProducts);
// });

// 初期表示
// filterProducts();

## or 検索

// or 検索
document.addEventListener('DOMContentLoaded', () => {
const checkboxes = document.querySelectorAll('.filter-checkbox');
const productCards = document.querySelectorAll('.product-card_2test');
const resultCount = document.getElementById('result-count');

    const filterProducts = () => {
        const selectedTags = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

        let visibleCount = 0;

        productCards.forEach(card => {
            const tags = Array.from(card.querySelectorAll('.product-tag-product'))
                .map(tag => tag.textContent.trim());
            if (
                selectedTags.length === 0 ||
                selectedTags.some(tag => tags.includes(tag))
            ) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        resultCount.textContent = visibleCount;
    };

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });

    filterProducts();

});

## hover したら表示されるも保持されない

// document.addEventListener('DOMContentLoaded', function() {
// const hashtags = document.querySelectorAll('.hashtag');
// const productGrid = document.querySelector('.product-grid');

// ここから非表示 ①
// 製品データ（実際は API や JSON ファイルから取得）
// const products = [
// {
// id: 1,
// name: "製品 A-1-1",
// category: "A-1",
// tags: ["電化", "脱炭素化"],
// image: "/assets/images/products/a-1-1.jpg"
// },
// 他の製品データ
// ];
// ここまで非表示 ②

// hashtags.forEach(tag => {
// tag.addEventListener('mouseover', () => {
// const selectedTag = tag.dataset.tag;

// // 選択されたタグに関連する製品をフィルタリング
// const filteredProducts = products.filter(product =>
// product.tags.includes(selectedTag)
// );

// // 製品一覧を表示
// displayProducts(filteredProducts);
// });
// });

// function displayProducts(products) {
// productGrid.innerHTML = products.map(product => `//             <div class="product-card">
//                 <img src="${product.image}" alt="${product.name}">
//                 <h3>${product.name}</h3>
//                 <p>カテゴリー: ${product.category}</p>
//                 <a href="/products/${product.category.toLowerCase()}/${product.id}/" class="btn">詳細を見る</a>
//             </div>
//        `).join('');
// }
// });
