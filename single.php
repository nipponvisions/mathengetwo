<?php
/*
template name: single.php
author: Mathenge Moses
description: The template for displaying all single posts and attachments
*/
?>
<?php  get_header(); ?>


<div class="notice">  powered by single.php   </div>

 <div class="below_header"> 
   	
	<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				?>

				<h3> <?php  the_title(); ?>	</h3>

				<!-- 	two_columns  -->
				<div class="two_columns">
					<ul>
						<li>

							<?php
						 	if(has_post_thumbnail()){

						 		// check if the post has a Post Thumbnail assigned to it.
						 		?>
						 		<div class="post_thumbnail">
						 			<?php the_post_thumbnail('banner_image'); ?>

						 		</div><!-- post_thumbnail -->

								<?php		
								}else{
									// load banner place holder 
									?>
									<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png" style="width:600px; height:200px;">

									<?php

									}
									?>

						</li>

						<li>  	<?php  include (get_template_directory() . '/template-parts/page/customfield_template.php');  ?> </li> 
					
					</ul>
				</div><!-- two_columns -->
 </div><!-- below_header -->

 <div class="content">
 		<?php the_content(); ?>

 </div><!--	content -->








				<?php		
					} // end while
				} // end if
		?>


	















<?php get_footer(); ?>