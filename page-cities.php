<?php
/*
Template name: page-cities.php
author : Mathenge Moses
description:  main file to the theme mathengetwotheme

*/
?>

<?php   get_header(); ?>

<div class="notice"> page-cities.php </div>

   <div class="below_header"> 
   	
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>
			
					<h3> <?php  the_title(); ?>	</h3>

					<?php
				 	if('has_post_thumbnail'){
						the_post_thumbnail('thumbnail');
					}

					?>
	<?php the_content(); ?>

<?php the_excerpt(); ?> <a href="<?php echo get_permalink(); ?>"> Read More...</a> 



				<?php		
					} // end while
				} // end if
		?>


   <?php get_footer() ; ?>
