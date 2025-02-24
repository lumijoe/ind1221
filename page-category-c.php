<!-- product-category-c -->
<?php

/**
 * Template Name: page-category-c
 * Description: This is the template
 */

get_header('product-cat-c');
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
                <h3>熱処理炉</h3>
                <ul>
                    <li><a href="/products/category-a/a1/product1.html">製品B-1-1</a></li>
                    <li><a href="/products/category-a/a1/product2.html">製品B-1-2</a></li>
                    <li><a href="/products/category-a/a1/product3.html">製品B-1-3</a></li>
                </ul>
                <h3>プラント設備</h3>
                <ul>
                    <li><a href="/products/category-a/a2/product1.html">製品B-2-1</a></li>
                    <li><a href="/products/category-a/a2/product2.html">製品B-2-2</a></li>
                    <li><a href="/products/category-a/a2/product3.html">製品B-2-3</a></li>
                </ul>
                <h3>バーナ</h3>
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
        <h4>熱処理炉</h4>
        <div class="product-grid_2test">
            <!-- C-1製品群 -->
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1542274368-443d694d79aa?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>真空炉<br>真空炉A式<br>窒素雰囲気ABC炉</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工業炉</span>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1513828646384-e4d8ec30d2bb?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>真空炉<br>真空炉A式<br>窒素雰囲気ABC炉</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工業炉</span>
                            <p class="product-tag-test">受託テスト可</p>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1547895749-888a559fc2a7?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>真空炉<br>真空炉A式<br>窒素雰囲気ABC炉</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工業炉</span>
                            <p class="product-tag-test">受託テスト可</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- C-2製品群 -->
        <h4>プラント設備炉</h4>
        <div class="product-grid_2test">
            <!-- C-2製品群 -->
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1517732747537-877644b96f8b?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>真空炉<br>真空炉A式<br>窒素雰囲気ABC炉</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工業炉</span>
                            <p class="product-tag-test">受託テスト可</p>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1637035640140-496a91d00dc0?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>真空炉<br>真空炉A式<br>窒素雰囲気ABC炉</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工業炉</span>
                            
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1539186607619-df476afe6ff1?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>真空炉<br>真空炉A式<br>窒素雰囲気ABC炉</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">電化</span>
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">洗浄</span>
                            <span class="product-tag-product">工業炉</span>
                            <p class="product-tag-test">受託テスト可</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- C-3製品群 -->
        <h4>バーナ設備炉</h4>
        <div class="product-grid_2test">
            <!-- C-2製品群 -->
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1605359848061-682b4cae1e7a?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>バーナ<br>ガスバーナ炉<br>ABCDEFGHI</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">金属</span>
                            <span class="product-tag-product">工業炉</span>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1607809610701-3c6adfea2a8b?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>バーナ<br>水素バーナ炉<br>JKLMNOPQ</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">IOT/ICT</span>
                            <span class="product-tag-product">セラミックス</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">工業炉</span>
                            <p class="product-tag-test">受託テスト可</p>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="../category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                <div>
                    <img src="https://images.unsplash.com/photo-1510772314292-9c0ad420734a?auto=format&fit=crop&q=80" alt="製品A-1-1">
                    <div class="product-card-productname_2test">
                        <p>バーナ<br>アンモニアバーナ炉<br>RSTUVWX</p>
                    </div>
                    <div class="product-info-product_2test">
                        <div class="product-tags">
                            <span class="product-tag-product">現場改善</span>
                            <span class="product-tag-product">脱炭素化</span>
                            <span class="product-tag-product">カーボン</span>
                            <span class="product-tag-product">受託テスト</span>
                            <span class="product-tag-product">環境に配慮</span>
                            <span class="product-tag-product">工業炉</span>
                            <p class="product-tag-test">受託テスト可</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- test -->
        <h4>熱処理炉</h4>
        <section>
            <div>
                <div>
                    <?php the_content(); ?>
                </div>
        <?php
        $args = array(
            'post_type' => 'entry_product',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
        ?>
            <div class="works-box">
                <ul class="works-lists">
                    <?php
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                    ?>
                    <li class="works-list">
                        <a href="<?php the_permalink(); ?>" class="works-link">
                            <div class="works-link-thumb"><img src="<?php the_thumbnail_url(); ?>" alt=""></div>
                            <div class="works-link-body">
                                <h3 class="works-link-title"><?php the_title(); ?></h3>
                                <p class="works-link-text"><?php echo get_the_excerpt(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php
                    }
                    wp_rest_postdata();
                    ?>
                </ul>
            </div>
            <?php
        }
        ?>
        </div>
    </section>

    <?php wp_rest_query(); ?>
    
    
            
        <!-- testここまで -->
    </main>
</div>
<?php
    get_footer('products'); 
?>