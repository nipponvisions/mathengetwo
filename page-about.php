<?php
/*
template name: page-about.php
author: Mathenge Moses
description: The template for displaying the about page
*/
?>

<?php  get_header(); ?>

	<div class="below_header">
		<div class="notice"> powered by page-ABOUT.php  </div>
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
					?>
					<h2> <?php  the_title(); ?> </h2> 	
			
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