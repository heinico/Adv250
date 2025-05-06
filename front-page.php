<?php get_header(); ?>

<div id="slideri">
<h2></h2>
<?php if(dynamic_sidebar('advisori_slide_area')) : else : endif ?>
</div>
<div id="main">

<!--<div id="content">



<?php the_post_thumbnail ('post-thumb'); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<h2><?php //the_title(); ?></h2>



<h4><?php //the_time('d/m/y') ?></h4>

<br />

<p><?php the_content('Read more...'); ?></p>

<br />

<?php endwhile; else: ?>

<br />

<p><?php _e('Pahoittelut, etsimääsi sivua tai hakutulosta ei löydy.'); ?></p><?php endif; ?>

</div>--><!-- content -->


<div id="vk">
<h1></h1>
<?php if(dynamic_sidebar('advisori_etutuote_area')) : else : endif ?>
</div>
<div id="blogi">
<h1>ADV250:n verkkokaupan blogi</h1><br />
<?php
	$recent_posts = wp_get_recent_posts();
	foreach( $recent_posts as $recent ){
		echo '<h2><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</h2></a><br /> ';
		echo'<p>Kirjoitettu viimeksi ' .  date( 'd/m/Y', strtotime( $recent['post_date'] ) ) . '.</p>';
	}
?>
</div> <!-- blogi -->
</div> <!-- main -->

<?php get_footer(); ?>
