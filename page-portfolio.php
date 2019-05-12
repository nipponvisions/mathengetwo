<?php
/*
template name: page-portfolio.php
author: Mathenge Moses
description: The template for displaying pages the portfolio page
*/
?>

<?php  get_header(); ?>

	<div class="below_header">
		<div class="notice"> powered by page-portfolio.php  </div>
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
					?>
					<h2> <?php  the_title(); ?> </h2> 	
					<?php 
					// add a disclaimer box to the portfolio page
					include (get_template_directory() . '/template-parts/page/disclaimer_box.php');  
					?>
					<div class="two_columns">
						<ul>
							<li>
								<?php  	 the_content(); ?> 
							</li>

						</ul>
					</div><!--two_columns-->
					<?php		
			} // end while
		} // end if
		?>
		<?php get_sidebar(); ?>
<?php get_footer() ; ?>