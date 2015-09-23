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
</head>

<body>
         
	
	
<?php wp_head();?>



</head>
<body>

	<div class="header"></div>



	<div class="menuM">
		<nav>
			<ul>
				<li><a href="<?php echo get_option('home');?>">Home</a></li>
		 
		<?php wp_list_categories('title_li=');?>
	
		
		</nav>
	</div>