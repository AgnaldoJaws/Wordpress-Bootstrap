

<?php get_header();?>


<div class="row">

	<div class="col-md-8" id="row_sidebar">
		<div class="panel panel-default">
			<div class="panel-body">
	 <?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>				
				<div class="panel panel-default">
					<div class="panel-body">
					
					<div class="title">
					<a href="<?php the_permalink(); ?>" ><h1><?php the_title();?></h1></a>
					</div>
					
					<div class="imagem">
					<?php the_post_thumbnail(array(250,250))?>
					</div>
					
					
					<div class="texto">
						<?php the_excerpt();?>	
					</div>
						
						Publicado por <?php the_author();?> em <?php the_time('d/m/y');?>
							ás <?php the_time('g:i a');?> <hr color="#cccccc" />	
				     </div>
				</div>
				
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	         </div>
		</div>
	</div>


</div>