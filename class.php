<?php
/*
Template Name: Class
*/
?>

<?php get_header(); ?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>

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
<section class="solid-class">
    <article class="class-parts__article">
        <?php the_content(); ?>
    </article>
</section>


<?php
    endwhile;
endif;
?>   



<?php get_footer(); ?>