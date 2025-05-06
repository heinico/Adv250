<?php
/**
 *  ADV250
 *
 * @package ADV250
 */

//woocommerce-jutut
add_action ('after_setup_theme', 'woocommerce_support');
  function woocommerce_support() {
    add_theme_support('woocommerce');
  }

//Kommenttisysteemi
 if (get_option('thread_comments')) {
  wp_enqueue_script('comment-reply');

 }
 //Luodaan navigaatiomenu
 register_nav_menus(array(
  'primary' => __('Päävalikko'),
  'footer' => __('Alatunnistevalikko')
 ));


 //Tällä luodaan thumbnail
 function adval_thumbnail() {
  add_theme_support('post-thumbnails');

 }
 add_action('after_setup_theme', 'adval_thumbnail');

//Customisoidut kommentit
 function custom_comments ($comment, $args, $depth) {
 $GLOBALS[' comment '] = $comment; ?>
 <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
 <div id="comment-<?php comment_ID(); ?>">
 <div class="comment-header">
 <?php echo get_avatar($comment, $size='48', $default='<path_to_url>' ); ?>

 <?php printf (__('<b><cite_class="fn">%s</cite></b> <span class="says"> kommentoi:</span>'), get_comment_author_link()) ?>
 </div>
 <?php if ($comment->comment_approved =='0') : ?>
 <em><?php _e('Kommenttisi odottaa moderointia.') ?> </em>
 <br />
 <?php endif ; ?>
 <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link($comment->comment_ID )) ?>">
 <?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time() ) ?> </a>
 <?php edit_comment_link(__(' (Muokkaa) '), '   ', ' ') ?> </div>
 <?php comment_text() ?> <div class="reply">
 <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))) ?>
 </div><?php
 }

 //Rekisteröidään sidebar, jolla saadaan widgetit käyttöön

 function uatf_theme_widgets_init() {

  register_sidebar( array (
  'name' => 'Alaotsikko',
  'id' => 'adv_footer_area',
  'before_widget' => '<footer>',
  'after_widget' => '</footer>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
 ));
  register_sidebar( array (
  'name' => 'Sliderin oma area',
  'id' => 'advisori_slide_area',
  'before_widget' => '<div id="slider">',
  'after_widget' => '</div>',
  'before_title' => '<h1 class="widget_title">',
  'after_title' => '</h1>'
 ));
 register_sidebar( array (
 'name' => 'Etusivutuotteiden oma area',
 'id' => 'advisori_etutuote_area',
 'before_widget' => '<div id="vk">',
 'after_widget' => '</div>',
 'before_title' => '<h1>',
 'after_title' => '</h1>'
));
 }

 add_action( 'widgets_init', 'uatf_theme_widgets_init' );
 //add_filter('loop_shop_per_page', create_function('$cols', 'return 4;'));
 add_shortcode( 'br', 'add_br_shortcode' );


 function add_br_shortcode() {
  return '<br class="emptyline"/>';
 }

 // Ensure cart contents update when products are added to the cart via AJAX (place the following in functions.php)
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d tuote', '%d tuotteet', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
	<?php

	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}
 ?>
