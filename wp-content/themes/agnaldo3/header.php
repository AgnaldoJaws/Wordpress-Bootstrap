<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name') ;?>	- <?php bloginfo('description')?></title>


<meta name="description" content="Free Web tutorials">
<meta name="generator" content="WordPress" <?php bloginfo('version');?> />
<meta http-equiv="content-type"
	content="<?php bloginfo_rss('html_type');?>; <?php bloginfo('charset');?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"
	media="all" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0"
	href="<?php bloginfo('rsss2_url');?>" />
<link rel="alternate" type="text/xml" title="RSS .92"
	href="<?php bloginfo('rss_url');?>" />
<link rel="alternate" type="application/Atom+xml" title="Atom 0.3"
	href="<?php bloginfo('atom_url');?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>    
	
	
<?php wp_head();?>



</head>
<body>


<div id="navegacao">
		<div class="container">
		
			<div id="navegacao__content">
			
				<nav class="navbar navbar-default navbar-fixed-top">
				
					<div class="container-fluid">
					<div class="logo"></div>
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						

						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
							id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
						 <li ><a href="#">Home</a></li>	
				<li><a href="<?php echo get_option('home');?>">Principal</a></li>		 
					<?php wp_list_categories('title_li=');?>


							</ul>


						</div>
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
	<!-- Fim navegação -->

  
</div>
	<div class="abc"></div>
	