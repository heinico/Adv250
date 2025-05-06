<?php get_header(); ?>

<div id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part( 'content-single', get_post_format() ); endwhile; else: ?>

<br />
<p><?php _e('Pahoittelut, etsimääsi sivua tai hakutulosta ei löydy.'); ?></p><?php endif; ?>

</div> <!-- main -->
<?php get_footer(); ?>
