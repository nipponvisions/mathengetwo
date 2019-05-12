<?php
/*
Template name: page-middlesex.php
author : Mathenge Moses
description:  the  page for listing the  site pages N/b holding brief for proper navagation

*/
?>

<?php   get_header(); ?>



   <div class="below_header"> 
   <div class="notice"> Powered by page-middlesex.php </div>
   	
		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); 
					?>


					<h3> <?php the_title(); ?> </h3>

					<?php WP_list_pages(); ?> 


				<?php		
					} // end while
				} // end if
		?>


   <?php get_footer() ; ?>
