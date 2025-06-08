<!-- ニュースリリース/すべて -->
<section class="news-archive-section">
    <div class="container">
        <div class="news-toppage-ttl">
            <h2 style="width: 100%;">すべて</h2>
        </div>
        <p class="news-toppage-ttl-en">ALL</p>
        <?php
        $args = array(
            'post_type'      => array('news', 'irnews'), // 両方を指定
            'posts_per_page' => 10,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
        );

        $mixed_query = new WP_Query($args);
        ?>

        <?php if ($mixed_query->have_posts()) : ?>
            <div class="news-list">
                <?php while ($mixed_query->have_posts()) : $mixed_query->the_post(); ?>
                    <div class="news-list-wrapper">
                        <div class="news-img-area">
                            <?php
                            $post_type = get_post_type(); // 投稿タイプ判定
                            $image = ($post_type === 'irnews') ? get_field('irpost_imageurl') : get_field('post_imageurl');
                            $title = ($post_type === 'irnews') ? get_field('irpost_title') : get_field('post_title');
                            $terms = get_the_terms(get_the_ID(), ($post_type === 'irnews') ? 'irnewscategory' : 'newscategory');
                            $category = ($terms && !is_wp_error($terms)) ? $terms[0]->name : 'カテゴリなし';
                            ?>

                            <?php if ($image) : ?>
                                <img src="<?php echo esc_url($image); ?>" class="news-cap" alt="">
                            <?php endif; ?>

                            <?php
                            $post_date = get_the_date('Y-m-d');
                            $post_datetime = new DateTime($post_date);
                            $now = new DateTime();
                            $interval = $now->diff($post_datetime)->days;
                            if ($interval < 7) :
                            ?>
                                <span class="mark-newsarrival text80">NEW</span>
                            <?php endif; ?>
                        </div>

                        <article class="news-item" style="border-bottom:none!important; align-items:flex-start;">
                            <div class="news-item-level1">
                                <time><?php echo get_the_date('Y.m.d'); ?></time>
                                <?php
                                if ($terms && !is_wp_error($terms)) :
                                    $first_term = $terms[0];
                                    $category_output = $first_term->name;
                                else :
                                    $category_output = 'カテゴリなし';
                                endif;
                                ?>
                                <span class="news-category"><?php echo esc_html($category_output); ?></span>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="news-item-txt" style="overflow:hidden; display:-webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 3;">
                                <?php echo esc_html($title); ?>
                                <?php if ($post_type === 'irnews') : ?>
                                    <img src="https://lkcodetest.sakura.ne.jp/ind1221/wp-content/uploads/images/icon_pdf.svg" alt="" style="width:23px">
                                <?php endif; ?>
                            </a>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- ページネーション -->
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $mixed_query->max_num_pages,
                ));
                ?>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p>ニュースはまだありません。</p>
        <?php endif; ?>
    </div>
</section>