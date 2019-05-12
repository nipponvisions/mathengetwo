<?php
/*
Template name: archive-cities.php
author : Mathenge Moses
description:  for displaying the cities archives

*/
?>

<?php   get_header(); ?>
<div class="below_header">

<div class="notice"> this is archive-cities.php </div>


<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			?>
			<div class= "two_columns">
				<ul>
					<li>
					 	<h3> <?php  the_title(); ?> </h3>
						<ul>
							<li> 
								<div class= "post_thumbnail">
									<?php
									// check if the post has a Post Thumbnail assigned to it.
									if ( has_post_thumbnail()) {
										the_post_thumbnail('thumbnail');
									}else{
										// display a place holder image 
										?>
										<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png" style="width:150px; height:150px;">

										<?php
									}
											
									?>
								</div><!--post_thumbnail -->
							</li>
							<li style="max-width:60%;"> 
								<div class="excerpt">
									 <?php the_excerpt(); ?>
									 <!-- see functions.php for the readmore link -->
									  <!-- <a href="<?php echo get_permalink(); ?>"> Read More...</a>  -->

								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div><!-- two_columns --> 

		<?php		
			} // end while
		} // end if
?>

<?php get_sidebar(); ?> 



<?php get_footer() ; ?>


