<!-- product-category-b -->
<?php
/**
 * Template Name: page-category-b
 * Description: This is the template
 */
get_header('product-cat-b');
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
                <h3>切削・加工</h3>
                <ul>
                    <li><a href="/products/category-a/a1/product1.html">製品B-1-1</a></li>
                    <li><a href="/products/category-a/a1/product2.html">製品B-1-2</a></li>
                    <li><a href="/products/category-a/a1/product3.html">製品B-1-3</a></li>
                </ul>
                <h3>研磨・研削</h3>
                <ul>
                    <li><a href="/products/category-a/a2/product1.html">製品B-2-1</a></li>
                    <li><a href="/products/category-a/a2/product2.html">製品B-2-2</a></li>
                    <li><a href="/products/category-a/a2/product3.html">製品B-2-3</a></li>
                </ul>
                <h3>光学部品</h3>
                <ul>
                    <li><a href="/products/category-a/a3/product1.html">製品B-3-1</a></li>
                    <li><a href="/products/category-a/a3/product2.html">製品B-3-2</a></li>
                    <li><a href="/products/category-a/a3/product3.html">製品B-3-3</a></li>
                </ul>
            </div>
        </section> -->

        
    </aside>

    <!-- メインコンテンツ -->
    <main>
        <!-- B-1製品群 -->
        <h4>切削・加工</h4>
        <div class="product-grid_2test">
            <!-- B-1製品群 -->
                <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1712003752927-d4d14921f96a?auto=format&fit=crop&q=80" alt="製品A-1-1">
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
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1-2/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div >
                    <img src="https://images.unsplash.com/photo-1655562693681-ee2a0a81db88?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>切削<br>B-1-2<br>B12式GHIJK</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">現場改善</span>
                            <span class="product-tag-product">ろう付け</span>
                            <span class="product-tag-product">金属</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1-3/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1703777607612-3b6b210c3adf?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>加工<br>B-1-3<br>B13式LMNOPQRS</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">リユース</span>
                            <span class="product-tag-product">環境に配慮</span>
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">セラミックス</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1-4/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1529255848089-c4e456d166e0?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>加工<br>B-1-4<br>B14式TUVWXYZ</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">現場改善</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url()); ?>/category-b/b1-5/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1625773084027-5ede6d300b25?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>加工<br>B-1-5<br>B15式ABCDEFG</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">リユース</span>
                            <span class="product-tag-product">環境に配慮</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- B-2製品群 -->
        <h4>研磨・研削</h4>
        <div class="product-grid_2test">
            <!-- B-2製品群 -->
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b2-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1597423497965-32b0da69bce3?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>研磨<br>B-2-1<br>B21式ABCDE</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">金属</span>
                            <span class="product-tag-product">窒化</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b2-2/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1515630771457-09367d0ae038?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>研磨<br>B-2-2<br>B22式FGHIJ</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">現場改善</span>
                            <span class="product-tag-product">セラミックス</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b2-3/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1564182872950-978e194a05cd?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>研削<br>B-2-3<br>B23式KLMNOPQRST</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">リユース</span>
                            <span class="product-tag-product">環境に配慮</span>
                            <span class="product-tag-product">金属</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- B-3製品群 -->
        <h4>光学部品</h4>
        <div class="product-grid_2test">
            <!-- B-3製品群 -->
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b3-1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1606814540563-5c02d62fd409?auto=format&fit=crop&q=80" alt="製品A-1-1">
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
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b3-2/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1651340675491-6fb0bfb5c4ea?auto=format&fit=crop&q=80" alt="製品A-1-2">
                    <div class="product-card-productname_2test">
                        <p>光学部品<br>B-3-2<br>B32式YZABCDE</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">現場改善</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
                
            <a href="<?php echo esc_url(home_url()); ?>/category-b/b3-3/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1722710070506-eb16da390855?auto=format&fit=crop&q=80" alt="製品A-1-3">
                    <div class="product-card-productname_2test">
                        <p>光学部品<br>B-3-3<br>B33式FGHIJKLMN</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">リユース</span>
                            <span class="product-tag-product">環境に配慮</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">工具・周辺機器</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </main>
</div>
<?php
    get_footer('products'); 
?>
