
<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
<!-- 記事ヘッダー -->
<div class="page-parts__header">
    <!-- 画像 -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-header2.jpg" alt="thumnail">
    <!-- タイトル -->
    <div class="page-parts__header-title">
        <h2>News</h2>
    </div>
</div>

<!-- 本文 -->
<section class="solid-single">
    <article class="single-parts__article">
        <div class="single-parts__article-content">
            <p><?php the_date(); ?></p>
            <h3><?php the_title(); ?></h3>
            <!-- <div class="single-parts__article-category"> -->
                <!-- <?php the_category(); ?> -->
            <!-- </div> -->
            <div  class="single-parts__article-text"><?php the_content(); ?></div>
        </div>
    </article>
</section>
<?php
    endwhile;
endif;
?>   
<?php get_footer(); ?>