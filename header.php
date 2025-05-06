<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>
	<?php
		wp_title();
	?>

</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css"  media="all">
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/scripti.js"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="keywords" content="verkkokauppa" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
<link rel="icon" href="<?php bloginfo('template_url');?>/img/adval.ico" type="image/x-icon" />
<script>(function(){document.documentElement.className='js'})();</script>
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" ></script>
</head>
<body>
<!--<!if firefox>
	.margin-top:{-23px!important;}
<![endif]>-->
<header>
	<div id="advlogo">
	<a href="./"><img src="<?php bloginfo('template_url');?>/img/adval250.png" alt="" /></a>
	</div>
<nav>
<div class="paaNavi">
<?php
	$args = array (
	'theme_location' => 'primary');
?>
<?php wp_nav_menu($args);  ?>
<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d tuote', '%d tuotteet', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
</div><!-- paaNavi -->
<div class="valikkoPos" >
<a class="border-menu"><span></span></a>
</div>

<div class="resValikko">
<?php
	$args = array (
	'theme_location' => 'primary'
);
?>
<?php wp_nav_menu($args);  ?>
</div><!-- resValikko -->
</nav>
</header>
<div id="wrapper">
