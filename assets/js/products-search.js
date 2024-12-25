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