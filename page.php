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
							<div class="single_image">

							<?php
							// set post_thumbnails according to pages
							if (has_post_thumbnail()) {
								# code...
								
									the_post_thumbnail('medium'); 
								

								}else{
									// echo "Image Not Found";
									?>
									<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png" alt="image_not_availlable">

									<?php
								}
							
							?>
							</div><!--single_image -->
						
							</li>

							<li>
								<div class="template_part"> 
									<?php  include (get_template_directory() . '/template-parts/page/customfield_template.php');  ?>
								</div> <!-- template_part -->

							</li>

						</ul>

						<div class="content">
							<?php the_content(); ?> 

						</div>
<<<<<<< HEAD
					</div>

=======
					</div><!-- two_columns -->

	
>>>>>>> e2e5b5599dbc734fc18ba1df1af5ced139912895
				<?php		
					} // end while
				} // end if
		?>

	   	<?php get_sidebar(); ?>

   <?php get_footer() ; ?>






