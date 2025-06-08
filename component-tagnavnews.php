<!-- component-tagnavnews.php -->
<section id="newsNavtag" class="tag-news">
    <nav>
        <div class="nav nav-tabs tabs-wrapper" id="newsNavtag-tab" role="tablist">
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
            サステナビリティに関しての文章が入ります
        </div>
        <div
            class="tab-pane fade"
            id="newsNavtag-ir"
            role="tabpanel"
            aria-labelledby="newsNavtag-ir"
            tabindex="0">
            IRに関しての文章が入ります
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