<?php
/*
	Template Name : header.php
	Author: Moses Mathenge
	Description: powers the header to the mathengetwo theme
*/
?>

<!--DOCTYPE html-->
<html <?php language_attributes(); ?>>
	<head>
	
		<meta charset ="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?> </title>
		
	</head>


	<body>
		<div class="site_container">
	   		<header class="mathengetwo_header">
				<h1><a href="<?php echo get_option('home'); ?>"> 
					<?php bloginfo('name'); ?></a>  </h1>
					
					<div class="description">
						<?php bloginfo('description') ?> 
					</div><!-- description -->

				<div id='header_nav'>  
 					<?php wp_nav_menu();  ?>
 				</div> <!-- header_nav -->  
 				
				<?php wp_head(); ?>
	   		</header><!-- mathengetwo_header --> 	
