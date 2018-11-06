<?php
/*
template name: page.php
author: Mathenge Moses
description: The template for displaying pages
*/
?>


<?php   get_header(); ?>

<div class="notice"> this is page.php </div>

   <div class="below_header"> 


   	
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					

					if(is_page('portfolio')){
						// add disclaimer box
						//hide template files from Wordpress' Appearance Editor
						// https://wordpress.stackexchange.com/questions/223479/hide-certain-template-files-in-apearance-editor/223494#223494
						 include (get_template_directory() . '/template-parts/page/disclaimer_box.php');
					}
					?>

					<h3> <?php  the_title(); ?>	</h3>

						<div class="three_columns">
							<ul class="three_columns">
								<li> <?php get_sidebar(); ?> </li>

								<li> 	<?php
									// set post_thumbnails according to pages
									if (has_post_thumbnail()) {
										# code...
										if(is_page()){
											the_post_thumbnail('banner_image');
										}
									}

									?>
					 			</li>

								<li>  	<?php  include (get_template_directory() . '/template-parts/page/customfield_template.php');  ?> </li> 

							</ul><!--three_columns --> 
						</div><!--three_columns -->

					 	<div class="content">
							<?php the_content(); ?> 

						</div><!-- content -->

	
				<?php		
					} // end while
				} // end if
		?>
	</div><!-- below_header -->

   <?php get_footer() ; ?>






