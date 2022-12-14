<?php
/*
Template Name: Archives
*/
?>


<?php get_header(); ?>

<!-- 記事ヘッダー -->
<div class="page-parts__header">
    <!-- 画像 -->
    <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/img/blog-header2.jpg"  media="(min-width: 768px)"/>
        <img src="<?= get_template_directory_uri(); ?>/img/blog-header_sp.jpg" alt="blog" />
    </picture>
    <!-- タイトル -->
    <div class="page-parts__header-title">
        <h2 class="fadeUpTrigger05 fadeUp05"><?php the_title(); ?></h2>
    </div>
</div>


<!-- 本文 -->
<section class="solid-news">
    <div class="news-inner">
        <div class="news-content">
            <h3 class="solid-subtitle fadeUpTrigger10 fadeUp10"><?php the_title(); ?></h3>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 5, // 表示件数
                'orderby'     => 'date',
                'order' => 'DESC'
            ) );
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query ->have_posts()): $the_query->the_post(); ?>
                    <article class="news-wrap fadeUpTrigger15 fadeUp15">
                            <a href="<?php the_permalink(); ?>">

                                <time><?=get_the_date();?></time>
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog.png" alt="eye-catch">
                                <?php endif; ?>
                                <h4><?php the_title() ?></h4>
                            </a>
                    </article>
                <?php endwhile ?>
            <?php endif ?>

            <!-- pagenation -->
            <div class="pagenation">
                <?php
                    if ($the_query->max_num_pages > 1) {
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%/',
                            'current' => max(1, $paged),
                            'mid_size' => 1,
                            'total' => $the_query->max_num_pages
                        ));
                    }
                    wp_reset_postdata();
                ?>
            </div><!-- /pagenation -->
        </div>
    </div>
</section>



<?php get_footer(); ?>