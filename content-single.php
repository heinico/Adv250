<div class="post">

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<br />

<h4><?php echo get_the_date(); get_post_time(); ?></h4>

<br />

 <?php if ( is_search() || !is_single() ) : ?>

 <br />

<?php the_excerpt(); ?>

<br />

<p><b>Kirjoittanut: </b> <?php the_author(); ?>  </p>

<br />

<p><?php comments_number(); ?></p>

<br />

<p><a href="<?php the_permalink(); ?>"><?php _e('Lue lisää &raquo;'); ?></a></p>

<br />

<?php else : ?>

<?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?> <p class="kirjoittaja"> <?php the_author(); ?></p>

<?php the_content( __( 'Lue lisää &rarr;') ); ?>

            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Sivut:'),
                    'after'  => '</div>',

                ) );



				echo '<br /><p><a href="../blogi">Palaa takaisin</a></p> <br /> <br />';

			?>

<?php echo get_the_tag_list('<p> <b>Avainsanat:</b> ',' ,' ,'</p>');?>

<?php comments_template(); ?>

<?php endif; ?>


</div>
