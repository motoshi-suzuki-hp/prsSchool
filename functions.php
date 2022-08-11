<?php
   function theme_enqueue_styles() {
      wp_enqueue_style('style-style', get_template_directory_uri().'/css/style.css');
      wp_enqueue_style('reset-style', get_template_directory_uri().'/css/reset.css');
      wp_enqueue_style('tab-style', get_template_directory_uri().'/css/tab.css');
   }
   add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>

<?php
   function theme_enqueue_scripts() {
      wp_enqueue_script('hamburger-script', get_template_directory_uri().'/js/hamburger.js', array(), false, true);
      wp_enqueue_script('header-script', get_template_directory_uri().'/js/pulldown.js', array(), false, true);
      wp_enqueue_script('icon-script', 'https://kit.fontawesome.com/37c44e9cd8.js', array(), false, true);
      wp_enqueue_script('tel-script', get_template_directory_uri().'/js/tel.js', array(), false, true);
      wp_enqueue_script('tab-script', get_template_directory_uri().'/js/tab.js', array(), false, true);
   }
   add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
?>



<?php

//FAQ ショートコード
add_shortcode('faq', 'faq_shortcode');
if ( !function_exists( 'faq_shortcode' ) ):
function faq_shortcode( $atts, $content = null ){
extract( shortcode_atts( array(
    'color' => null,
    'marker' => null,
    'icon' => null,
  ), $atts ) );
  $content = remove_wrap_shortcode_wpautop('faq_item', $content);
  $content = do_shortcode( shortcode_unautop( $content ) );
  $tag .= '<dl class="faq_block">'.
              $content.
          '</dl>';
  return apply_filters('faq_tag', $tag);
}
endif;
//FAQ_Item ショートコード
add_shortcode('faq_item', 'faq_item_shortcode');
if ( !function_exists( 'faq_item_shortcode' ) ):
function faq_item_shortcode( $atts, $content = null ){
  extract( shortcode_atts( array(
    'question' => null,
    'answer' => null,
  ), $atts ) );
  $content = do_shortcode( shortcode_unautop( $content ) );
  $tag .= '<dt class="faq_q">'.$question.'</dt>'.
            '<dd class="faq_a">'.$answer.'</dd>';
  return apply_filters('faq_item_tag', $tag);
}
endif;

?>




<?php
   // 投稿画面でアイキャッチ画像を設定できるようにする
   function custom_theme_setup(){
      add_theme_support('post-thumbnails');
   }
   add_action('after_setup_theme', 'custom_theme_setup');
   
   // 存在しないページを指定された場合は 404 ページを表示する
   function redirect_404(){
      if( is_404() ){
         wp_redirect( "404.php", 301 );
         exit();
      }
   }
   add_action('template_redirect', 'redirect_404');
?>

