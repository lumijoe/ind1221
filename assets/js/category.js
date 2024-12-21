document.addEventListener('DOMContentLoaded', function() {
    const hashtags = document.querySelectorAll('.hashtag');
    const productCards = document.querySelectorAll('.product-card');

    hashtags.forEach(tag => {
        tag.addEventListener('mouseover', () => {
            const selectedTag = tag.dataset.tag;
            
            productCards.forEach(card => {
                const cardTags = Array.from(card.querySelectorAll('.product-tag'))
                    .map(tag => tag.textContent);
                
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