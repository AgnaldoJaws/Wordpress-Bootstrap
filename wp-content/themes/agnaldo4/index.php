

<?php get_header();?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8" id="left-service">
			<div class="panel panel-default">


				<div class="row">
					<div class="col-md-4" id=""> 
            <?php get_sidebar()?>
            
           </div>

					<div class="col-md-8" id=""> 
           
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
           
	


		





<?php get_footer()?>		