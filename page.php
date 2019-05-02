<?php
/*
template name: page.php
author: Mathenge Moses
description: The template for displaying pages
*/
?>


<?php   get_header(); ?>

<div class="notice"> this is page.php </div>



		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>
					<div class="title">  <h3> <?php  the_title(); ?> </h3> 	 </div> 

					<div class= "two_columns">
						<ul>
							<li> 
							<?php

							// set post_thumbnails according to pages
							if (has_post_thumbnail()) {
								# code...
								if(is_page()){
									the_post_thumbnail('banner_image');
								}
							}
							?>

							</li>

							<li>
								<?php  include (get_template_directory() . '/template-parts/page/customfield_template.php');  ?>

							</li>

						</ul>

						<div class="content">
							<?php the_content(); ?> 

						</div>
					</div>

				<?php		
					} // end while
				} // end if
		?>

	   	<?php get_sidebar(); ?>

   <?php get_footer() ; ?>






