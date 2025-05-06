<h1>CONTENT</h1>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<br />

<h4><?php echo get_the_date(); ?></h4>

<br />

<?php the_excerpt(); ?>

<br />

<p class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('Lue lisää &raquo;','content-single'); ?></a></p>
