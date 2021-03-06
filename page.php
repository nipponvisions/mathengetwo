<?php
/*
template name: page.php
author: Mathenge Moses
description: The generic template for displaying pages
*/
?>



<?php   get_header(); ?>

<div class="notice"> this is  page.php </div>

   <div class="below_header"> 
   	
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>
			
					<h2> <?php  the_title(); ?>	</h2>

					<div class="two_columns">
						<ul>
							<li> 
								<?php

							// set post_thumbnails according to pages
							if (has_post_thumbnail()) {
								# code...
									the_post_thumbnail('banner_image');
									?>
									<h3><?php the_post_thumbnail_caption(); ?> </h3> 
									<?php
							}
							else{
								?>
								<!-- Image_place_holder -->
								<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png" style="width:600px; height:200px;">

								<?php
								}
								?>
							</li>

							<li>
								<?php the_content(); ?> 
								
							</li>
						</ul>
						
					</div>

				<?php		
					} // end while
				} // end if
		?>
	<?php get_sidebar(); ?>
   <?php get_footer() ; ?>
