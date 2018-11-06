<?php
/*
Template name: archive-girl.php
author : Mathenge Moses
description:  for displaying the posts archives

*/
?>

<?php   get_header(); ?>

<div class="notice"> this is archive-girl.php </div>

    <div class="below_header"> 

		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				//
				?>

				<h3> <?php  the_title(); ?> </h3>

				<!-- 	two_columns  -->
				<div class="two_columns">
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

							</div>
						</li>

						<li>
							<div class="excerpt">
							
								<?php the_excerpt(); ?> <a href="<?php echo get_permalink(); ?>"> Read More...</a>
							 </div>
					
						</li>
					</ul>
				</div>

			<?php		
			} // end while
		} // end if
		?>
	</div><!-- below_header -->

<?php get_footer() ; ?>