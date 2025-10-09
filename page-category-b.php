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
                    <input type="checkbox" class="filter-checkbox" value="IOT / ICT"> IOT / ICT
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
                    <input type="checkbox" class="filter-checkbox" value="受託テスト有り"> 受託テスト有り
                </label>
            </div>
        </section>
        
    </aside>

    <!-- メインコンテンツ -->
    <main>
        <?php
        // 製品グループ（切削・加工、研磨・研削、光学部品）を指定順で表示
        $product_group_slugs = array('sessakukakou', 'kenmakensaku', 'kougakubuhin');
        
        foreach ($product_group_slugs as $group_slug) :
            // スラッグから該当するタームを取得
            $group_term = get_term_by('slug', $group_slug, 'bunrui');
            
            if (!$group_term || is_wp_error($group_term)) continue;
        ?>
            <h4><?php echo esc_html($group_term->name); ?></h4>
            <div class="product-grid_2test">
                <?php
                $args = array(
                    'post_type' => 'entry_product',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'bunrui',
                            'field' => 'slug',
                            'terms' => $group_slug
                        )
                    )
                );
                
                $product_query = new WP_Query($args);
                
                if ($product_query->have_posts()) :
                    while ($product_query->have_posts()) : $product_query->the_post();
                        
                        // カスタムフィールド取得
                        $image_url = get_field('product_image_url'); //製品画像URL
                        $name01 = get_field('product_name01'); // 製品名01
                        $name02 = get_field('product_name02'); // 製品名02
                        $name03 = get_field('product_name03'); // 製品名03
                        $product_url = get_permalink();
                        
                        // 全タクソノミーのタームを取得
                        $kadai_terms_post = get_the_terms(get_the_ID(), 'kadai');
                        $youto_terms_post = get_the_terms(get_the_ID(), 'youto');
                        $zairyo_terms_post = get_the_terms(get_the_ID(), 'zairyo');
                        $test_terms_post = get_the_terms(get_the_ID(), 'test');
                        $bunrui_terms_post = get_the_terms(get_the_ID(), 'bunrui');
                        
                        // 全タグを1つの配列に統合
                        $all_tags = array();
                        if ($kadai_terms_post && !is_wp_error($kadai_terms_post)) {
                            $all_tags = array_merge($all_tags, $kadai_terms_post);
                        }
                        if ($youto_terms_post && !is_wp_error($youto_terms_post)) {
                            $all_tags = array_merge($all_tags, $youto_terms_post);
                        }
                        if ($zairyo_terms_post && !is_wp_error($zairyo_terms_post)) {
                            $all_tags = array_merge($all_tags, $zairyo_terms_post);
                        }
                        if ($test_terms_post && !is_wp_error($test_terms_post)) {
                            $all_tags = array_merge($all_tags, $test_terms_post);
                        }
                        if ($bunrui_terms_post && !is_wp_error($bunrui_terms_post)) {
                            $all_tags = array_merge($all_tags, $bunrui_terms_post);
                        }
                ?>
                
                <a href="<?php echo esc_url($product_url); ?>" target="_blank" rel="noopener noreferrer" class="product-card_2test">
                    <div>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($name02); ?>">
                        <div class="product-card-productname_2test">
                            <p><?php echo esc_html($name01); ?><br><?php echo esc_html($name02); ?><br><?php echo esc_html($name03); ?></p>
                        </div>
                        <div class="product-info-product_2test">
                            <div class="product-tags">
                                <?php if (!empty($all_tags)) : ?>
                                    <?php foreach ($all_tags as $tag) : ?>
                                        <span class="product-tag-product"><?php echo esc_html($tag->name); ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
                
                <?php 
                    endwhile;
                    wp_reset_postdata();
                else :
                    // 製品がない場合のメッセージ
                    echo '<p>この分類の製品はまだ登録されていません。</p>';
                endif;
                ?>
            </div>
        <?php endforeach; ?>
    </main>
</div>
<?php
    get_footer('products'); 
?>
