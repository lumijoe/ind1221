// document.addEventListener('DOMContentLoaded', function() {
//     const hashtags = document.querySelectorAll('.hashtag');
//     const productCards = document.querySelectorAll('.product-card');

//     hashtags.forEach(tag => {
//         tag.addEventListener('mouseover', () => {
//             const selectedTag = tag.dataset.tag;
            
//             productCards.forEach(card => {
//                 const cardTags = Array.from(card.querySelectorAll('.product-tag-product'))
//                     .map(tag => tag.textContent);
                
//                 if (cardTags.includes(selectedTag)) {
//                     card.style.opacity = '1';
//                 } else {
//                     card.style.opacity = '0.3';
//                 }
//             });
//         });

//         tag.addEventListener('mouseout', () => {
//             productCards.forEach(card => {
//                 card.style.opacity = '1';
//             });
//         });
//     });
// }); 

document.addEventListener('DOMContentLoaded', function() {
    // 両方のクラスのハッシュタグを選択
    const hashtags = document.querySelectorAll('.hashtag, .hashtag_2test');
    // 両方のクラスのカードを選択
    const productCards = document.querySelectorAll('.product-card, .product-card_2test');

    hashtags.forEach(tag => {
        tag.addEventListener('mouseover', () => {
            const selectedTag = tag.dataset.tag;
            
            productCards.forEach(card => {
                // 両方のクラスのタグを検索
                const cardTags = Array.from(card.querySelectorAll('.product-tag-product, .product-tag-product_2test'))
                    .map(tag => tag.textContent.trim()); // trim()を追加してスペースを除去
                
                if (cardTags.includes(selectedTag)) {
                    card.style.opacity = '1';
                } else {
                    card.style.opacity = '0.3';
                }
            });
        });

        tag.addEventListener('mouseout', () => {
            productCards.forEach(card => {
                card.style.opacity = '1';
            });
        });
    });
});

// _2test アコーディオン用
document.addEventListener('DOMContentLoaded', function() {
    // アコーディオンの初期化
    const sectionHeaders = document.querySelectorAll('.section-header_2test');
    
    sectionHeaders.forEach(header => {
        const toggleIcon = header.querySelector('.toggle-icon_2test');
        const content = header.nextElementSibling;
        
        header.addEventListener('click', () => {
            // アイコンの切り替え
            toggleIcon.classList.toggle('closed');
            
            // コンテンツの開閉
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
                content.classList.add('closed');
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
                content.classList.remove('closed');
            }
        });
        
        // 初期状態で開いた状態にする
        content.style.maxHeight = content.scrollHeight + "px";
    });
});