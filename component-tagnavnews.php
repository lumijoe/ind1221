<!-- component-tagnavnews.php -->
<section id="newsNavtag" class="tag-news">
    <nav class="news-nav">
        <div class="nav nav-tabs tabs-wrapper" id="newsNavtag-tab" role="tablist">
            <h2 class="introduce-txt">カテゴリ別</h2>
            <div class="cat-wrapper">
                <button
                    class="nav-link active news-category-wide"
                    id="newsNavtag-all-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#newsNavtag-all"
                    type="button"
                    role="tab"
                    aria-controls="newsNavtag-all"
                    aria-selected="true">
                    すべて
                </button>
                <button
                    class="nav-link news-category-wide"
                    id="newsNavtag-news-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#newsNavtag-news"
                    type="button"
                    role="tab"
                    aria-controls="newsNavtag-news"
                    aria-selected="false">
                    お知らせ
                </button>
                <button
                    class="nav-link news-category-wide"
                    id="newsNavtag-product-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#newsNavtag-product"
                    type="button"
                    role="tab"
                    aria-controls="newsNavtag-product"
                    aria-selected="false">
                    製品情報
                </button>
                <button
                    class="nav-link news-category-wide"
                    id="newsNavtag-sustainability-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#newsNavtag-sustainability"
                    type="button"
                    role="tab"
                    aria-controls="newsNavtag-sustainability"
                    aria-selected="false">
                    サステナビリティ
                </button>
                <button
                    class="nav-link news-category-wide"
                    id="newsNavtag-ir-tab"
                    data-bs-toggle="tab"
                    data-bs-target="#newsNavtag-ir"
                    type="button"
                    role="tab"
                    aria-controls="newsNavtag-ir"
                    aria-selected="false">
                    IR
                </button>
            </div>
        </div>
    </nav>
    <div class="tab-content" id="newsNavtag-tabContent">
        <div
            class="tab-pane fade show active"
            id="newsNavtag-all"
            role="tabpanel"
            aria-labelledby="newsNavtag-all-tab"
            tabindex="0">
            <!-- カテゴリタブ component-tagnavnews-all.php -->
            <?php get_template_part('component', 'tagnavnews-all'); ?>

        </div>
        <div
            class="tab-pane fade"
            id="newsNavtag-news"
            role="tabpanel"
            aria-labelledby="newsNavtag-news-tab"
            tabindex="0">
            <!-- カテゴリタブ component-tagnavnews-news.php -->
            <?php get_template_part('component', 'tagnavnews-news'); ?>
        </div>
        <div
            class="tab-pane fade"
            id="newsNavtag-product"
            role="tabpanel"
            aria-labelledby="newsNavtag-product"
            tabindex="0">
            <!-- カテゴリタブ component-tagnavnews-product.php -->
            <?php get_template_part('component', 'tagnavnews-product'); ?>
        </div>
        <div
            class="tab-pane fade"
            id="newsNavtag-sustainability"
            role="tabpanel"
            aria-labelledby="newsNavtag-sustainability"
            tabindex="0">
            <!-- カテゴリタブ component-tagnavnews-sustainability.php -->
            <section class="news-archive-section">
                <div class="container archive-container">
                    <div class="news-toppage-ttl">
                        <h2 style="width: 100%;">サステナビリティ</h2>
                    </div>
                    <p class="news-toppage-ttl-en">SUSTAINABILITY</p>
                    <?php get_template_part('component', 'tagnavnews-sustainability'); ?>
                </div>
                <div
                    class="tab-pane fade"
                    id="newsNavtag-ir"
                    role="tabpanel"
                    aria-labelledby="newsNavtag-ir"
                    tabindex="0">
                    <!-- カテゴリタブ component-tagnavnews-ir.php -->
                    <?php get_template_part('component', 'tagnavnews-ir'); ?>
                </div>
                <!-- <div
                    class="tab-pane fade"
                    id="newsNavtag-disabled"
                    role="tabpanel"
                    aria-labelledby="newsNavtag-disabled-tab"
                    tabindex="0">
                    disに関しての文章が入ります
                </div> -->
        </div>
</section>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const section = document.getElementById("newsNavtag");
        const tabButtons = section.querySelectorAll('[role="tab"]');
        const tabContents = section.querySelectorAll('[role="tabpanel"]');

        tabButtons.forEach(button => {
            // disabled タブはスキップ
            if (button.hasAttribute('disabled')) return;

            button.addEventListener("click", function() {
                // 1. 全ボタンから active を外す
                tabButtons.forEach(btn => btn.classList.remove("active"));
                // 2. 全パネルから active/show を外す
                tabContents.forEach(panel => {
                    panel.classList.remove("active", "show");
                });

                // 3. クリックされたボタンに active をつける
                this.classList.add("active");

                // 4. 対象のタブパネルを表示
                const targetId = this.getAttribute("data-bs-target");
                const targetPanel = section.querySelector(targetId);
                if (targetPanel) {
                    targetPanel.classList.add("active", "show");
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const section = document.getElementById("newsNavtag");
        if (!section) return;

        const tabButtons = section.querySelectorAll('[role="tab"]');
        const tabContents = section.querySelectorAll('[role="tabpanel"]');

        const hash = window.location.hash;
        if (hash) {
            const targetButton = [...tabButtons].find(btn => btn.getAttribute('data-bs-target') === hash);
            const targetPanel = section.querySelector(hash);

            if (targetButton && targetPanel) {
                // タブボタンとパネルを一括切り替え
                tabButtons.forEach(btn => btn.classList.remove("active"));
                tabContents.forEach(panel => panel.classList.remove("active", "show"));

                targetButton.classList.add("active");
                targetPanel.classList.add("active", "show");
                // 遷移後だけのフォーカスリング制御
                targetButton.blur();
            }
        }
    });
</script>