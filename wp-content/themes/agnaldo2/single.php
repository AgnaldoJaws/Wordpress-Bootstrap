

<?php get_header();?>

<div class="container">

	<div class="rightContainer">
		     <?php	if (have_posts ()) : while ( have_posts () ) : 	the_post (); ?>

				
	<div class="singleContainer">

			<a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title();?></h1>
			</a>
	Publicado por <?php the_author();?> em <?php the_time('d/m/y');?>
	ás <?php the_time('g:i a');?> <hr color="#cccccc" />
			</br> </br>
	<?php the_content();?> <br />
			<hr color="#cccccccc">
			<br /> <br />
	<?php comments_template();?>
	
	</div>
		</br>
				<?php
								endwhile
								;
							 else :
								
								?>
				<p>Nenhum post</p>
				
				<?php endif;?>
	</div>

	<div class="leftContainer"> <?php get_sidebar();?> </div>

</div>
<div style="clear: both;"></div>

<?php get_footer();?>
