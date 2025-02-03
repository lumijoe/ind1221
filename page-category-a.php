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
