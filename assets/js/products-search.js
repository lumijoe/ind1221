document.addEventListener('DOMContentLoaded', function() {
    const hashtags = document.querySelectorAll('.hashtag');
    const productGrid = document.querySelector('.product-grid');

    // 製品データ（実際はAPIやJSONファイルから取得）
    // const products = [
    //     {
    //         id: 1,
    //         name: "製品A-1-1",
    //         category: "A-1",
    //         tags: ["電化", "脱炭素化"],
    //         image: "/assets/images/products/a-1-1.jpg"
    //     },
        // 他の製品データ
    // ];

    hashtags.forEach(tag => {
        tag.addEventListener('mouseover', () => {
            const selectedTag = tag.dataset.tag;
            
            // 選択されたタグに関連する製品をフィルタリング
            const filteredProducts = products.filter(product => 
                product.tags.includes(selectedTag)
            );

            // 製品一覧を表示
            displayProducts(filteredProducts);
        });
    });

    function displayProducts(products) {
        productGrid.innerHTML = products.map(product => `
            <div class="product-card">
                <img src="${product.image}" alt="${product.name}">
                <h3>${product.name}</h3>
                <p>カテゴリー: ${product.category}</p>
                <a href="/products/${product.category.toLowerCase()}/${product.id}/" class="btn">詳細を見る</a>
            </div>
        `).join('');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const checkboxes = document.querySelectorAll('.filter-checkbox');
    const productCards = document.querySelectorAll('.product-card_2test');
    const resultCount = document.getElementById('result-count');

    const filterProducts = () => {
        // チェックされている値を配列で取得
        const selectedTags = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

        let visibleCount = 0;

        productCards.forEach(card => {
            const tags = Array.from(card.querySelectorAll('.product-tag-product'))
                .map(tag => tag.textContent.trim());

            // 選択されたタグに一致するものが1つでもあれば表示
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

    // 初期状態のフィルタリング
    filterProducts();
});



