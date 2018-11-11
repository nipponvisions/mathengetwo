<?php
/*
template name: single.php
author: Mathenge Moses
description: The template for displaying all single posts and attachments
*/
?>
<?php  get_header(); ?>


<div class="notice"> powered by single.php    </div>


   	
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				?>

				<h3> <?php  the_title(); ?>	</h3>

				<!-- 	two_columns  -->
				<div class="two_columns">
					<ul>
						<li >
						<div class="single_image">

							<?php
						 	if(has_post_thumbnail()){

						 		// check if the post has a Post Thumbnail assigned to it.
						 		
						 			 the_post_thumbnail('medium'); 

								}else{
									// load banner place holder 
									?>
									<!-- <p> no image found </p> -->
							<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png"> 

									<?php

									}
									?>
						</div><!-- banner_image -->			
						</li>

						<li>  	
							<?php  include (get_template_directory() . '/template-parts/page/customfield_template.php');  ?>  
						</li> 

						
							<div class="content">
								<?php the_content(); ?>

 							</div><!--	content -->
	
					</ul>
				</div><!-- two_columns -->

				<?php		
					} // end while
				} // end if


				get_sidebar(); 
	

 				get_footer();
  ?>
