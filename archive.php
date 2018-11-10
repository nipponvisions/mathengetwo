<?php
/*
Template name: archive-girl.php
author : Mathenge Moses
description:  for displaying the posts archives

*/
?>

<?php   get_header(); ?>

<div class="notice"> this is archive-girl.php </div>

	

		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>
		

					<div class= "two_columns">
						<ul>
							<li> 

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
									<!-- 	<img src="<?php bloginfo('template_url')?>/assets/images/image_place_holder.png" alt="image_not_availlable"> -->

										<?php
									}
											
									?>
								</div><!--post_thumbnail -->
								</li>

								<li style="max-width:60%;" > 
										<div class="excerpt">
											 <?php the_excerpt(); ?> <a href="<?php echo get_permalink(); ?>"> Read More...</a> 

										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div><!-- two_columns --> 

				<?php		
					} // end while
				} // end if
	

			get_sidebar(); 

			get_footer() ; 
		?>


