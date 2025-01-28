<!-- product-category-a -->
<?php

/**
 * Template Name: page-category-a
 * Description: This is the template
 */

get_header('product-cat-a');
?>
<div class="category-layout_2test">
    <!-- 左サイドナビゲーション -->
    <aside class="side-nav_2test">
        <section class="issue-search_2test">
            <!-- 課題から -->
            <div class="section-header_2test">
                <h2>課題から探す</h2>
                <span class="toggle-icon_2test"></span>
            </div>
            <div id="filter-results">
                <p>該当する製品は: <span id="result-count">0</span>件</p>
            </div>
            <div class="filter-container">
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="電化"> 電化
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="脱炭素化"> 脱炭素化
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="IOT/ICT"> IOT/ICT
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="現場改善"> 現場改善
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="リユース"> リユース
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="環境に配慮"> 環境に配慮
                </label>
            </div>
            <!-- 用途から -->
            <div class="section-header_2test">
                <h2>用途から探す</h2>
                <span class="toggle-icon_2test"></span>
            </div>
            <div class="filter-container">
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="洗浄"> 洗浄
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="ろう付け"> ろう付け
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="窒化"> 窒化
                </label>
            </div>
            <!-- 材料から -->
            <div class="section-header_2test">
                <h2>材料から探す</h2>
                <span class="toggle-icon_2test"></span>
            </div>
            <div class="filter-container">
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="金属"> 金属
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="セラミックス"> セラミックス
                </label>
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="カーボン"> カーボン
                </label>
            </div>
        
            <!-- 受託テストから -->
            <div class="section-header_2test">
                <h2>受託テストから探す</h2>
                <span class="toggle-icon_2test"></span>
            </div>
            <div class="filter-container">
                <label class="hashtag_2test">
                    <input type="checkbox" class="filter-checkbox" value="受託テスト"> 受託テスト有り
                </label>
            </div>
        </section>

        <!-- <section class="category-list">
            <div class="section-header_2test">
                <h2>製品カテゴリー</h2>
                <span class="toggle-icon_2test"></span>
            </div>
            <div class="accordion-content_2test">
                <h3>検査装置</h3>
                <ul>
                    <li><a href="/products/category-a/a1/product1.html">製品A-1-1</a></li>
                    <li><a href="/products/category-a/a1/product2.html">製品A-1-2</a></li>
                    <li><a href="/products/category-a/a1/product3.html">製品A-1-3</a></li>
                    <li><a href="/products/category-a/a1/product2.html">製品A-1-4</a></li>
                    <li><a href="/products/category-a/a1/product3.html">製品A-1-5</a></li>
                </ul>
                <h3>測定器</h3>
                <ul>
                    <li><a href="/products/category-a/a2/product1.html">製品A-2-1</a></li>
                    <li><a href="/products/category-a/a2/product2.html">製品A-2-2</a></li>
                    <li><a href="/products/category-a/a2/product3.html">製品A-2-3</a></li>
                </ul>
                <h3>検査測定設備</h3>
                <ul>
                    <li><a href="/products/category-a/a3/product1.html">製品A-3-1</a></li>
                    <li><a href="/products/category-a/a3/product2.html">製品A-3-2</a></li>
                    <li><a href="/products/category-a/a3/product3.html">製品A-3-3</a></li>
                </ul>
            </div>
        </section> -->

        
    </aside>

    <!-- メインコンテンツ -->
    <main>
        <!-- A-1 -->
        <h4>検査装置</h4>
        <div class="product-grid_2test">
            <!-- A-1製品群 -->
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1628635991627-88788e920200?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>切削<br>B-1-1<br>B11式ABCDEF</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1669707041081-dd4d51943041?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>切削<br>B-1-1<br>B11式ABCDEF</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1699602049631-57a2e3dada16?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>切削<br>B-1-1<br>B11式ABCDEF</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1526894303636-f7c0ea381b66?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>切削<br>B-1-1<br>B11式ABCDEF</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1488149048941-581936ced6d6?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>切削<br>B-1-1<br>B11式ABCDEF</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- A-2 -->
        <h4>測定器</h4>
        <div class="product-grid_2test">
            <!-- A-2製品群 -->
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b2-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1486693326701-1ea88c6e2af3?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>研磨<br>B-2-1<br>B21式ABCDE</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url()); ?>/category-b/b2-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1563974876412-77c51386dcad?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>研磨<br>B-2-1<br>B21式ABCDE</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">現場改善</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url()); ?>/category-b/b2-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1516656769714-e69dc19ad33d?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>研磨<br>B-2-1<br>B21式ABCDE</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">次世代バーナ</span>
                            <span class="product-tag-product">環境改善リサイクル</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- A-3 -->
        <h4>検査測定設備</h4>
        <div class="product-grid_2test">
            <!-- A-3製品群 -->
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b3-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1717386255773-1e3037c81788?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>光学部品<br>B-3-1<br>B31式UVWX</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url()); ?>/category-b/b3-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1716191300020-b52dec5b70a8?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>光学部品<br>B-3-1<br>B31式UVWX</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url()); ?>/category-b/b3-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1682562031269-58a59c81432c?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>光学部品<br>B-3-1<br>B31式UVWX</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">検査装置・設備</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </main>
</div>
<?php
    get_footer(); 
?>
