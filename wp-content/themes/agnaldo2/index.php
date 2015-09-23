

<?php get_header();?>

<div class="container">

	<div class="rightContainer">
		     <?php
							if (have_posts ()) :
								while ( have_posts () ) :
									the_post ();
									?>
				<a href="<?php the_permalink(); ?>" id="title"><h1><?php the_title();?></h1>
		</a>

		<div class="content"><?php the_excerpt();?>
				
				 <div class="b"><?php the_post_thumbnail()?></div>
				Publicado em <?php the_date("d/m/Y")?>
				- <?php comments_number("Nenhum Comentário","1 Comentário","% comentários")?>
				--Publicado por <?php the_author()?>
				--Categoria <?php the_category("")?>
				</div>
				<?php
								endwhile
								;
							 else :
								
								?>
				<p>Nenhum post</p>
				
				<?php endif;?>
	</div>

	<div class="right_container"><?php get_sidebar()?></div>

</div>
<div style="clear: both;"></div>
<?php get_footer()?>