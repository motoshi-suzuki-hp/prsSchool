<?php
/*
Template Name: Location
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
    <picture>
        <source srcset="<?= get_template_directory_uri(); ?>/img/location-header2.jpg"  media="(min-width: 768px)"/>
        <img src="<?= get_template_directory_uri(); ?>/img/location-header_sp.jpg" alt="class" />
    </picture>
    <!-- タイトル -->
    <div class="page-parts__header-title">
        <h2 class="fadeUpTrigger05 fadeUp05"><?php the_title(); ?></h2>
    </div>
</div>


<!-- 本文 -->
<section class="solid-location">
    <article class="page-parts__article fadeUpTrigger10 fadeUp10">
        <?php the_content(); ?>
    </article>
</section>
<?php
    endwhile;
endif;
?>   
<?php get_footer(); ?>