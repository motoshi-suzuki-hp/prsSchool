<?php
/*
Template Name: Archives
*/
?>


<?php get_header(); ?>

<!-- 記事ヘッダー -->
<div class="page-parts__header">
    <!-- 画像 -->
    <?php the_post_thumbnail('full'); ?>
    <!-- タイトル -->
    <div class="page-parts__header-title">
        <h2><?php the_title(); ?></h2>
    </div>
</div>


<!-- 本文 -->
<section class="solid-news">
    <div class="news-inner">
        <div class="news-content">
            <h3 class="solid-subtitle"><?php the_title(); ?></h3>
            <?php
                //の引数にパラメータを指定
                $paged = get_query_var('paged', 1);
                $args = array(
                    'post_type' => 'post', //投稿ページ
                    'paged' => $paged, //表示する記事数
                );
            
                // クエリの定義
                $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query ->have_posts()): $the_query->the_post(); ?>
                    <article class="news-wrap">
                            <a href="<?php the_permalink(); ?>">

                                <time><?=get_the_date();?></time>
                                <img src="<?= get_template_directory_uri(); ?><?= catch_that_image(); ?>" alt="eye-catch">
                                <h3><?php the_title() ?></h3>
                            </a>
                    </article>
                <?php endwhile ?>
            <?php endif ?>

            <!-- pagenation -->
            <div class="pagination">
            <?php
            if ($the_query->max_num_pages > 1) {
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%/',
                    'current' => max(1, $paged),
                    'total' => $the_query->max_num_pages
                ));
            }
            wp_reset_postdata();?>
            </div><!-- /pagenation -->
        </div>
    </div>
</section>



<?php get_footer(); ?>