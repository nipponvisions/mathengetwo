<?php
/*
template name: single-boys.php
author: Mathenge Moses
description: The template for displaying custom post type girls attachments
*/
?>
<?php  get_header(); ?>

<div class="below_header">
<div class="notice"> powered by single-boys.php  </div>
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>
				

				
					 <h2> <?php  the_title(); ?> </h2> 	

					<div class= "two_columns">
						<ul>
							<li> 
							<?php

							// set post_thumbnails according to pages
							if (has_post_thumbnail()) {
								# code...
								if(is_single()){
									the_post_thumbnail('banner_image');
									?>
									<h3><?php the_post_thumbnail_caption(); ?> </h3> 
									<?php
								}

							}
							else{
								?>
								<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png" style="width:600px; height:200px;">

								<?php
								}
								?>
							</li>

							<li>



								<?php  include (get_template_directory() . '/template-parts/post/boys_customfield.php');  ?>

							</li>

						</ul>

						<ul>
							<li class="content">

								<?php the_content(); ?> 
								
							</li>
						</ul>
							

						</div><!-- two_columns -->
				<?php		
					} // end while
				} // end if
		?>

	 
  	<?php get_sidebar(); ?>
   <?php get_footer() ; ?>
