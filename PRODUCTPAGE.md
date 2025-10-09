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
        <!-- 事例セクション -->
        <section class="section-contents" id="work">
                        <ul class="works-box" style="display:flex; justify-content: center; align-items: flex-start; flex-direction: row; flex-wrap: wrap; gap: 20px;">
                            <!-- <ul class="works-box" style="max-width: 300px;"> -->
                            <?php
                            $args = array(
                                'post_type' => 'entry_product',
                                'post_status' => 'publish',
                                'posts_per_page' => -1,
                            );

                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                                    <li class="works-lists">
                                        <div class="works-list" style="list-style-type: none; max-width: 300px;">
                                            <a class="works-link" href="<?php the_permalink(); ?>">
                                                <!-- 画像 -->
                                                <?php
                                                $product_image = get_field('product_image');
                                                if ($prodcut_image) :
                                                ?>
                                                    <img src="<?php echo esc_url($product_image); ?>" alt="" style="max-width: 300px; max-height: 220px; aspect-ratio: 300 / 220;">
                                                <?php endif; ?>
                                                <!-- 施工名 -->
                                                <h3 class="works-link-text" style="font-size: 16px; display: flex; padding: 5px 0px;">
                                                    <?php
                                                    $product_name01 = get_field('product_name01');
                                                    if ($product_name01) :
                                                        echo esc_html($prodcut_name01);
                                                    endif;
                                                    ?>
                                                </h3>
                                                <!-- タクソノミー -->
                                                <div style="display: flex; flex-wrap: wrap; gap: 5px; max-width: 300px;">
                                                    <?php
                                                    $taxonomies = ['bunrui', 'kadai', 'youto', 'zairyo', 'test'];
                                                    foreach ($taxonomies as $taxonomy) {
                                                        $terms = get_the_terms($post->ID, $taxonomy);
                                                        if ($terms) :
                                                    ?>
                                                            <ul class="works-link-category" style="display: flex;  flex-direction: row; gap:5px; flex-wrap: wrap;">
                                                                <?php
                                                                foreach ($terms as $term) :
                                                                ?>
                                                                    <li style="padding: 2px 8px; border-radius: 10px; border: 1px solid #232323; width: max-content; font-size:12px;">
                                                                        ＃<?php echo esc_html($term->name); ?>
                                                                    </li>
                                                                <?php
                                                                endforeach;
                                                                ?>
                                                            </ul>
                                                    <?php
                                                        endif;
                                                    }
                                                    ?>
                                                </div><!-- タクソノミー終了 -->
                                            </a>
                                        </div>
                                    </li>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </section>

                    <h2 class="" style="font-size:clamp(16px, 2vw, 30px)!important;">分類A</h2>
<section class="" id="">
               <ul class="" style="">
                  
                   <?php
                   $args = array(
                       'post_type' => 'entry_product',
                       'post_status' => 'publish',
                       'posts_per_page' => -1,
                       'tax_query' => array( // タクソノミーによるフィルタリング
                       'relation' => 'AND', // すべての条件に一致する投稿を取得
                           array(
                               'taxonomy' => 'inspectionequipment', // タクソノミー名
                               'field' => 'slug', // スラッグで指定
                               'terms' => array('sokuteiki'), // 表示するターム
                               'operator' => 'IN', // 指定されたタームに一致する投稿のみ取得
                           ),
                       ),
                   );


                   $the_query = new WP_Query($args);
                   if ($the_query->have_posts()) :
                       while ($the_query->have_posts()) : $the_query->the_post();
                   ?>
                           <li class="">
                                   <a class="" href="<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                                   <div>
                                       <!-- 画像 -->
                                       <?php
                                       $product_image = get_field('product_image');
                                       if ($product_image) :
                                       ?>
                                           <img src="<?php echo esc_url($product_image); ?>" alt="">
                                       <?php endif; ?>
                                       <!-- 施工名 -->
                                       <div class="product-card-productname_2test">
                                            <p>
                                                <?php
                                                $product_name01 = get_field('product_name01');
                                                if ($product_name01) :
                                                    echo esc_html($product_name01);
                                                endif;
                                                ?>
                                                <br>
                                                <?php
                                                $product_name02 = get_field('product_name02');
                                                if ($product_name02) :
                                                    echo esc_html($product_name02);
                                                endif;
                                                ?>
                                                <br>
                                                <?php
                                                $product_name03 = get_field('product_name03');
                                                if ($product_name03) :
                                                    echo esc_html($product_name03);
                                                endif;
                                                ?>
                                            </p>
                                        </div>

                                       
                                       <!-- タクソノミー -->
                                       <div class="product-info-product_2test">
                                       <?php
                                           $taxonomies = ['kadai', 'youto'];
                                           foreach ($taxonomies as $taxonomy) {
                                               $terms = get_the_terms($post->ID, $taxonomy);
                                               if ($terms) :
                                           ?>
                                            <div class="product-tags">
                                            <?php
                                            foreach ($terms as $term) :
                                            ?>
                                                <span class="product-tag-product">
                                                    <?php echo esc_html($term->name); ?>
                                                </span>
                                            <?php
                                            endforeach;
                                            ?>
                                            </div>
                                        </div>
                                        <?php
                                        endif;
                                        }
                                        ?> 
                                   </a>
                               </div>
                           </li>
                   <?php
                       endwhile;
                       wp_reset_postdata();
                   endif;
                   ?>
               </ul>
           </section>






        <h4>検査装置</h4>
       
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

            <ul class="product-grid_2test">
            $product_image = get_field('product_image');
            var_dump($product_image); // ここで取得した値を確認
                <?php
                while ($the_query->have_posts()) {
                   $the_query->the_post();
                ?>
                <?php echo esc_html(get_post_field('post_name', get_post())); ?></h4>
                   <li>
                        <a href="<?php echo esc_url(home_url()); ?>/category-b/b1/product1.html" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                            <div>
                                <img src="<?php echo esc_url(get_field('product_image_url', 'entry_product')) ?>" alt="">
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
                    </li>
                <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
            <?php
            }
            ?>








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
        </ul>

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
    get_footer('products'); 
?>





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